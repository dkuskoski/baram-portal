<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use App\Interfaces\PostInterface;

class RESTController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
    protected $postService;
    
	public function __construct(PostInterface $postInterface) {
		$this->middleware ( 'auth.basic' );
		$this->postService = $postInterface;
    }

    public function getActivePosts() {
        $activePosts = $this->postService->getActivePosts();
        return response()->json(json_encode($activePosts), 200);
    }

    public function getMostViewed() {
        $mostViewed = $this->postService->getMostViewed($_GET['count']);
        return response()->json(json_encode($mostViewed), 200);
    }

    public function getPost() {
        $id = $_GET['id'];
        $post = $this->postService->getPostById($id);
        $update = $this->postService->updateViews($id, \Request::url(), \Request::ip());
        if($update){
            $this->postService->updatePostViews($id, $post->views);
            $post->views = $post->views + 1;
        }
        return response()->json(json_encode($post), 200);
    }

    public function getPosts(){
        $search = null;
        $cat = $_GET['cat'];
        if($cat == 18){
            $cat = "18+";
        }
		if($cat == "search"){
			$search = $_GET['search'];
		}
		$categoryPosts = $this->postService->getBySection($cat, $_GET['count'], $search);
		return response()->json(json_encode($categoryPosts), 200);
	}

    // public function getCategory() {
    //     $cat = $_GET['cat'];
	// 			if($cat == 18){
	// 				$cat = "18+";
	// 			}
	// 			$search = null;
	// 			if(isset($_GET['search']) && $cat) {
	// 				$search = $_GET['search'];
	// 			}	
	// 			 $categoryPostsCount = $this->postService->getCountBySection($cat, $search);
	// 			$categoryPosts = $this->postService->getBySection($cat, 6, $search);
    //     return response()->json(json_encode($categoryPosts), 200);
    // }
}