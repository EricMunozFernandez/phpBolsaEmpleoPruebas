<?php

    for($i=0;$i<10;$i++)
    {
        if($i==5)
        {
            continue;
        }
        echo $i."<br>";
    }
    echo "FIN"."<br>----------<br>";

for($y=0;$y<10;$y++)
{
    if($y==5)
    {
        break;
    }
    echo $y."<br>";
}
echo "FIN";