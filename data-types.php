<?php  
    // string
    $x = "This is a text";
    var_dump($x);
    echo "<br>";

    $x = 123;
    var_dump($x);
    echo "<br>";

    $x = 123.456;
    var_dump($x);
    echo "<br>";

    $x = true;
    var_dump($x);
    echo "<br>";

    $x = ['Kamal', 'Dhaka', 25, true];
    var_dump($x);
    echo "<br>";

    $x = null;
    var_dump($x);
    echo "<br>";

    class myClass {
        public $xyz = "Bangladesh";
    }

    $x = new myClass;
    var_dump($x);
    echo "<br>";

    // Resouse
?>