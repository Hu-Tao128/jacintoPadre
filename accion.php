<?php
if (!isset($_GET['accion'])) {
    die("Acción no válida.");
}

$accion = $_GET['accion'];

if ($accion === "eliminar" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $ch = curl_init("https://api.escuelajs.co/api/v1/products/$id");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo "Producto eliminado: " . $response;
}
?>
