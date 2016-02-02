<?php
/**
 * @package test_plugin2
 * @version 0.1
 */
/*
Plugin Name: Test Plugin
Description: Plugin for meeee
Author: A lot of people
Version: 0.1
*/

function my_buildings_fn($attributes){
	
	$path = wp_upload_dir();
	
	$currentDir = scandir( $path['basedir'] );
	$currentURL = $path['baseurl'] . '/';
	
	$my_buildings_current_path = '';
	
	if(isset($_GET['my_buildings_current_path'])) {
		$my_buildings_current_path = $_GET['my_buildings_current_path'];
	}
	
	foreach($currentDir as $i => $file){
		//om filen inte börjar med "."
		if( strpos($file, '.' ) !== 0 ){   // === strikt gämnförelse, dvs samma typ.
			if( strpos($file, '.html' ) > -1 ){
				print( '<a href="' . $currentURL . $file . '">' . $file . '</a><br>');
			} else {
				print( '<a href="?my_buildings_current_path=' . $my_buildings_current_path . $file . '">' . $file . '</a><br>');
			}
		}
	}
	
	return '';
}

add_shortcode('my_buildings', 'my_buildings_fn', 1);