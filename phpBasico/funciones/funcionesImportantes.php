<?php

/*https://www.php.net/manual/es/book.array.php*/

    $cadena="hola mundo";
    $arr= array("1","2","3");

    //cantidad de caracteres
    echo strlen($cadena)."\n";

    //coger una porcion de la cadena
    echo substr($cadena,1,8)."\n";

    //remplazar texto
    echo str_replace("o","p",$cadena)."\n";

    //string a array
    $var= explode(" ",$cadena);
    print_r($var[0])."\n";

    //de array a string
    echo implode(",",$arr)."\n";

    $ar1 =array(
        "1"=>"uno",
        "2"=>"dos",
        "3"=>"tres"
    );

    $ar2 =array(
        "4"=>"cuatro",
        "5"=>"cinco",
        "6"=>"seis"
    );
    //valor de las claves
    print_r(array_keys($ar1))."\n";

    //juntar dos arrays
    $arr3=array_merge($ar1,$ar2);
    print_r($arr3)."\n";

    //boorar un valor de una posicion
    unset($arr3[3]);
    print_r($arr3)."\n";

