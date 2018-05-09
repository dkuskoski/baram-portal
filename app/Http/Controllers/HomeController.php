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

		$activePosts = $this->postService->getActivePosts();
		$post = $activePosts[0];	
		$categoryPostsCount = 0;
		$categoryPosts = null;
		$mostViewed = $this->postService->getMostViewed(5);

		if (isset($_GET['page']) ){
			if($_GET['page'] == 'post'){
				$id = explode('-', $_GET['title'])[0];
				$update = $this->postService->updateViews($id, \Request::url(), \Request::ip());
				$post = $this->postService->getPostById($id);
				if($update){
					$this->postService->updatePostViews($id, $post->views);
					$post->views = $post->views + 1;
				}
				
			}
			if($_GET['page'] == 'category'){
				$cat = $_GET['cat'];
				if($cat == 18){
					$cat = "18+";
				}
				$search = null;
				if(isset($_GET['search']) && $_GET['cat'] == "search") {
					$search = $_GET['search'];
				}	
				$categoryPostsCount = $this->postService->getCountBySection($cat, $search);
				$categoryPosts = $this->postService->getBySection($cat, 6, $search);
			}
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
		$search = null;
		if($_GET['cat'] == "search"){
			$search = $_GET['search'];
		}
		$categoryPosts = $this->postService->getBySection($_GET['cat'], $_GET['count'], $search);
		return $categoryPosts;
	}
}
