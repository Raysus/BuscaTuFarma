<?php
    $usuario = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "");
    mysql_select_db("medicamentos");

    $result = mysql_query("select * from usuarios where username = '$username' and password = '$password'")
              or die("Fallo ingreso ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password ){
      echo "Acceso Exitoso, Bienvenido ".$row['username'];
    } else {
        echo "Login incorrecto";
    }
?>
