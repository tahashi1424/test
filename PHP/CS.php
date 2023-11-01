<? php

    function getLowestTemperature(int $x,int $y):int{
        return $x - $y;
    };

    echo getLowestTemperatur(3,2);
    echo getLowestTemperatur(2,10);
    echo getLowestTemperatur(18,5);
    echo getLowestTemperatur(8,14);
    echo getLowestTemperatur(20,5);
    ?>