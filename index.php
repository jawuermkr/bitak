<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitaK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 my-5">
          <div class="card p-5">
          <img src="img/logo.png" width="100%">
          <form action="index.php" method="post">
            <label>Usuario</label>
            <input class="form-control" type="text" name="usuario">
            <label>Clave</label>
            <input class="form-control" type="password" name="clave">
            <input class="form-control btn btn-success" type="submit" name="btnI" value="Ingresar">
          </form>
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

<?php
session_start();
ob_start();

if (isset($_POST['btnI'])) {

$identi = $_POST['usuario'];
$clavelog = $_POST['clave'];

if ($identi == "" || $clavelog == "") {
    $_SESSION['correcto'] = 2; //2 sera error de campos vacios
    echo "<script>
      Swal.fire({
        icon: 'error',
        title: '¡Ambos campos por favor!',
        timer: '2000'
      });
        </script>";
} else {
    include("conexion.php");
    $_SESSION['correcto'] = 3; //2 seran datos incorrectos
    echo "<script>
      Swal.fire({
        icon: 'error',
        title: '¡Datos incorrectos!',
        timer: '2000'
      });
        </script>";
    $resultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$identi' AND clave = '$clavelog'");
    while ($consulta = mysqli_fetch_array($resultados)) {

        $_SESSION['correcto'] = 1;
        $_SESSION['nombre'] = $consulta['nombre'];
        $_SESSION['usuario'] = $consulta['usuario'];
        $_SESSION['id'] = $consulta['id'];
        $_SESSION['rol'] = $consulta['rol'];
        
      }
      
      include("desconexion.php");
    }
  };
  
  if ($_SESSION['correcto'] == 1) {
    header('Location: pages/dashboard.php');
  }

?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>