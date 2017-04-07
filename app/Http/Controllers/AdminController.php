<?php

namespace App\Http\Controllers;

use Analytics;
use Illuminate\Support\Facades\Input;
use App\Interfaces\TypeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post_type;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Type_post;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\PostInterface;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	protected $typeService;
	protected $postService;
	public function __construct(TypeInterface $typeInterface, PostInterface $postInterface) {
		$this->middleware ( 'auth' );
		$this->typeService = $typeInterface;
		$this->postService = $postInterface;
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function dashboard() {
		$analyticsData = Analytics::getVisitorsAndPageViews ( 7 );
		$data = json_decode ( $analyticsData );
		
		$dates = array ();
		$visitors = array ();
		foreach ( $data as $a ) {
			$date = strtotime ( $a->date->date );
			array_push ( $dates, "'" . date ( 'Y-M-d', $date ) . "'" );
		}
		
		foreach ( $data as $d ) {
			array_push ( $visitors, $d->visitors );
		}
		
		return view ( 'dashboard', [ 
				'dates' => $dates,
				'visitors' => $visitors 
		] );
	}
	public function save_content(Request $request) {
		$content = Input::get ( 'hidden_content' );
		
		$id = $request ['id'];
		
		$types = $request ['type1'];
		
		if ($id > 0) {
			// Update
			DB::table ( 'posts' )->where ( 'id', '=', $id )->update ( [ 
					'content' => $content,
					'section' => $request ['section'],
					'title' => $request ['title'],
					'path' => $request ['thumbnail'] 
			] );
		} else {
			$post = new Post ();
			$post->content = $content;
			$post->section = $request ['section'];
			$post->status = 1;
			$post->views = rand ( 12, 155 );
			$post->title = $request ['title'];
			$post->path = $request ['thumbnail'];
			$post->author_id = Auth::user ()->id;
			$post->save ();
			$id=$post->id;
		}
		
		if ($types != null && count ( $types ) > 0) {
			foreach ( $types as $t ) {
				$type_post = new Type_post ();
				$type_post->post_id = $id;
				$type_post->type_id = $t;
				$type_post->save ();
			}
		}
		
		return redirect ( '/posts' );
	}
	public function index() {
		return view ( 'admin' );
	}
	public function posts() {
		return view ( 'posts', [ 
				'posts' => $this->postService->getAllPosts () 
		] );
	}
	public function editor() {
		return view ( 'editor', [ 
				'types' => $this->typeService->getActiveTypes () 
		] );
	}
	public function type() {
		return view ( 'type', [ 
				'types' => $this->typeService->getAllTypes () 
		] );
	}
	public function save_type(Request $request) {
		$rules = array (
				'type' => 'required|unique:post_types|max:255' 
		);
		
		$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
			
			// get the error messages from the validator
			$messages = $validator->messages ();
			
			// redirect our user back to the form with the errors from the validator
			return back ()->withErrors ( $validator );
		}
		$type = new Post_type ();
		$type->type = $request ['type'];
		$type->status = 1;
		$type->save ();
		return view ( 'type', [ 
				'types' => $this->typeService->getAllTypes () 
		] );
	}
	public function ajax_save_type(Request $request) {
		$rules = array (
				'type' => 'min:3|unique:post_types|max:255' 
		);
		
		$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
			
			// get the error messages from the validator
			$messages = $validator->messages ();
			
			// redirect our user back to the form with the errors from the validator
			return null;
		}
		$type = new Post_type ();
		$type->type = $request ['type'];
		$type->status = 1;
		$type->save ();
		return $type;
	}
	public function toggle_type(Request $request) {
		$id = $request ['type_id'];
		$status = $request ['status'];
		DB::table ( 'post_types' )->where ( 'id', $id )->update ( [ 
				'status' => $status 
		] );
		return $status;
	}
	public function edit($id) {
		$post = DB::table ( 'posts' )->where ( 'id', '=', $id )->first ();
		$type = DB::select ( 'select * from type_post where post_id = ' . $id );
		return view ( 'editor', [ 
				'types' => $this->typeService->getActiveTypes (),
				'post' => $post,
				'type_post' => $type 
		] );
	}
	public function toggle_post(Request $request) {
		$id = $request ['post_id'];
		$status = $request ['status'];
		DB::table ( 'posts' )->where ( 'id', '=', $id )->update ( [ 
				'status' => $status 
		] );
		return $status;
	}
}
