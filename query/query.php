<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php

if(isset($_POST['btnR'])){
  $hora = $_POST['hora'];
  $fecha = $_POST['fecha'];
  $campana = $_POST['campana'];
  $proyecto = $_POST['proyecto'];
  $responsable = $_POST['responsable'];
  $estado = $_POST['estado'];
  $descripcion = $_POST['descripcion'];

  include("../conexion.php");

      $sql = "INSERT INTO datos (hora,fecha,campana,proyecto,responsable,estado,descripcion) values ('$hora','$fecha','$campana','$proyecto','$responsable','$estado','$descripcion')";

      if ($conexion->query($sql) === TRUE) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: '¡Datos almacenados!',
          timer: '2000'
        }).then(function() {
          window.location = '../pages/dashboard.php';
        });
          </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
      }

  include("../desconexion.php");
}
?>

</body>
</html>