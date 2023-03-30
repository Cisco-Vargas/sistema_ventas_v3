<?php
$id = $_GET['id'];
if (!$id) {
    echo 'No se ha seleccionado el cliente';
    exit;
}
include_once "funciones.php";

eliminarCliente($id);

header("Location: clientes.php");
?>