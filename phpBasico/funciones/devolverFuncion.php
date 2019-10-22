<?php

    function suma($valor)
    {
        $valor++;
        $arr =array(
            "1"=>"uno",
            "2"=>"dos",
            "3"=>"tres"
        );

        return ($arr);
    }

    $retorno=suma(10);

    print_r($retorno)."\n";