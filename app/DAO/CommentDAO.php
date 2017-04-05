<?php
namespace App\DAO;

use App\Interfaces\CommentInterface;
use Illuminate\Support\Facades\DB;

class Comment implements CommentInterface{
	
	function getAllPosts(){
		$items = DB::select("SELECT * FROM comments where status = 1 order by date");
		return $items;
	}
	
	function getPostById($id){
		$item = DB::table("comments")->where("id", $id)->first();
		return $item;
	}
	
	function removePost($id){
		$items = DB::table("comments")->where("id", $id)->update("status", -1);
	}
	
	function disablePost($id){
		$items = DB::table("comments")->where("id", $id)->update("status", 0);
	}
	
	function enablePost($id){
		$items = DB::table("comments")->where("id", $id)->update("status", 1);
	}
}