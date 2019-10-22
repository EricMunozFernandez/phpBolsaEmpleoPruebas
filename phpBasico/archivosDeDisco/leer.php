<?php

   /* opcion 1 caracter a caracter

   $file= fopen("ficheros.txt","r");

    //mientras no sea fin de fichero del fichero $file
    while(!feof($file))
    {
       //leer caracter a caracter
        echo fgetc($file);
    }

    fclose($file);*/

   /*opcion 2 todo de golpe

    $file= file_get_contents("ficheros.txt");

    print_r($file);*/

   /*opcion 3*/

    $lineas=file("ficheros.txt");
    print_r($lineas);

    //die ("paramos la ejecucuion");

    foreach ($lineas as $num_linea=>$linea)
    {
        echo "Linea #".$num_linea.":.$linea"."\n";
    };