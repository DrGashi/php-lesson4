<?php
    // phpinfo();
    $x = "hello";
    print_r($x);
    echo "<br>";
    $y = 10;
    echo gettype($y)."<br>";
    $z = 10.3;
    echo gettype($z)."<br><br>";

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
    echo "<br>";
    function maximum($x, $y){
        if($x > $y){
            return $x;
        }else{
            return $y;
        }
    }
    $a = 15;
    $b = 20;
    $test = maximum($a, $b);
    echo "the biggest number between $a and $b is $test <br>";

    function oddEven($n){
        if($n % 2 == 0){
            return "$n is even";
        }else{
            return "$n is odd";
        }
    }
    print_r(oddEven(4)."<br>");
    print_r(oddEven(3)."<br>");
    print_r(oddEven(15)."<br>");
    print_r(oddEven(28)."<br>");
    print_r(oddEven(35)."<br>");

    function localVar(){
        $y = 5;
        echo "$y <br>";
    }
    localvar();
    $x = 10;
    $y = 5;
    function globalVar(){
        global $x, $y;
        $sum = $x + $y;
        echo "$x + $y = $sum <br>";
    }
    globalVar();
    function staticVar(){
        static $counter = 1;
        echo "counter value is: $counter <br>";
        $counter++;
    }
    staticVar();
    staticVar();
    staticVar();
    staticVar();
    staticVar();
    staticVar();

    //arrays

    $sports = ["Football", "Basketball", "Voleyball", "Handball"];
    echo "$sports[0] <br>";
    echo end($sports);
    echo "<br>";
    echo count($sports);
    echo "<br>";
    for($i = 0; $i < count($sports); $i++){
        echo "$sports[$i] <br>";
    }
?>