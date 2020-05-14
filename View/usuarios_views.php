<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Vista de ejemplo</h2>
  <p>Por medio de este ejemplo me muestra el modelo vista controlador en PHP</p>   
  <?php
  // Esta es la vista donde se recorre con el ciclo foreach la consulta del metodo llamada get_usuarios();

foreach ($datos as $dato){


?>
         
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $dato["nombre"]. " "; ?></td>
        <td><?php echo $dato["apellido"]. " "; ?></td>
        <td><?php echo $dato["correo"]. " "; ?></td>
      </tr>
    </tbody>
  </table>

  <?php
  
}
  ?>
</div>

</body>
</html>

    
    
    
    
