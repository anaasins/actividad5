<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando la clase de Sandro</title>
  </head>
  <body>
    <?php
        //añadimos el archivo php de la clase de Sandro
        include 'NBA.php';

        //Hacer los objetos
        $primerEquipo = new classNBA();

          $primerEquipo->setEquipo('Cliveland Cavaliers');
          echo "El equipo es  " .$primerEquipo->getEquipo();

          $primerEquipo->setEstadio('Quicken Loans Arena');
          echo "</br> Juegan en el estadio " .$primerEquipo->getEstadio();

          $primerEquipo->setPropietario('Dan Gilbert');
          echo "</br> El propietario del equipo es " .$primerEquipo->getPropietario();

          $primerEquipo->setLocalizacion('Cliveland, Ohio');
          echo "</br> Juegan en " .$primerEquipo->getLocalizacion();
     ?>
  </body>
</html>
