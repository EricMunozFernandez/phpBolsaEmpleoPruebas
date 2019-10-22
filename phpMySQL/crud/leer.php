<?php

    echo "<pre>";

    $conn= mysqli_connect("localhost","dev",
    "mysql","pruebas");

    $sql="SELECT id, name, email, fecha FROM users";

    $result= mysqli_query($conn, $sql);

    $rows= mysqli_fetch_array($result, MYSQLI_ASSOC);

    do{
        $data[]=$rows;
    }while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC));

    print_r($data);

    mysqli_close($conn);