<?php 
	require 'controler/config.php';
	//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['rol'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../index.php"); 
 ?>

 <!DOCTYPE html>
 <html class="no-js" lang="en" dir="ltr">
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
 	<title> sistema cxc </title>
 </head>
 <body>
 	<div> class="sticky-shrinknav-header">
  <h1 class="sticky-shrinknav-header-title">sticky-shrinknav</h1>
  <ul class="menu align-center sticky-shrinknav-menu">
    <li><a href="#">inicio</a></li>
    <?php 

    	switch ($_SESSION['rol']) {
    		case '0':
    			echo "<li><a href='#'>About</a></li>
    				  <li><a href='#'>Gallery</a></li>
    				  <li><a href='#'>Contact</a></li>";.
    			break;
    		case '1'
    			echo "<li><a href='#'>About12</a></li>
    				  <li><a href='#'>Gallery12</a></li>" ;

    			break;
    		default:
    			echo "<li><a href='#'>Gallery</a></li>
    				  <li><a href='#'>Contact</a></li>";
    			break;
    	}
     ?>
  </ul>
</div>

