<?php

//$a=$b=$c="hola mundo";

$a=5;
echo "\nPostincremento\n";
echo $a."\n"; //5
echo $a++."\n";//al 5 le suma 1 pero no lo muestra
echo $a."\n";

echo "\nPreincremento\n";
$a=5;
echo ++$a."\n";//al 5 le suma 1 y lo muestra

echo "\nOperadores String\n";

$b="Juan ";
$c=$b."lopez";
$d="Pedro ";
$d.="Garcia";

echo $c."\n";
echo $d."\n";