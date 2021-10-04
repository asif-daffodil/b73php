<?php
    $x = "Dhaka";
    function myFunc ($city = "Washington DC", $country = "USA") {
        return "$city is the capital city of $country <br>";
    }

    echo myFunc ($x, "Bangladesh");
    echo myFunc ("Dilli", "India");
    echo myFunc ("Islamabad", "Pakistan");
    echo myFunc ();

    function fname () {
        return "Hashibur";
    }

    function lname () {
        return "Rahman";
    }

    function fullName () {
        return "Your full name is : ".fname()." ".lname()."<br>";
    }

    echo fullName();
?>