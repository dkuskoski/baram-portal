<?php 
namespace App\Interfaces;

interface CommentInterface {
	
	function getAllComments();
	
	function getCommentById($id);
	
	function removeComment($id);
	
	function disableComment($id);
	
	function enableComment($id);
}
