<?php
    // phpinfo();
    $x = "hello";
    print_r($x);
    echo "<br>";
    $y = 10;
    echo gettype($y)."<br>";
    $z = 10.3;
    echo gettype($z)."<br>";

    function showPHPversion(){
        echo "This is PHP ".phpversion();
    }
    showPHPversion();
    echo "<br>";
    function sum($n1, $n2){
        return $n1 + $n2;
    }
    echo sum(1257, 457);
    echo "<br>";
    function hello(){
        echo "Hello World!";
    }
    hello();
?>