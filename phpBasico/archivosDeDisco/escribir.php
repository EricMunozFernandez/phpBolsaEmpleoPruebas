<?php

    /* opcion 1

    $fp=fopen("datos.txt","w");
    fwrite($fp,"hola");
    fwrite($fp,"mundo");
    fclose($fp);*/

    /*opcion 2*/

    $texto= " hola mundo que tal estas hoy";
    file_put_contents("datos2.txt",$texto);