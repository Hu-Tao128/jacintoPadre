<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nuevoProducto = [
        "title" => $_POST["title"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "categoryId" => $_POST["categoryId"],
        "images" => [$_POST["images"]]
    ];

    $jsonData = json_encode($nuevoProducto);

    $ch = curl_init("https://api.escuelajs.co/api/v1/products");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($ch);
    curl_close($ch);

    echo "<p>Producto agregado correctamente.</p>";
    echo "<a href='tienda.php'>Volver a la lista</a>";
}
?>
