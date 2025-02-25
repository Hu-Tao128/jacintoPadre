<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
} else {
    print($_SESSION['user']);
}
?>

<body>  
  <!-- Botón para ir al formulario de agregar producto -->
  <button onclick="window.location.href='agregar.php'">Agregar Producto</button>
  
  <button onclick="window.location.href='logout.php'">Cerrar Sesión</button>
  <h2>Lista de Productos</h2>

<body>  
  <table border="5">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th> <!-- Nueva columna para botones -->
      </tr>
    </thead>
    <tbody id="tabla-productos"></tbody>
  </table>

  <script>
  const url = "https://api.escuelajs.co/api/v1/products";

  
  fetch(url)
    .then(response => response.json())
    .then(data => {
      const tabla = document.getElementById("tabla-productos");

      data.forEach(item => {
        let tr = document.createElement("tr");

        // ID
        let tdId = document.createElement("td");
        tdId.textContent = item.id;
        tr.appendChild(tdId);

        // Nombre
        let tdNombre = document.createElement("td");
        tdNombre.textContent = item.title;
        tr.appendChild(tdNombre);

        // Precio
        let tdPrecio = document.createElement("td");
        tdPrecio.textContent = `$${item.price}`;
        tr.appendChild(tdPrecio);

        // Imagen
        let tdImg = document.createElement("td");
        let img = document.createElement("img");
        img.src = item.images[0];
        img.width = 100;
        img.height = 100;
        tdImg.appendChild(img);
        tr.appendChild(tdImg);

        // Celda de acciones
        let tdAcciones = document.createElement("td");

        // Botón Eliminar
        let btnEliminar = document.createElement("button");
        btnEliminar.textContent = "Eliminar";
        btnEliminar.onclick = () => window.location.href = `accion.php?accion=eliminar&id=${item.id}`;

        tdAcciones.appendChild(btnEliminar);
        tr.appendChild(tdAcciones);

        tabla.appendChild(tr);
      });
    })
    .catch(error => console.error("Error al obtener los productos:", error));
  </script>
</body>
