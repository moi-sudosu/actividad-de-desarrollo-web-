<?php
include("../login/conexion.php");

// Validamos que el ID venga por GET
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Convertimos a número para evitar errores
    $sql = $conn->query("SELECT * FROM crud_mascotas WHERE id = $id");

    if ($sql && $sql->num_rows > 0) {
        $datos = $sql->fetch_object();
    } else {
        echo "<script>alert('Mascota no encontrada'); window.location='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('ID inválido o no recibido'); window.location='index.php';</script>";
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form method="post" class="p-4 bg-light rounded shadow">
  <h3 class="text-center text-secondary mb-4">Editar Mascota</h3>

  <input type="hidden" name="id" value="<?php echo $datos->id; ?>">

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre; ?>">
  </div>

  <div class="mb-3">
    <label for="especie" class="form-label">Especie</label>
    <input type="text" class="form-control" id="especie" name="especie" value="<?php echo $datos->especie; ?>">
  </div>

  <div class="mb-3">
    <label for="raza" class="form-label">Raza</label>
    <input type="text" class="form-control" id="raza" name="raza" value="<?php echo $datos->raza; ?>">
  </div>

  <div class="mb-3">
    <label for="edad" class="form-label">Edad</label>
    <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $datos->edad; ?>">
  </div>

  <div class="mb-3">
    <label for="propietario" class="form-label">Propietario</label>
    <input type="text" class="form-control" id="propietario" name="propietario" value="<?php echo $datos->propietario; ?>">
  </div>

  <button type="submit" name="actualizar" class="btn btn-success w-100">Actualizar</button>
</form>
</body>
</html>

<?php

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $propietario = $_POST['propietario'];

    $sql = $conn -> query("UPDATE crud_mascotas SET nombre='$nombre', especie='$especie', raza='$raza', edad='$edad', propietario='$propietario' WHERE id = $id");

    if ($sql) {
        echo "<script>alert('Datos actualizados correctamente'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar los datos');</script>";
    }
}
?>