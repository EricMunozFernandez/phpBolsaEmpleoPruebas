<?php

    session_start();
    echo $_SESSION["mi_sesion"];

    print_r($_SESSION);

    echo"<br>";

    echo session_id();