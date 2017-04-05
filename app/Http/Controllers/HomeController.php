<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use App\Interfaces\PostInterface;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	protected $postService;
	public function __construct(PostInterface $postInterface) {
		$this->middleware ( 'guest' );
		$this->postService = $postInterface;
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		xdebug_break();
		$activePosts = $this->postService->getActivePosts ();
		if (isset ( $_GET ['page'] )) {
			return view ( 'portal/index', [ 
					'page' => $_GET ['page'],
					'activePosts' => $activePosts 
			] );
		} else {
			return view ( 'portal/index', [ 
					'activePosts' => $activePosts 
			] );
		}
	}
}
