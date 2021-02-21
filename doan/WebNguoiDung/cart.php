<?php
	
	$level="";
	session_start();
	include ($level."config.php");
	$index=false;
	$about=false;
	$blog=false;
	$cart=true;
	$category=false;
	$checkout=false;
	$confirmation=false;
	$contact=false;
	$elements=false;
	$login=false;
	$single_product=false;
	$single_blog=false;
	$tracking=false;
	include ($level."layout.php");

?>
