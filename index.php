<?php 
	require 'controler/config.php';
 ?>

 <!DOCTYPE html>
 <html class="no-js" lang="en" dir="ltr">
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
 	<title> Login </title>
 </head>
 <body style="padding: 50px;">
 	<div class="grid-container">
 		<div class="grid-x">	
 			<div class="cell medium-4"></div>
				 	<form id="login" action="controler/log_in.php" class="cell medium-4" method="post">
				  		<div class="form-icons">
				    		<h4>Login de usuario</h4>
				    		<div class="input-group">
				      			<span class="input-group-label">
				        			<i class="fa fa-user"></i>
				      			</span>
				      			<input class="input-group-field" type="text" placeholder="usuario" name="usuario" id="usuario">
				    		</div>
				    		<div class="input-group">
				      			<span class="input-group-label">
				        			<i class="fa fa-key"></i>
				      			</span>
				     		 	<input class="input-group-field" type="Password" placeholder="Password" name="Password" id="Password">
				    		</div>
				  		</div>
				  		<input type="submit" name="logear" value="Log in" class="button expanded">
					</form>	
		</div>			

 	</div>
 	 
 	 <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>		
 </body>
 </html>
 