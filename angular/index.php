<!DOCTYPE html>
<html ng-app="plunker">

  <head>
    <meta charset="utf-8" />
    <title>.::Nuevo Registro::.</title>
    <link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    <script>document.write('<base href="' + document.location + '" />');</script>
    <link rel="stylesheet" href="css/estilos.css" />
    <script data-require="angular.js@1.0.x" src="https://code.angularjs.org/1.0.8/angular.js" data-semver="1.0.8"></script>
    <script src="js/app.js"></script>
  </head>

  <body ng-controller="MainCtrl">

    <div class="col-md-12" id="cabecera">
      <img src="img/logo.jpg" alt="" />
    </div>

    <div class="iconos">
      <img src="img/mas.png" alt="" width="80px" height="80px" title="Nuevo Registro" />Nuevo Registro
    </div>


    <div id="nuevo">
    <?php include('nuevo.php') ?>

    </div>


  </body>

</html>
