<?php
namespace App\DAO;

use App\Interfaces\PostInterface;
use Illuminate\Support\Facades\DB;

class PostDAO implements PostInterface{
	
	function getActivePosts(){
		$items = DB::select("SELECT * FROM posts where status = 1 order by created_at");
		return $items;
	}
	
	function getAllPosts(){
// 		$items = DB::select("SELECT posts.*, post_types.type FROM posts leftjoin type_post on posts.id = type_post.post_id leftjoin post_types on type_post.type_id = post_types.id order by created_at");
		$items = DB::select("SELECT * FROM posts order by created_at");
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
}