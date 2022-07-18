<?php
$saltoLinea = '<br>';
    //array
    $numeros[0] = 1;
    $numeros[1] = 2;
    $numeros[2] = 3;
    $numeros[3] = 4;

    echo $numeros[1], '<br>';

    //Mejor forma de escrivir un array
    $numeritos = array(5,6,7,8);

    echo $numeritos[3];

    //ARRAYS ASOCIATIVAS
     $edad = array(
         'juan' => 11,
         'pedro' => 12,
         'david' => 35
     );
     echo $saltoLinea;

     echo $edad['juan'];

     echo $saltoLinea;

     echo '<pre>';
     var_dump($edad);
     echo '</pre>';

     //arrays operaciones

     $codigos = [001, 002, 003, 004];
     $suma = array_sum($codigos);

     echo $suma;

     //Funciones de ARRAYS
      $edades = array(1,2, 3, 3,4,5,6);
      $edades[] = 100;

      echo '<pre>';
      var_dump($edades);
      echo '</pre>';

      //asociativo 
      $asociativo = array(
          'juan' => 12,
          'pedro' => 33,
          'jesus' => 45
      );

      $asociativo['Luis'] = 99;

      echo "<pre>";
      var_dump($asociativo);







?>

