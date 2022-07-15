<?php 
    define("HIGH", 10);
    define("RIGHT_ANGLE_TRIANGLE", 4);
    define("EQUILATERAL_TRIANGLE", 3);
    define("RANDOM", rand(0, 9));

    function printVShape () {
        for($i = 1; $i <= HIGH; $i++) {
            for($j = 1; $j <= $i; $j++){
                echo $j.' ';
            }
            $offsetThrottle = 4.25;
            $offset = HIGH * $offsetThrottle;
            for($j = $offset; $j >= ($i > 9 ? ($i + 0.5) : $i) * RIGHT_ANGLE_TRIANGLE; $j--){
                echo ' ';
            }

            for($k = $i; $k >= 1; $k--){
                echo $k.' ';
            }
            echo "\n";
        }
    }

    printVShape();
?>
