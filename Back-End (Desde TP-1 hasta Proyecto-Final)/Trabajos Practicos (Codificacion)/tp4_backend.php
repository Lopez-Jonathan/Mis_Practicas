<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicio N°1</h1>

    <?php

    $pares = ["2","4","6","8","10","12","14","16","18","20"];

    print "<pre>\n";
    print_r($pares);
    print "</pre>\n";

    ?>

    <h1>Ejercicio Nº2</h1>

    <?php

    $valores = ["Pedro","Ana","34","1"];

    print_r($valores);

    ?>

    <h1>Ejercicio Nº3</h1>

    <?php

    $asociativo = ['Nombre'=>"Pedro",'Apellido'=>"Torres", 'Direccion'=>"Av. Mayor 3703",'Telefono'=>1122334455];

    print_r($asociativo);

    ?>

    <h1>Ejercicio Nº4</h1>

    <?php

    $ciudades = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];

    foreach ($ciudades as $indice => $valor) {
      print "<p>La ciudad con el indice $indice es: $valor </p>\n";
    }

    ?>

    <h1>Ejercicio Nº5</h1>

    <?php

    $ciudades = ['MD'=>"Madrid",'BCL'=>"Barcelona",'LD'=>"Londres",'NY'=>"New York",'LA'=>"Los Angeles",'CCG'=>"Chicago"];

    foreach ($ciudades as $indice => $valor) {
      print "<p> La ciudad con el indice $indice es: $valor </p>\n";
    }
    ?>
  </body>
</html>
