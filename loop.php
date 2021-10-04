<?php  
    $x = 1;
    $n = 2;
    while ($x <= 10) {
        echo $n." x ".$x." = ".$n*$x."<br>";
        $x++;
    }

    $y = 15;
     do{
       echo $y."<br>";
       $y++;
    }while ($y <= 10);

    for ($i=0; $i <= 100; $i += 2) {
        if ($i != 100) {
            $jojon = ", ";
        } else {
            $jojon = null;
        }
        echo $i.$jojon;
    }

?>