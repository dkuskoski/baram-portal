<?php 
namespace App\Interfaces;

interface PostInterface {
	
	function getAllPosts();
	
	function getPostById($id);
	
	function removePost($id);
	
	function disablePost($id);
	
	function enablePost($id);
	
	function getActivePosts();
}
