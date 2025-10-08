<?php
session_start();
include 'conexion.php';


// recibimos los datos con el metodo POST
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//preparamos la consulta sql

$sql = "SELECT * FROM login WHERE correo = ? AND contraseña = ?";


// preparacion de sentencia 
$stmt = $conn -> prepare($sql);

// verifica si la prepacion fue exitosa

if ($stmt === false){die("error en la preparacion de la consulta:" . $conn->error);}

//enlazar parametros 
$stmt ->bind_param("ss",$correo, $contraseña);

//ejecutar consulta 
$stmt -> execute();
// obtener resultado 
$result = $stmt->get_result();


// resultados si se necontraron resultados
if ($result->num_rows > 0){
    $usuario = $result->fetch_assoc(); 
    //guardar los datos de la sesion
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['correo'] = $usuario['correo'];

header( 'location: ../panel/panel.php');
exit();
}else {
    echo " Nose  econtraron usuario con esas credenciales";
}
?>

