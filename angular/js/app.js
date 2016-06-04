var app = angular.module('plunker', []);

app.controller('MainCtrl', function($scope) {

      $scope.columna1=true;
      $scope.columna2=true;
      $scope.columna3=true;
      $scope.revisar_formulario=false;
      $scope._revisar2=false;
      $scope._enviar=false;
      $scope._revisar=true;




  $scope.revisar=function() {

    $scope.columna1=false;
    $scope.columna2=false;
    $scope.columna3=false;
    $scope.revisar_formulario=true;
    $scope._revisar=false;
    $scope._revisar2=true;
    $scope._enviar=true;

  };

  $scope.revisar2=function() {

    $scope.columna1=true;
    $scope.columna2=true;
    $scope.columna3=true;
    $scope._enviar=false;
    $scope._revisar=true;
    $scope._revisar2=false;
    $scope.revisar_formulario=false;
  };




});


 function slctr(texto, valor) {
     this.texto = texto
     this.valor = valor
 }
 var San_Jose = new Array()
 San_Jose[0] = new slctr('Canton')
 San_Jose[1] = new slctr("San Jose")
 San_Jose[2] = new slctr("Escazu")
 San_Jose[3] = new slctr("Desamparados")
 San_Jose[4] = new slctr("Puriscal")
 San_Jose[5] = new slctr("Tarrazu")
 San_Jose[6] = new slctr("Aserri")
 San_Jose[7] = new slctr("Mora")
 San_Jose[8] = new slctr("Goicochea")
 San_Jose[9] = new slctr("Santa Ana")
 San_Jose[10] = new slctr("Alajuelita")
 San_Jose[11] = new slctr("Vasquez de Coronado")
 San_Jose[12] = new slctr("Acosta")
 San_Jose[13] = new slctr("Mora")
 San_Jose[14] = new slctr("Tibas")
 San_Jose[15] = new slctr("Moravia")
 San_Jose[16] = new slctr("Montes de Oca")
 San_Jose[17] = new slctr("Turrubares")
 San_Jose[18] = new slctr("Dota")
 San_Jose[19] = new slctr("Curridabat")
 San_Jose[20] = new slctr("Perez Zeledon")
 San_Jose[21] = new slctr("Leon Cortes")

 var Alajuela = new Array()
 Alajuela[0] = new slctr('Canton')
 Alajuela[1] = new slctr("Alajuela")
 Alajuela[2] = new slctr("San Ramon")
 Alajuela[3] = new slctr("Grecia")
 Alajuela[4] = new slctr("San Mateo")
 Alajuela[5] = new slctr("Atenas")
 Alajuela[6] = new slctr("Naranjo")
 Alajuela[7] = new slctr("Palmares")
 Alajuela[8] = new slctr("Poas")
 Alajuela[9] = new slctr("Orotina")
 Alajuela[10] = new slctr("San Carlos")
 Alajuela[11] = new slctr("Zarcero")
 Alajuela[12] = new slctr("Sarchi Norte")
 Alajuela[13] = new slctr("Upala")
 Alajuela[14] = new slctr("Los Chiles")
 Alajuela[15] = new slctr("Guatuso")

 var Cartago = new Array()
 Cartago[0] = new slctr('Canton')
 Cartago[1] = new slctr("Cartago")
 Cartago[2] = new slctr("Paraiso")
 Cartago[3] = new slctr("La Union")
 Cartago[4] = new slctr("Jimenez")
 Cartago[5] = new slctr("Atenas")
 Cartago[6] = new slctr("Turrialba")
 Cartago[7] = new slctr("Alvarado")
 Cartago[8] = new slctr("Oreamuno")
 Cartago[9] = new slctr("El Guarco")

 var Guanacaste = new Array()
 Guanacaste[0] = new slctr('Canton')
 Guanacaste[1] = new slctr("Liberia")
 Guanacaste[2] = new slctr("Nicoya")
 Guanacaste[3] = new slctr("Santa Cruz")
 Guanacaste[4] = new slctr("Bagaces")
 Guanacaste[5] = new slctr("Carrillo")
 Guanacaste[6] = new slctr("Canas")
 Guanacaste[7] = new slctr("Abangares")

 var Heredia = new Array()
 Heredia[0] = new slctr('Canton')
 Heredia[1] = new slctr("Heredia")
 Heredia[2] = new slctr("Barva")
 Heredia[3] = new slctr("Santo Domingo")
 Heredia[4] = new slctr("Santa Barbara")
 Heredia[5] = new slctr("San Rafael")
 Heredia[6] = new slctr("San Isidro")
 Heredia[7] = new slctr("belen")
 Heredia[8] = new slctr("Flores")
 Heredia[9] = new slctr("San Pablo")
 Heredia[10] = new slctr("Sarapiqui")

 var Limon = new Array()
 Limon[0] = new slctr('Canton')
 Limon[1] = new slctr("Limon")
 Limon[2] = new slctr("Guacimo")
 Limon[3] = new slctr("Matina")
 Limon[4] = new slctr("Pococci")
 Limon[5] = new slctr("Siquirres")
 Limon[6] = new slctr("Talamanca")

 var Puntarenas = new Array()
 Puntarenas[0] = new slctr('Canton')
 Puntarenas[1] = new slctr("Puntarenas")
 Puntarenas[2] = new slctr("Esparza")
 Puntarenas[3] = new slctr("Buenos Aires")
 Puntarenas[4] = new slctr("Montes de Oro")
 Puntarenas[5] = new slctr("Osa")
 Puntarenas[6] = new slctr("Quepos")
 Puntarenas[7] = new slctr("Golfito")
 Puntarenas[8] = new slctr("Coto Brus")
 Puntarenas[9] = new slctr("Parrita")
 Puntarenas[10] = new slctr("Corredores")
 Puntarenas[11] = new slctr("Garabito")

//*******Nietos*******************
 var jardin = new Array()
 jardin[0] = new slctr('- -Jardín- -')
 jardin[1] = new slctr("podadora", null)
 jardin[2] = new slctr("segadora", null)

 var fontaneria = new Array()
 fontaneria[0] = new slctr('- -Fontanería- -')
 fontaneria[1] = new slctr("llave inglesa", null)
 fontaneria[2] = new slctr("llave fija", null)

 var salon = new Array()
 salon[0] = new slctr('- -Salón- -')
 salon[1] = new slctr("Mesa", null)
 salon[2] = new slctr("silla", null)

 var dormitorio = new Array()
 dormitorio[0] = new slctr('- -Dormitorio- -')
 dormitorio[1] = new slctr("cama", null)
 dormitorio[2] = new slctr("mesita", null)

 function slctryole(cual, donde) {
     if (cual.selectedIndex != 0) {
         donde.length = 0
         cual = eval(cual.value)
         for (m = 0; m < cual.length; m++) {
             var nuevaOpcion = new Option(cual[m].texto);
             donde.options[m] = nuevaOpcion;
             if (cual[m].valor != null) {
                 donde.options[m].value = cual[m].valor
             } else {
                 donde.options[m].value = cual[m].texto
             }
         }
     }
 }
