<?php 
namespace App\Interfaces;

interface PostInterface {
	
	function getAllPosts();
	
	function getPostById($id);
	
	function removePost($id);
	
	function disablePost($id);
	
	function enablePost($id);
	
	function getActivePosts();

	function getMostViewed($count);

	function getBySection($section, $end, $search);

	function getCountBySection($section, $search);

	function updateViews($id, $url, $session);

	function updatePostViews($id, $views);
}
