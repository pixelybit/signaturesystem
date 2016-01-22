<?php
/*
Frontend controller para configurar la aplicacion.
*/ 
 require 'config.php';
 require 'helpers.php';

 //library
 require "library/Request.php";

 //Llamado a los controladores individuales.

if(empty($_GET['url'])){
	$url = "";
}
else{
	$url = $_GET['url'];
}

$request = new Request($url);

var_dump($request->getUrl());
?>