<?php
    session_start();
    include  '../include/connectToDB.php';

    if(isset($_POST['Nombre_activo']) && !empty($_POST['Nombre_activo']) &&
    (isset($_POST['Producto']) && !empty($_POST['Producto']) &&
    (isset($_POST['Tipo_Medicamento']) && !empty($_POST['Tipo_Medicamento']))
    {
      mysql_query("INSERT INTO medicamentos (Nombre_activo, Producto, Tipo_Medicamento)
      VALUES ('$_POST[Nombre_activo]','$_POST[Producto]','$_POST[Tipo_Medicamento]')",$db);
    }
