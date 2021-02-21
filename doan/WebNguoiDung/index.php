<?php
	session_start();
	$level="";
	include ($level."config.php");
	$index=true;
	$about=false;
	$blog=false;
	$cart=false;
	$category=false;
	$checkout=false;
	$confirmation=false;
	$contact=false;
	$elements=false;
	$login=false;
	$single_blog=false;
	$single_product=false;
	$tracking=false;
	include ($level."layout.php");

?>