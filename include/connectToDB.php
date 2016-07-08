<?php
  $userdb ="root";
  $passdb = "";
  $server  = "localhost";
  $nombre_db = "medicamentos";
  $db = new mysqli($server,$userdb,$passdb,$nombre_db);
  if($db->connect_errno > 0){
    die(
      'No se puede conectar a la base de datos ['
    .$db->connect_error
    .']'
  );
}
 ?>
