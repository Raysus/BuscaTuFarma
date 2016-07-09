<!DOCTYPE html>
<html>
<head>
<title>Tabla Medicamentos</title>
</head>
<body>
  <center>
    <table border="3">
      <thead>
        <tr>
          <th colspan="100">Lista de Medicamentos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ID</td>
          <td>Nombre Generico</td>
          <td>Nombre Medicamento</td>
          <td>Tipo de Medicamento</td>
          <td> </td>
          <td> </td>
        </tr>
      <?php
        include '../include/connectToDB.php';

        $query="SELECT * FROM medicamentos";
        $resultado= $db->query($query);
        while ($row=$resultado->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['Nombre_activo']; ?></td>
          <td><?php echo $row['Producto']; ?></td>
          <td><?php echo $row['Tipo_Medicamento']; ?></td>
          <td><a href="#">Modificar</a></td>
          <td><a href="#">Eliminar</a></td>
        </tr>
      <?php
        }
       ?>

     </tbody>
   </table>
 </center>
 </body>
 </html>
