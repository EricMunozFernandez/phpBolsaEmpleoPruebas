<?php

    echo"<pre>";
    echo"GET: ";
    print_r($_GET);
    echo"<br>";
    echo"POST: ";
    print_r($_POST);
    echo"<br>";
    print_r($_FILES);
    echo"<br>";
    echo "</pre>";
    echo $_POST["nombre"];

   move_uploaded_file( $_FILES["fichero"]["tmp_name"],"/fichero/".$_FILES["fichero"]["name"]);