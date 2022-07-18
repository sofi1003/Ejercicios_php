<?php 
//ciclo for

for ($i=0; $i < 10; ++$i) { 
    echo "Hola este es el numero $i".'<br>';
}

for ($i=0; $i < 10; $i++) { 
    $rta = 4 * $i;
    echo "4 x $i = $rta".'<br>';
}

//realizar un cronometro

for ($hora=0; $hora <= 23; $hora++) { 
    for ($minutos=0; $minutos <= 59; $minutos++) { 
        for ($seg=0; $seg <= 59 ; $seg++) { 
            echo "$hora: horas con $minutos. y $seg:seg<br>";
            # code...
        }
        # code...
    }
    # code...
}
?>
