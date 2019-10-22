<?php

    echo "<pre>";

    $conn= mysqli_connect("localhost","dev",
    "mysql","pruebas");

    $update="update users set name='alex22' where id=2";

    $return = mysqli_query($conn, $update);

    print_r($return);

    mysqli_close($conn);