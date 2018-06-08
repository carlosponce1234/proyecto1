<?php 


/*variables de conexion de bd*/
$hostname ="localhost";
$dbuser= "root";
$dbpassword = "";
$dbname ="cxc";


/*haciendo conexion con la bd*/
 
$con= mysqli_connect($hostname, $dbuser, $dbpassword) or die('No se puede establecer la coneccion con la base de datos');

mysqli_select_db($con, $dbname);


 ?>