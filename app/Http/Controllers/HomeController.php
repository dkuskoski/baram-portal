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
		
		$activePosts = $this->postService->getActivePosts ();

		// usort($activePosts, function($a, $b)
		// {
		// 	return strcmp($b->created_at, $a->created_at);
		// });

		$post = $activePosts[0];	
		if (isset($_GET['page'])){
			if($_GET['page'] == 'post'){
				$id = explode('-', substr($_GET['title'], 5))[0];
				$post = $this->postService->getPostById($id);
			}
			$categoryPostsCount = 0;
			$categoryPosts = null;
			if($_GET['page'] == 'category'){
				$categoryPosts = $this->postService->getBySection($_GET['cat'], 6);
				$categoryPostsCount = $this->postService->getCountBySection($_GET['cat']);
			}
		}
		$mostViewed = $this->postService->getMostViewed(5);

		if (isset ( $_GET ['page'] )) {
			return view ( 'portal/index', [ 
					'page' => $_GET ['page'],
					'activePosts' => $activePosts,
					'mostViewed' => $mostViewed,
					'post' => $post,
					'categoryPosts' => $categoryPosts,
					'categoryPostsCount' => $categoryPostsCount
			] );
		} else {
			return view ( 'portal/index', [ 
					'activePosts' => $activePosts,
					'mostViewed' => $mostViewed,
					'post' => $post
			] );
		}
	}

	public function getPosts(){
		$categoryPosts = $this->postService->getBySection($_GET['cat'], $_GET['count']);
		return $categoryPosts;
	}
}
