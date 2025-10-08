<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../login/index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="estilo_panel.css">
</head>
<body>
    <div class="contenedor">
    <h1 class="titulo"> Ingreso exitoso </h1>
    <p class="parrafo"> Bienvenido <?php echo $_SESSION['nombre']; ?>👋 </p>
    <p class="parrafo"> su correo es: <?php echo $_SESSION['correo'];  ?> </p>
    <a class="cerrar_sesion" href="cerrar_sesion.php">Cerrar Sesion</a>
</div>
</body>
</html>