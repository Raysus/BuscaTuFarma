<?
include 'config.php';
?>

<form action="buscador.php" method="get">
  <input type="text" name="palabra" value="<? echo ($_GET["palabra"]); ?>" />
  <input type="submit" name="buscador" value="Buscar" />
</form>

<?

if ($_GET['buscador']){
  $buscar = $_GET['palabra'];

  if (empty($buscar)){
    echo "No se ha ingresado algun medicamento";
  } else {
    $sql = "SELECT * FROM medicamentos WHERE Nombre_activo LIKE '%$buscar%'";
    $result = mysql_query($sql,$connect);
    $total = mysql_num_rows($result);

    if ($row = mysql_fetch_array($result)) {
      echo "Resultado(s) para $buscar ";
      echo "Total de resultado(s): $total";

      do {
        ?>
        (Medicamento: <? echo $row['Nombre_activo']; ?>) - <? echo $row['Producto']; ?>
        <?
      }
      while ($row = mysql_fetch_array($result));
    }
    else {
      echo "No se encontraron resultados para $buscar";
    }
  }
}
?>
