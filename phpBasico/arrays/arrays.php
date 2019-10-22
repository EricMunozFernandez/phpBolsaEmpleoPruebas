<?php

    $array1= array("1","dos","3",array("juan","diego"));

    $array2= array("uno","dos","tres","cuatro");

    /*echo $array2[1]."<br>";
    echo "<pre>";
    print_r($array1);*/

    $array_ass=array(
        "1"=>"valor1",
        "2"=>"valor2",
        "3"=>"valor3",
        "4"=>$array2,
        );

    is_array($array_ass);//mira si es array, da true o false

echo "<pre>";
print_r($array_ass);
echo "</pre>";