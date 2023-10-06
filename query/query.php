<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php

session_start();
ob_start();

$usuario = $_SESSION['usuario'];
$id = $_SESSION['id'];
$fecha = date("Y-m-d");
$fecha_i = date("Y-m-01");
$fecha_f = date("Y-m-t");


// INSERTAR DATOS DIARIOS

if(isset($_POST['btnR'])){
  $hora = $_POST['hora'];
  $fecha = $_POST['fecha'];
  $campana = $_POST['campana'];
  $proyecto = $_POST['proyecto'];
  $responsable = $_POST['responsable'];
  $estado = $_POST['estado'];
  $descripcion = $_POST['descripcion'];

  include("../conexion.php");

      $sql = "INSERT INTO datos (hora,fecha,campana,proyecto,responsable,estado,descripcion,id_usuario) values ('$hora','$fecha','$campana','$proyecto','$responsable','$estado','$descripcion','$id')";

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

// Consulta de registros por usuario


include("../conexion.php");

$sql = "SELECT COUNT(*) AS total FROM datos WHERE fecha = '$fecha' AND id_usuario = '$id'";

$resultado = mysqli_query($conexion, $sql);
$clientes = array();
while ($rows = mysqli_fetch_assoc($resultado)) {
  $_SESSION['total_d'] = $rows['total'];
}

$sql = "SELECT COUNT(*) AS total FROM datos WHERE fecha BETWEEN '$fecha_i' AND '$fecha_f' AND id_usuario = '$id'";

$resultado = mysqli_query($conexion, $sql);
$clientes = array();
while ($rows = mysqli_fetch_assoc($resultado)) {
  $_SESSION['total_m'] = $rows['total'];
}
include("../desconexion.php");

?>


</body>
</html>