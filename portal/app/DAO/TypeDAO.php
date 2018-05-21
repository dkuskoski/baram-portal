<?php
namespace App\DAO;

use App\Interfaces\TypeInterface;
use Illuminate\Support\Facades\DB;

class TypeDAO implements TypeInterface{
	
	function getAllTypes(){
		$items = DB::select("SELECT * FROM post_types order by id");
		return $items;
	}
	
	function getActiveTypes(){
		$items = DB::select("SELECT * FROM post_types where status = 1 order by id");
		return $items;
	}
	
	function getTypeByName($name){
		$item = DB::table("post_type")->where("type", $name)->first();
		return $item;
	}
	
	function disableType($id){
		$items = DB::table("post_type")->where("id", $id)->update("status", 0);
	}
	
	function enableType($id){
		$items = DB::table("post_type")->where("id", $id)->update("status", 1);
	}
}