<?php
include("../login/conexion.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = $conn->query("DELETE FROM crud_mascotas WHERE id = $id");

    if ($sql) {
        echo "<script>alert('Mascota eliminada correctamente'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar la mascota'); window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('ID inválido o no recibido'); window.location='index.php';</script>";
}
?>