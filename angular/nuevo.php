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


    <div class="row">

      <div class="col-md-12" ng-show="revisar_formulario" id="tabla_angular" >
<table>
  <td id="nombre">
    <h3>{{nombres}}</h3>
  </td>
  <td id="revise">
    ,revise su info antes de enviarla a nuestra base de datos.
  </td>
</table>



        <table class="table table-striped" >

      <tbody>

        <tr>
          <td>Nombres</td>
          <td><strong>{{nombres}}</strong></td>
          <td>Telefono</td>
          <td><strong>{{telefono}}</strong></td>
          <td>Cintura</td>
          <td><strong>{{cintura}}</strong></td>

        </tr>
        <tr>
          <td>Cedula</td>
          <td><strong>{{cedula}}</strong></td>
          <td>Estatura</td>
          <td><strong>{{estatura}}</strong></td>
          <td>Busto</td>
          <td><strong>{{busto}}</strong></td>

        </tr>
        <tr>
          <td>Edad</td>
          <td><strong>{{edad}}</strong></td>
          <td>Peso</td>
          <td><strong>{{peso}}</strong></td>
          <td>color de ojos</td>
          <td><strong>{{color_ojos}}</strong></td>

        </tr>
        <tr>
          <td>Genero</td>
          <td><strong>{{genero}}</strong></td>
          <td>Disponibilidad de viajar</td>
          <td><strong>{{disponibilidad}}</strong></td>
          <td>color de piel</td>
          <td><strong>{{color_piel}}</strong></td>
        </tr>

        <tr>
          <td>Estado Civil</td>
          <td><strong>{{estado}}</strong></td>
          <td>Curso de man. de alim.</td>
          <td><strong>{{manipulacion}}</strong></td>
          <td>Blusa</td>
          <td><strong>{{blusa}}</strong></td>

        </tr>

        <tr>
          <td>Direccion</td>
          <td><strong>{{direccion}}</strong></td>
          <td>Busto</td>
          <td><strong>{{busto}}</strong></td>
          <td>Traje de bano</td>
          <td><strong>{{bano}}</strong></td>
        </tr>

        <tr>
          <td>Provincia</td>
          <td><strong>{{provincia}}</strong></td>
          <td>Color de cabello</td>
          <td><strong>{{color_cabello}}</strong></td>
          <td>Nro de calzado</td>
          <td><strong>{{calzado}}</strong></td>
        </tr>

        <tr>
          <td>Canton</td>
          <td><strong>{{canton}}</strong></td>
          <td>Tipo de cabello</td>
          <td><strong>{{tipo_cabello}}</strong></td>
          <td>Posee marcas?</td>
          <td><strong>{{senales}}</strong></td>
        </tr>

        <tr>
          <td>Correo</td>
          <td><strong>{{correo}}</strong></td>
          <td>Cadera</td>
          <td><strong>{{cadera}}</strong></td>
          <td>En que lugar</td>
          <td><strong>{{lugar}}</strong></td>

        </tr>

        <tr>

          <td>Imagen</td>
          <td><strong>{{file1}}</strong></td>
        </tr>








      </tbody>
    </table>
