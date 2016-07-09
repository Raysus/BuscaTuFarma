<?php
    session_start();
    include  '../include/connectToDB.php';

  	$username = mysqli_real_escape_string($db, $_POST['username']);
  	$password = mysqli_real_escape_string($db, $_POST['password']);

  	$sql = "SELECT *
  			FROM tbl_usuario
  			WHERE username = '$username'
  			AND password = '$password'";

  	if (!$resultado = $db->query($sql)){
  		echo "Error en la consulta.";
  		exit;
  	}

  	$usuario = $resultado->fetch_assoc();

  /*	if($resultado->num_rows > 0 ){
  		$_SESSION['username'] = $usuario['username'];
  		$_SESSION['privi'] = $usuario['cod_tipo'];
  		if($usuario['cod_tipo']==1){
  	        header('Location: ../buscador/buscador.php');
  	    }else {
  	    	header('Location: index.html');
  	    }
  	}
*/


  ?>
