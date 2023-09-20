<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitaK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 my-5">
          <div class="card p-5">
          <img src="img/logo.png" width="100%">
          <form action="pages/dashboard.php" method="post">
            <label>Usuario</label>
            <input class="form-control" type="text" name="usuario">
            <label>Clave</label>
            <input class="form-control" type="text" name="clave">
            <input class="form-control btn btn-success" type="submit" name="btnI" value="Ingresar">
          </form>
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>