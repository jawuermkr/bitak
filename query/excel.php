<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php

if (isset($_POST['btnR'])) {
        
        $fecha_i = $_POST['fecha_i'];
        $fecha_f = $_POST['fecha_f'];
        
        include("../conexion.php");
          
        $sql = "SELECT * FROM datos WHERE fecha BETWEEN '$fecha_i' AND '$fecha_f'";

        $resultado = mysqli_query($conexion, $sql);
        $registros = array();
        while ($rows = mysqli_fetch_assoc($resultado)) {
        $registros[] = $rows;
        }
        include("../desconexion.php");
  ?>
  <div class="table-responsive mt-5">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>id</th>	
          <th>hora</th>	
          <th>fecha</th>	
          <th>campana</th>	
          <th>proyecto</th>	
          <th>responsable</th>	
          <th>estado</th>	
          <th>descripcion</th>	
          <th>id_usuario</th>
        </tr>
      </thead>
      <tbody>

        <?php
        foreach ($registros as $reguistro) {
          ?>
        <tr>
          <td><?php echo $reguistro['id']; ?></td>
          <td><?php echo $reguistro['hora']; ?></td>
          <td><?php echo $reguistro['fecha']; ?></td>
          <td><?php echo $reguistro['campana']; ?></td>
          <td><?php echo $reguistro['proyecto']; ?></td>
          <td><?php echo $reguistro['responsable']; ?></td>
          <td><?php echo $reguistro['estado']; ?></td>
          <td><?php echo $reguistro['descripcion']; ?></td>
          <td><?php echo $reguistro['id_usuario']; ?></td>
          <?php }?>  
        </tr>
      </tbody>
    </table>
    <?php }
    if (isset($_POST['btnE'])) {
    
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=reporte.xls");
      
      $fecha_i = $_POST['fecha_i'];
      $fecha_f = $_POST['fecha_f'];
      
      header("Location: ../query/query.php");
      include("../conexion.php");
        
      $sql = "SELECT * FROM datos WHERE fecha BETWEEN '$fecha_i' AND '$fecha_f'";

      $resultado = mysqli_query($conexion, $sql);
      $registros = array();
      while ($rows = mysqli_fetch_assoc($resultado)) {
      $registros[] = $rows;
      }
      include("../desconexion.php");
?>
<div class="table-responsive mt-5">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>id</th>	
        <th>hora</th>	
        <th>fecha</th>	
        <th>campana</th>	
        <th>proyecto</th>	
        <th>responsable</th>	
        <th>estado</th>	
        <th>descripcion</th>	
        <th>id_usuario</th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($registros as $reguistro) {
        ?>
      <tr>
        <td><?php echo $reguistro['id']; ?></td>
        <td><?php echo $reguistro['hora']; ?></td>
        <td><?php echo $reguistro['fecha']; ?></td>
        <td><?php echo $reguistro['campana']; ?></td>
        <td><?php echo $reguistro['proyecto']; ?></td>
        <td><?php echo $reguistro['responsable']; ?></td>
        <td><?php echo $reguistro['estado']; ?></td>
        <td><?php echo $reguistro['descripcion']; ?></td>
        <td><?php echo $reguistro['id_usuario']; ?></td>
        <?php }?>  
      </tr>
    </tbody>
  </table>
  <?php 
  //header("Location: ../pages/consultas.php");
  }?>  