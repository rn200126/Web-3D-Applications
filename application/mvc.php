<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';

//Get URL
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
	
		new Controller('home');
	else
		new Controller($pageURI);
?>