<?php
    $saltoLinea = '<br>';
    echo 'HOLA SOFI<br>';
    echo "abcde" , "fghij<br>"; 
    print "mi nombre es Sofi<br>";
    
    //Manejo de Variables
    //Strings
    $nombre = "Ana Sofia<br>";
    echo $nombre;

    $color = "verde<br>";
    $COLOR = "rosa<br> ";

    echo $color;
    echo $COLOR;

    //Numebers
    $n = 5;
    $nn = 2.5;
    $nnn = true;
    echo $n;
    echo $saltoLinea;
    echo $nn;
    echo $saltoLinea;
    echo $nnn;
    echo $saltoLinea;

    //Varibales Globales o Locales

    define("codigo", 123456);
    echo codigo;
    echo $saltoLinea;

    //Funcion gettype y var_dump

    echo gettype($n);
    echo $saltoLinea;
    echo gettype($nn);
    echo $saltoLinea;
    echo gettype($nnn);
    echo $saltoLinea;

    var_dump($n);
    echo $saltoLinea;
    var_dump($nn);
    echo $saltoLinea;
    var_dump($nnn);
    echo $saltoLinea;

    //Operaores Aritmeticos

    $numero1 = 5;
    $numero2 = 3;

    $suma = $numero1 + $numero2;
    echo  "Suma = ", $suma , $saltoLinea;

    echo "Potencia = " , $numero1 ** $numero2, $saltoLinea;

    echo "La resta de $numero1 - $numero2 : ", $numero1 - $numero2, $saltoLinea;

    //Operadores de Asignación
     $x = 4;
     echo $x + 9, $saltoLinea;
     echo $x, $saltoLinea;

     $x+= 4;
     echo $x, $saltoLinea;

     $v = "Buenas ";
     $v.= 'noches';
     echo $v;
?>