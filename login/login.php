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

    <?php
    session_start();
    include  '../include/connectToDB.php';
    $email = $db->escape_string($_POST["username"]);
    $pass = $db->escape_string($_POST["password"]);
    verificarVacio($password, $username);
    $password = crypt($password, "2016");
    $sql = "SELECT userid FROM  usuario WHERE username = '$username' AND password = '$password'";
    include '../include/sendSql.php';
    $usuario = $resultado->fetch_assoc();
    if ($usuario==null) {
      die ("Usuario o contraseña invalido");
    }
    $_SESSION['id_usuario']=$usuario['id_usuario'];
    $id = $_SESSION['id_usuario'];
    $_SESSION['correo'] = $email;
    $sql = "SELECT * FROM persona WHERE id_usuario = '$id'";
    include '../include/sendSql.php';
    while($usuario = $resultado->fetch_assoc()){
      $_SESSION['nombre'] = $usuario["nombre"];
      $_SESSION['apellido'] = $usuario["apellido"];
      $_SESSION['imagen'] = $usuario["imagen"];
      $_SESSION['genero'] = $usuario["genero"];
      $_SESSION['pais'] = $usuario["pais"];
      $_SESSION['nacimiento'] = $usuario["nacimiento"];
    echo " <script type='text/javascript'>
    window.location = '../home.php';
    </script> ";
    }
    function verificarVacio($password, $username){
      if($password==""|| $username==""){
        die("hay un campo vacio");
      }
    }
