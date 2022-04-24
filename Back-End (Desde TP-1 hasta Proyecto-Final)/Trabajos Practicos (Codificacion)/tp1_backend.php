<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ejercicio N°1</h1>

    <?php
    echo "Hola Mundo";

    ?>

    <h1>Ejercicio N°2</h1>

    <?php
    $texto = "Hola Mundo";
    echo "$texto";
     ?>

     <h1>Ejercicio N°3</h1>

     <?php
     $a = 5;
     $b = 5;
     echo "$a + $b =", $a + $b, "<br>",
     "$a - $b =", $a - $b, "<br>",
     "$a * $b =", $a * $b, "<br>",
     "$a / $b =", $a / $b, "<br>",
     "$a % $b =", $a % $b, "<br>";
     ?>

     <h1>Ejercicio N°4</h1>

     <?php
     $a = 20;
     echo "Los grados Fahrenheit para 20 grados Celcius es:", ($a *1.8)+32;
     ?>

     <h1>Ejercicio N°5</h1>

     <?php
     $base = 18;
     $altura = 12;
     $radio = 30;

     echo "El perimetro del rectangulo es:", 2*$base + 2*$altura,"<br>",
     "El area del rectangulo es:", $base * $altura,"<br>",
     "El Perimetro del circulo es:", 2*M_PI*30,"<br>",
     "El area del circulo es:", M_PI*30*30;
     ?>
  </body>
</html>
