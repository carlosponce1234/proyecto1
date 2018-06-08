<?php 
require 'config.php';

/*RECIBIR USUARIO Y CONTARSAÑA */

if (isset($_POST['logear'])) {
	# COMPROBAR SI DAMOS CLICK EN EL BOTON LOGEAR 

	if (!isset($_POST['usuario'])||!isset($_POST['Password'])) {
		# Comprobar que el formulario no este vacio

			die('datos incompletos');
	} else {
		# SI HAY DATOS INICIAR VARIABLES DE SESION
		$usuario = $_POST['usuario'];
        $password = $_POST['Password'];
		//$user= msqli_query("SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'");

		$user= $con ->query("SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'");    
		    $resul = mysqli_fetch_assoc($user);

		    print($resul['usuario']);
		/* if(mysqli_num_rows($user) > 0){

			//$ROL_USUARIO= mysqli_query("SELECT rol_usuario FROM usuario WHERE usuario = '$usuario' AND Password = '$password'");

			$ROL_USUARIO= $con->query("ELECT rol_usuario FROM usuario WHERE usuario = '$usuario' AND Password = '$password'");	
				session_start();
				$_SESSION['rol']= $ROL_USUARIO;
				header("location: views/home.php"); 


		} else {

				$mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   				echo $mensajeaccesoincorrecto; 
			} */

		};
	

}; 

// CONSULTA BD TABLA USUARIOS CONICIDEN

/* 
$user= msqli_query("SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'");

if(mysql_num_rows($user) == 0){

	$ROL_USUARIO= mysqli_query("SELECT rol_usuario FROM usuario WHERE usuario = '$usuario' AND Password = '$password'");

		session_start();
		$_SESSION['rol']= $ROL_USUARIO;
	header("location: views/home.php"); 


} else {

	$mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
}
  
  */
  ?>