</div>

        <form id="frmClienteNuevo" name="frmClienteNuevo" method="post"  action="nuevo.php" onsubmit="GrabarDatos(); return false">
      <div class="col-xs-12 col-md-4" ng-show="columna1">
        <div class="form-group">

                  <p>Nombres</p>
              <div class="input-group">
                <input type="text" class="form-control" name="nombres" id="nombres" ng-model="nombres"   >
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-user"></span></span>

              </div>


        </div>

        <div class="form-group">
                  <p>Cedula</p>
              <div class="input-group">
                <input type="text" class="form-control" name="ciudad" id="ciudad" ng-model="cedula"  >
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-ok-sign"></span></span>
              </div>
        </div>

        <div class="form-group">
          <table>
              <tr>
                  <p>Edad:&nbsp;&nbsp;&nbsp; </p>
              </tr>
              <tr>
                <select class="form-control" name="peso" ng-model="edad">
                    <?php
                       for ($i = 18; $i < 35; ++$i) { ?>
                        <option value="<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </option>
                        <?php }
                       ?>
                </select>
              </tr>
          </table>
        </div>

        <div class="form-group">

              <div class="input-group">
                <table>
                  <td>
                  Genero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>
                  <td>
                  <input type="radio" name="genero" value="M" ng-model="genero"  />Masculino
                &nbsp;&nbsp;
                <input type="radio" name="genero"  value="F" ng-model="genero" checked />Femenino
                  </td>
                </table>
              </div>
        </div>

        <div class="form-group">

              <div class="input-group">
                <table>
                  <td>
                  Estado Civil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </td>
                  <td>
                  <input type="radio" name="alternativas" id="masculino" ng-model="estado" value="S"  />Soltero(a)
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="alternativas" id="femenino" value="C" ng-model="estado" checked />Casado(a)
                  </td>
                </table>
              </div>
        </div>


        <div class="form-group">
                  <p>Direccion</p>
              <div class="input-group">
                <input type="text" class="form-control" name="direccion" id="direccion" ng-model="direccion"  >
                <span class="input-group-addon danger"><span class="glyphicon glyphicon-map-marker"></span></span>
              </div>

        </div>

        <div class="form-group">
          <p>
              Seleccione su provincia y cant&oacute;n de residencia
          </p>
          <table>

          <td>

          <select class="form-control" name="provincia" ng-model="provincia" onchange="slctryole(this,this.form.select2)"  id="combo1" >
              <option>Provincia&nbsp;&nbsp;</option>
              <option value="San_Jose">San Jose</option>
              <option value="Alajuela">Alajuela</option>
              <option value="Cartago">Cartago</option>
              <option value="Guanacaste">Guanacaste</option>
              <option value="Heredia">Heredia</option>
              <option value="Limon">Limon</option>
              <option value="Puntarenas">Puntarenas</option>

          </select>

        </td>

        <td>

          <select  class="form-control"  name="select2" ng-model="canton" onchange="slctryole(this,this.form.select3)" id="combo2" >
              <option>Canton&nbsp;&nbsp;</option>
          </select>

        </td>
          </table>
        </div>

      </div>

      <div class="col-xs-12 col-md-4" ng-show="columna2">
        <div class="form-group">
  						<p>Correo Electronico</p>
  						<div class="input-group">
  							<input type="email" class="form-control" name="correo" id="correo" ng-model="correo"  >
  							<span class="input-group-addon danger"><span class="glyphicon glyphicon-envelope"></span></span>
  						</div>
  			</div>

  			<div class="form-group">
  								<p>Telefono</p>
  						<div class="input-group">
  							<input type="number" class="form-control" name="ciudad" id="ciudad" ng-model="telefono" >
  							<span class="input-group-addon danger"><span class="glyphicon glyphicon-phone"></span></span>
  						</div>
  			</div>

  			<div class="form-group">
  				<table>

  				<td>


  				<table>
  						<tr>
  								<p>Estatura:&nbsp;&nbsp;&nbsp; </p>
  						</tr>
  						<tr>
  								<select class="form-control" name="estatura" ng-model="estatura">
  										<?php
  											 for ($i = 150; $i < 181; ++$i) { ?>
  												<option value="<?php echo $i; ?>">
  														<?php echo $i; ?>
  												</option>
  												<?php }
  											 ?>
  								</select>
  						</tr>
  				</table>
  					</td>

  					<td>



  				<table>
  						<tr>
  								<p>Peso en kgs.:&nbsp;&nbsp;&nbsp; </p>
  						</tr>
  						<tr>
  								<select class="form-control" name="peso" ng-model="peso">
  										<?php
  											 for ($i = 50; $i < 75; ++$i) { ?>
  												<option value="<?php echo $i; ?>">
  														<?php echo $i; ?>
  												</option>
  												<?php }
  											 ?>
  								</select>
  						</tr>
  				</table>
  				</td>





  				</table>
        </div>

  			<div class="form-group">

          <div style="margin-bottom: 10px" class="input-group">

                  <p >Disponibilidad de viajar:&nbsp;&nbsp;&nbsp;
                      <input type="checkbox"  value="GAM" ng-model="disponibilidad">GAM&nbsp;&nbsp;
                      <input type="checkbox"  value="Rural" ng-model="disponibilidad">Rural&nbsp;&nbsp;
                  </p>

          </div>
  			</div>

  			<div class="form-group" id="curso">

  						<div style="margin-bottom: 10px" class="input-group">

  								<p>Curso de manipulacion de alimentos:&nbsp;&nbsp;&nbsp;

  								<input type="radio" name="alternativas"  value="Si" ng-model="manipulacion"  />Si
  							&nbsp;&nbsp;&nbsp;
  							<input type="radio" name="alternativas"  value="No" ng-model="manipulacion" />No
                </p>
  						</div>
  			</div>



  			<div class="form-group" id="color">
  			<table>

  			<td>

  			<table>
  					<tr>
  							<p>Color de Cabello:&nbsp;&nbsp;&nbsp; </p>
  					</tr>
  					<tr>
  							<select name="color_cabello" class="form-control" ng-model="color_cabello" >
  									<option value="No ha seleecionado el color de cabello" selected>Color</option>
  									<option value="Negros">Negro</option>
  									<option value="Pardos">Rubio</option>
  									<option value="Verdes">Castano</option>
  									<option value="Azules">Pelirrojo</option>
  									<option value="Azules">Otro</option>
  							</select>
  					</tr>
  			</table>

  		</td>

  		<td>

  			<table>
  					<tr>
  							<p>Tipo de Cabello:&nbsp;&nbsp;&nbsp; </p>
  					</tr>
  					<tr>
  							<select name="ojos" class="form-control" ng-model="tipo_cabello" >
  									<option value="No ha seleecionado el tipo de cabello" selected>Tipo</option>
  									<option value="Lacio">Lacio</option>
  									<option value="Ondulado">Ondulado</option>
  									<option value="Rizado">Rizado</option>

  							</select>
  					</tr>
  			</table>

  		</td>

  			</table>
  			</div>
        <br>

  			<div class="form-group">
  			<table>

  			<td>

  			<table>
  					<tr>
  							<p>Cadera:&nbsp;&nbsp;&nbsp; </p>
  					</tr>
  					<tr>
  						<select name="cadera" ng-model="cadera" class="form-control">
  								<?php
  									 for ($i = 70; $i < 116; ++$i) { ?>
  										<option value="<?php echo $i; ?>">
  												<?php echo $i; ?>
  										</option>
  										<?php }
  									 ?>
  						</select>
  					</tr>
  			</table>

  		</td>

  		<td>

  			<table>
  					<tr>
  							<p>Cintura:&nbsp;&nbsp;&nbsp; </p>
  					</tr>
  					<tr>
  						<select name="cintura" ng-model="cintura" class="form-control">
  								<?php
  									 for ($i = 68; $i < 86; ++$i) { ?>
  										<option value="<?php echo $i; ?>">
  												<?php echo $i; ?>
  										</option>
  										<?php }
  									 ?>
  						</select>
  					</tr>
  			</table>

  		</td>

  		<td>

  			<table>
  					<tr>
  							<p>Busto:&nbsp;&nbsp;&nbsp; </p>
  					</tr>
  					<tr>
  						<select name="busto" ng-model="busto" class="form-control">
  								<option value="No ha seleccionado" selected>Seleccione</option>
  								<option value="30A">30A</option>
  								<option value="30B">30B</option>
  								<option value="32A">32A</option>
  								<option value="32B">32B</option>
  								<option value="32C">32C</option>
  								<option value="34A">34A</option>
  								<option value="34B">34B</option>
  								<option value="36B">36B</option>
  								<option value="36C">36C</option>
  								<option value="36D">36D</option>
  								<option value="38B">38B</option>
  								<option value="38C">38C</option>
  								<option value="38D">38D</option>
  						</select>
  					</tr>
  			</table>

  		</td>

  			</table>
  			</div>


      </div>

      <div class="col-xs-12 col-md-4" ng-show="columna3" >
        <div class="form-group" >
        <table>

        <td>

        <table>
            <tr>
                <p>Color de Ojos:&nbsp;&nbsp;&nbsp; </p>
            </tr>
            <tr>
                <select name="ojos" class="form-control" ng-model="color_ojos" >
                    <option value="No ha seleecionado el color de cabello" selected>Color</option>
                    <option value="Negros">Negros</option>
                    <option value="Pardos">Cafes</option>
                    <option value="Verdes">Verdes</option>
                    <option value="Azules">Azules</option>

                </select>
            </tr>
        </table>

      </td>

      <td>

        <table>
            <tr>
                <p>Color de piel:&nbsp;&nbsp;&nbsp; </p>
            </tr>
            <tr>
                <select name="ojos" class="form-control" ng-model="color_piel" >
                    <option value="No ha seleecionado el tipo de cabello" selected>Tipo</option>
                    <option value="Lacio">Blanca</option>
                    <option value="Ondulado">Morena</option>
                    <option value="Rizado">Negra</option>

                </select>
            </tr>
        </table>

      </td>

        </table>
        </div>

        <div class="form-group" >
        <table>

        <td>

        <table>
            <tr>
                <p>Talla de Blusa:&nbsp;&nbsp;&nbsp; </p>
            </tr>
            <tr>
                <select name="blusa" class="form-control" ng-model="blusa" >
                    <option value="No ha seleecionado el color de cabello" selected>Opcion</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>

                </select>
            </tr>
        </table>

      </td>
      <td>

      <table>
          <tr>
              <p>Traje de Bano:&nbsp;&nbsp;&nbsp; </p>
          </tr>
          <tr>
              <select name="traje_bano" class="form-control" ng-model="bano" >
                  <option value="No ha seleecionado el color de cabello" selected>Opcion</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>

              </select>
          </tr>
      </table>

    </td>

      <td>

        <table>
            <tr>
                <p>Nro de Calzado:&nbsp;&nbsp;&nbsp; </p>
            </tr>
            <tr>
                <select name="calzado" class="form-control" ng-model="calzado" >
                    <option value="No ha seleccionado" selected>Seleccione</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>

                </select>
            </tr>
        </table>

      </td>

        </table>
        </div>

        <div class="form-group" >

        <div style="margin-bottom: 10px" class="input-group">

                <p >Posee marcas o se&ntilde;ales visibles:&nbsp;&nbsp;&nbsp;
                  <br>
                    <input type="checkbox" name="senales" value="Tatuajes" ng-model="senales">Tatuajes&nbsp;&nbsp;
                    <input type="checkbox" name="senales" value="Cicatriz" ng-model="senales">Cicatriz&nbsp;&nbsp;
                    <input type="checkbox" name="senales" value="Ninguna" ng-model="senales">Ninguna&nbsp;&nbsp;
                </p>

        </div>
      </div>

      <div class="form-group">

                <p>Especifique el lugar</p>
            <div class="input-group">
              <input type="text" class="form-control" name="lugar" id="lugar" ng-model="lugar"   >
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-user"></span></span>

            </div>


      </div>
      <div style="margin-bottom: 10px" class="input-group">
          <p>Seleccione su mejor imagen:</p>
          <input type="file" name="file1" id="file1" class="">
          <br>
      </div>

      <div class="checkbox" >
              <input type="checkbox" ng-model="usuario.acepto" name="acepto"  ng-click="acepto2()" required >Acepto que la informacion es verdadera
              <br><div class="chico">
                Si no marca esta casilla el formulario no sera enviado
              </div>
      </div>



      </div>





<div class="col-md-12" id="paginador">


<input type="button" name="revisar" value="Revisar" class="btn btn-danger" ng-click="revisar()" ng-show="_revisar" >
<input type="button" name="revisar2" value="Revisar2" class="btn btn-danger" ng-click="revisar2()" ng-show="_revisar2" >
<input type="submit" name="enviar" value="Enviar" class="btn btn-success" ng-click="enviar()" ng-show="_enviar"  >

</div>



        </form>
    </div>








  </body>

</html>
