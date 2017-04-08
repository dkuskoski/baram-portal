<?php
namespace App\DAO;

use App\Interfaces\PostInterface;
use Illuminate\Support\Facades\DB;
use App\Views;

class PostDAO implements PostInterface {

    public function getActivePosts(){
        $items = DB::select("SELECT * FROM posts where status = 1 order by created_at desc limit 100");
        return $items;
    }

    public function getAllPosts(){
        $items = DB::select("SELECT * FROM posts order by created_at desc");
        return $items;
	}
	
	function getPostById($id){
		$item = DB::table("posts")->where("id", $id)->first();
		return $item;
	}
	
	function removePost($id){
		$items = DB::table("posts")->where("id", $id)->update("status", -1);
	}
	
	function disablePost($id){
		$items = DB::table("posts")->where("id", $id)->update("status", 0);
	}
	
	function enablePost($id){
		$items = DB::table("posts")->where("id", $id)->update("status", 1);
	}

	function getMostViewed($count){
		$items = DB::select("select * from posts where status = 1 order by views desc limit " . $count);
		return $items;
	}

	function getBySection($section, $end){
		$start = $end - 6;
		$items = DB::select("SELECT * FROM posts WHERE section = '" . $section . "' and status = 1 order by created_at desc limit " . $end . ' offset ' . $start);
		return $items;
	}

	function getCountBySection($section){
		$posts = DB::table('posts')->count();
		return $posts;
	}

	function updateViews($id, $url, $session){
		DB::table('views')->where('created_at', '<', new \DateTime('Yesterday'))->delete();

		$posts = DB::select("select id from views where post_id = " . $id . " and session = '" . $session . "'");
		if($posts != null && count($posts) > 0){
			return false;
		}

		$view = new Views();
		$view->post_id = $id;
		$view->url = $url;
		$view->session = $session;
		$view->save();
			
		return true;
	}

	function updatePostViews($id, $views){
		DB::table('posts')->where('id', '=', $id)->update([
			'views' => $views + 1
		]);
	}
}