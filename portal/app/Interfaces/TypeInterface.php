<?php 
namespace App\Interfaces;

interface TypeInterface {
	
	function getAllTypes();
	
	function getActiveTypes();
	
	function getTypeByName($name);
	
	function disableType($id);
	
	function enableType($id);
}
