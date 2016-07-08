<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form method="get" action="/sia/index/index.php">
    <button type="submit">
      Volver a la página anterior
    </button>
    <div id="frm">
        <form action="process.php" method="post">
            <p>
                <label>Usuario:</label>
                <input type="text" id="username" name="username" />
            </p>
            <p>
                <label>Contraseña:</label>
                <input type="password" id="password" name="password" />
            </p>
            <p>
                <input type="submit" id="btn" value="Acceder" />
            </p>


</body>
</html>
