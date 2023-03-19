<?php
    $c = 37.841;
    $f = round((9/5) * $c + 32, 4);
    $r = round((4/5) * $c, 4);
    $k = round($c + 273.15, 4);

    echo "Fahrenheit (F) = $f <br>";
    echo "Reamur (R) = $r <br>";
    echo "Kelvin (K) = $k";
?>