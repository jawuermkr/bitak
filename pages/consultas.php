<?php include "header.php"; ?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-3">
    <div class="card p-3 text-center">
        <h2 class="mytext">Registros diarios</h2>
        <hr>
        <h3 class="numt"><?php echo $_SESSION['total_d']; ?></h3>
        <hr>
        <h2 class="mytext">Registros mensuales</h2>
        <hr>
        <h3 class="numt"><?php echo $_SESSION['total_m']; ?></h3>
        <hr>
      </div>
    </div>
    <div class="col-md-9">
      <h2 class="mytext my-3">Consultas</h2>
      <form action="consultas.php" method="post">
        <div class="row">
        <div class="col-sm-6">
        <b><small><label>Fecha I</label></small></b>
        <input class="form-control" type="date" name="fecha_i" value="<?php echo date('Y-m-d') ?>">
        </div>
        <div class="col-sm-6">
        <b><small><label>Fecha F</label></small></b>
        <input class="form-control" type="date" name="fecha_f" value="<?php echo date('Y-m-d') ?>">
        </div>
        
        <div class="col-sm-12">
        <input class="form-control btn btn-success" type="submit" name="btnR" value="Ingresar">
        </div>
        <!-- <div class="col-sm-6">
        <input class="form-control btn btn-success" type="submit" name="btnE" value="Ingresar">
        </div> -->
      </form>

    <?php include_once "../query/excel.php"; ?>

    </div>
  </div>
</div>

<?php include_once "footer.php"; ?>