<?php
/**
 * @package Dir_Data_To_Js
 * @version 1.0
 */
/*
Plugin Name: Dir Data To Js
Description: Delivers an array of directory data to js scope (in client)
Author: Benjamin Berglund
Version: 1.0
*/


// plugin function
function dirDataToJs() {
	//
	$dir_in_uploads = '/buildings'; // <- CONFIG
	// (I should build an admin options panel for this..)
  $path = wp_upload_dir();
  $json = json_encode(dirDataToJs_navigateFiles($path['basedir'] . '/' . $dir_in_uploads));
  print("<script> var dirData = " . $json . "; </script>");
}

add_action('wp_head', 'dirDataToJs', 1);


// support functions
function dirDataToJs_navigateFiles($path){
	$ritit = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
	$r = array();
	foreach ($ritit as $splFileInfo) {
		if(strpos($splFileInfo->getFilename(), '.') === 0){
			continue;
		}
		$name = $splFileInfo->getFilename();
	   $path = $splFileInfo->isDir()
	         ? array('"' . $name . '"' => array())
	         : array($name);

	   for ($depth = $ritit->getDepth() - 1; $depth >= 0; $depth--) {
	   		$name = $ritit->getSubIterator($depth)->current()->getFilename();
	       $path = array('"' . $name . '"' => $path);
	   }
	   $r = array_merge_recursive($r, $path);
	}

	return dirDataToJs_dressStructure(dirDataToJs_stripQuotesFromKeys($r));
}


function dirDataToJs_stripQuotesFromKeys($arr){
	$newArr = array();
	foreach ($arr as $k => &$v) {
		$newK = trim($k,'"');
		if(is_array($v)){
			$v = dirDataToJs_stripQuotesFromKeys($v);
		}
		$newArr[$newK] = $v;
	}
	return $newArr;
}


function dirDataToJs_dressStructure($arr, $prevPath = ''){
	$newArr = array();
	foreach ($arr as $k => &$v) {
		if(is_array($v)){
			$path = $prevPath . '/' . $k;
			$newArr[] = array(
				'filename' => $k,
				'path' => $path,
				'children' => dirDataToJs_dressStructure($v, $path)
			);
		}else{
			$newArr[] = array(
				'filename' => $v,
				'path' => $prevPath . '/' . $v
			);
		}
	}
	return $newArr;
}
