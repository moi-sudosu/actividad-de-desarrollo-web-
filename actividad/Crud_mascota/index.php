<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Usamos utilidades de Bootstrap para el estilo (sin CSS personalizado) -->
    <title>Crud Mascota</title>
    <script src="https://kit.fontawesome.com/46bd8b8b4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3"></h1>
    
    
    <div class="container-fluid row">
    <form method="post" action="guardar.php" class="col-4 p-3 bg-primary-subtle border rounded-3 shadow-sm">
    <h3 class="text-center text-primary fw-semibold">Registro de Mascotas</h3>
    
    
    <div class ="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="nombre">
    </div>
    
    <div class ="mb-3">
    <label for="especie" class="form-label">Especie</label>
    <input type="text" class="form-control" id="especie" name="especie">
    </div>
    
    <div class ="mb-3">
    <label for="raza" class="form-label">Raza</label>
    <input type="text" class="form-control" id="raza" name="raza">
    </div>
    
    <div class ="mb-3">
    <label for="Edad" class="form-label">Edad</label>
    <input type="text" class="form-control" id="Edad" name="edad">
    </div>
    
    <div class ="mb-3">
    <label for="propietario" class="form-label">Propietario</label>
    <input type="text" class="form-control" id="propietario" name="propietario" required>
    </div>
    
    <button type="submit" class="btn btn-primary" value="Registrar" name="registrar">Registrar</button>
</form>


<div class="col-8 p-5">
    <table class="table">
    <thead class="table-light">
    <tr>
        <th scope="col">ID</th>
        <th scope="col" class="text-warning fw-semibold">Nombre</th>
        <th scope="col">Especie</th>
        <th scope="col">Raza</th>
        <th scope="col">Edad</th>
        <th scope="col">Propietario</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        
    <?php
    include ("../login/conexion.php");
    $sql = $conn ->query("SELECT * FROM crud_mascotas");
    while ($datos = $sql -> fetch_object()){ ?>
        <td><?php echo $datos -> id      ?> </td>
        <td><?php echo $datos -> nombre; ?> </td>
        <td><?php echo $datos -> especie;?> </td>
        <td><?php echo $datos -> raza;   ?> </td>
        <td><?php echo $datos -> edad ;  ?> </td>
        <td> <?php echo  $datos -> propietario;?> </td>
        <td>
            <a class="btn btn-small btn-warning" href="editar.php?id=<?php echo $datos -> id; ?> "><i class="fa-solid fa-user-pen"></i></a>
            <a class="btn btn-small btn-danger" href="eliminar.php?id=<?php echo $datos->id; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar esta mascota?');">
<i class="fa-solid fa-trash"></i>
</a>

        </td>
    </tr>
    <?php }

    ?>
    
</tbody>
</table>
</div>
</div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>