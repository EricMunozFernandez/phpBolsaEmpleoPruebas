<?php

    /*hostname
    username
    password
    base de datos*/

    $conn= mysqli_connect("localhost","dev",
        "mysql","pruebas");
    echo"<pre>";

    $insert= "INSERT INTO users( name, email) VALUES ('alex', 'alex@dominio.es');";

    $return=mysqli_query($conn, $insert);

    print_r( ($return) );

    mysqli_close($conn);