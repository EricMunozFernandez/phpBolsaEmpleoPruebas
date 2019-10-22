<?php

    //con el & se queda modificado el valor
    function sumar(&$x)
    {
        $x++;
        echo $x."\n";
    }

    $a=10;

    sumar($a);

    echo $a."\n";