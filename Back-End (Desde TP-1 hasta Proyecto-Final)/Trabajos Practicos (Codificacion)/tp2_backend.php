<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ejercicio N°1</h1>

    <?php
    $n = 10;

    if ($n > 0) {
      echo "n es positivo";
    }

    ?>

    <h1>Ejercicio N°2</h1>

    <?php
    $n = 5;

    if ($n > 1 and $n < 10) {
      echo "n esta entre el rango (1,10)";
    }
    ?>

    <h1>Ejercicio N°3</h1>

    <?php
    $n = 12;

    if($n>10){
      echo "n es mayor a 10";
    }elseif($n<2){
      echo "n es menor a 2";
    }
    ?>

    <h1>Ejercicio N°4</h1>

    <?php
    $numero1 = 5;
    $numero2 = 10;

    if($numero1 > $numero2){
      echo "$numero1 + $numero2 =",$numero1 + $numero2,"<br>",
      "$numero1 - $numero2 =",$numero1 - $numero2;
    }elseif($numero2 > $numero1){
      echo "$numero2 * $numero1 =",$numero2 * $numero1,"<br>",
      "$numero2 / $numero1 =",$numero2 / $numero1, "<br>",
      "$numero2 % $numero1 =",$numero2 % $numero1;
    }else{
      echo "Los numeros ingresados son iguales";
    }
    ?>
  </body>
</html>
