<?php

    //https://www.php.net/manual/es/function.date.php

   /* $f="09/10/2019";
    $fecha=date("Y-m-d",strtotime($f));

    echo $fecha."\n";

    echo date("Y-m-t")."\n";

    print_r (getdate(time()))."\n";

    print_r (localtime(time()))."\n";*/

    $date_n="2019-10-09";
    $date_futuro= strtotime("+30 day", strtotime($date_n));

    echo date("d/m/Y",$date_futuro)."\n";

    echo date("d/m/Y H:i:s")."\n";