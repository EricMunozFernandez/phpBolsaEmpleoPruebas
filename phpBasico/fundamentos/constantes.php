<?php

    #constante simple
    define("MI_CONSTANTE","hola");

    #constante array
    define("MI_ARRAY",array("2","3"));

    $_miConstante=MI_CONSTANTE;

    echo $_miConstante."\n";

    echo MI_CONSTANTE."\n";

    print_r(MI_ARRAY[0])."\n";