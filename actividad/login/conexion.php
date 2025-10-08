<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "Login_php";

$conn = new mysqli($host,$usuario,$contraseña,$base_datos);
if($conn -> connect_error){
    die("conexion fallida: " . $conn->connect_error);
} 

?>