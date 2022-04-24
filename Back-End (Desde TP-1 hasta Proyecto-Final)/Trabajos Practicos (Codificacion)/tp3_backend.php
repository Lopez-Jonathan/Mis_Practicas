<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ejercicio N°1</h1>

    <?php
    $n = 1;
    while ($n<=100) {
      echo $n,"<br>";
      $n++;
    }
    ?>

    <h1>Ejercicio N°2</h1>

    <?php
    $n = 100;
    while ($n >= 1) {
      echo $n,"<br>";
      $n--;
    }
    ?>

    <h1>Ejercicio N°3</h1>

    <?php
    $n = 1;
    do {
      if($n % 2 == 0){
        echo $n,"<br>";
      }
      $n++;
    } while ($n<=100);
    ?>

    <h1>Ejercicio N°4</h1>

    <?php
    $n = 1;

    do {
      if($n % 2 ==1){
        echo $n,"<br>";
      }
      $n++;
    } while ($n<=100);
    ?>

    <h1>Ejercicio N°5</h1>

    <?php
    $n=0;
    for ($i=1; $i <=20 ; $i++) {
      $n += $i;
    }
    echo $n,"<br>";
    ?>

    <h1>Ejercicio N°6</h1>

    <?php
    $n=0;
    for ($i=1; $i <=20 ; $i++) {
      if($i % 2 == 0){
        $n += $i;
      }
    }
    echo $n,"<br>";
    ?>

  </body>
</html>
