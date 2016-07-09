<?php
    session_start();
    include  '../include/connectToDB.php';

  	$username = mysqli_real_escape_string($db, $_POST['username']);
  	$password = mysqli_real_escape_string($db, $_POST['password']);



  	function verificar_login($username,$password,&$result)
    {
      $sql = "SELECT *
          FROM tbl_usuario
          WHERE username = '$username'
          AND password = '$password'";

        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

if(!isset($_SESSION['userid']))
    if(isset($_POST['login']))
        if(verificar_login($_POST['username'],$_POST['password'],$result) == 1)
        {

            $_SESSION['userid'] = $result->userid;
            header("location: index.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>
