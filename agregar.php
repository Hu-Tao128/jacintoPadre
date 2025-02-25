<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
?>

<h2>Agregar Nuevo Producto</h2>
<form action="procesar_agregar.php" method="POST">
  <label for="title">Nombre:</label>
  <input type="text" name="title" required><br><br>

  <label for="price">Precio:</label>
  <input type="number" name="price" required><br><br>

  <label for="description">Descripción:</label>
  <input type="text" name="description" required><br><br>

  <label for="categoryId">Categoría (ID):</label>
  <input type="number" name="categoryId" required><br><br>

  <label for="images">URL de la Imagen:</label>
  <input type="text" name="images" required><br><br>

  <button type="submit">Agregar Producto</button>
</form>
