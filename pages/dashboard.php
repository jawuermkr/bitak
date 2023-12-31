<?php 
include "header.php";
?>


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
      <h2 class="mytext my-3">Bitácora del capitán</h2>
      <form action="../query/query.php" method="post">
        <div class="row">
        <div class="col-sm-6">
        <b><small><label>Hora</label></small></b>
        <input class="form-control" type="time" name="hora">
        </div> 
        <div class="col-sm-6">
        <b><small><label>Fecha</label></small></b>
        <input class="form-control" type="date" name="fecha">
        </div> 
        <div class="col-sm-6">
        <b><small><label>Campaña</label></small></b>
        <select class="form-control" type="text" name="campana">
          <option value=" --- " disabled selected>--> Seleccionar <--</option>
          <option value="Administrativa">Administrativa</option>
          <option value="Soporte">Soporte</option>
          <option value="T&T">T&T</option>
          <option value="MOVIL">MOVIL</option>
          <option value="HOGAR">HOGAR</option>
          <option value="CLARO">CLARO</option>
          <option value="WOM">WOM</option>
          <option value="Majority">Majority</option>
          <option value="ObamaCARE">ObamaCARE</option>
          <option value="Asiste Ingeniería">Asiste Ingeniería</option>
          <option value="Asiste ING">Asiste ING</option>
          <option value="Generales">Generales</option>
        </select>
        </div> 
        <div class="col-sm-6">
        <b><small><label>Proyecto</label></small></b>
        <select class="form-control" type="text" name="proyecto">
          <option value=" --- " disabled selected>--> Seleccionar <--</option>
          <option value="Asiste Ingeniería">Asiste Ingeniería</option>
          <option value="Asiste ING">Asiste ING</option>
          <option value="Intranet CLARO">Intranet CLARO</option>
          <option value="Intranet WOM">Intranet WOM</option>
          <option value="Intranet MAJORITY">Intranet MAJORITY</option>
          <option value="Intraner OBAMACARE">Intraner OBAMACARE</option>
          <option value="AsisLock CLARO">AsisLock CLARO</option>
          <option value="AsisLock WOM">AsisLock WOM</option>
          <option value="AsisLock Usuarios CLARO">AsisLock Usuarios CLARO</option>
          <option value="AsisLock Usuarios WOM">AsisLock Usuarios WOM</option>
          <option value="Pajarito">Pajarito</option>
          <option value="Generales">Generales</option>
        </select>
        </div> 
        <div class="col-sm-6">
        <b><small><label>Responsable</label></small></b>
        <select class="form-control" type="text" name="responsable">
          <option value="<?php echo $_SESSION['nombre'];?>" selected><?php echo $_SESSION['nombre'];?> </option>
          <option value=" --- " disabled>--> Otro <--</option>
          <option value="Alejandra Robles">Alejandra Robles</option>
          <option value="Damaris Hernandez">Damaris Hernandez</option>
          <option value="Oscar Gutierrez">Oscar Gutierrez</option>
          <option value="Jawuer Morales">Jawuer Morales</option>
        </select>
        </div> 
        <div class="col-sm-6">
        <b><small><label>Estado</label></small></b>
        <select class="form-control" type="text" name="estado">
          <option value=" --- " disabled selected>--> Seleccionar <--</option>
          <option value="Inicia">Inicia</option>
          <option value="Continua">Continua</option>
          <option value="Finalizado">Finalizado</option>
          <option value="Pruebas">Pruebas</option>
          <option value="Despliegue">Despliegue</option>
        </select>
        </div> 
        <div class="col-sm-12">
        <b><small><label>Descripción</label></small></b>
        <textarea class="form-control" type="text" name="descripcion"></textarea>
        </div> 
        <div class="col-sm-12">
        <input class="form-control btn btn-success" type="submit" name="btnR" value="Ingresar">
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once "footer.php"; ?>