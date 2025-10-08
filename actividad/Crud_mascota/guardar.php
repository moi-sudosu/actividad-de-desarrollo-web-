<?php 
include("../login/conexion.php");

if(isset($_POST['registrar'])){
$nombre = $_POST['nombre'];
$especie = $_POST['especie']; 
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$propietario = $_POST['propietario'];
$botton = $_POST['registrar'];
$sql = "INSERT INTO crud_mascotas (nombre, especie, raza, edad, propietario) VALUES( '$nombre', '$especie', '$raza', '$edad', '$propietario')";
$conn -> query($sql);

header("location:index.php");
exit();
}
?>