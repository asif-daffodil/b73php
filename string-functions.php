<?php  
    $x = "Dhaka is the capital of Bangladesh";
    echo strlen($x)."<br>";

    $y = "My name is Asif";
    $z = "My name is Asif";
    echo substr($y, 0, 7)."<br>";
    echo substr($y, -4)."<br>";
    echo str_replace('Asif', 'Abir', $z)."<br>";
    echo str_word_count($z)."<br>";
    echo strrev($z)."<br>";
    echo strpos($z, 'Asif');
?>