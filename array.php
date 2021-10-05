<?php
    //indexed array
    $b_std = ['Hasibur', 24, 'Chandpur', true, "null"];
    echo $b_std[0]." ".$b_std[2];
    echo "<pre>";
    print_r($b_std);
    echo "</pre>";
    
    for ($i=0; $i < count($b_std); $i++) { 
       echo $b_std[$i]."<br>";
    }

    foreach ($b_std as $val) {
        echo $val."<br>";
    }

    //Associative array ( => )
    $hkb = ['name'=>'Hasibur', 'age'=>24, 'city'=>'Chandpur', 'gender'=>'Male'];
    echo $hkb['name'];
    echo "<pre>";
    print_r($hkb);
    echo "</pre>";
    foreach ($hkb as $pey => $data) {
        echo $pey." : ".$data."<br>";
    }

    //Multidimontional array
    $hhh = [
        ['Hasib', 'Chandpur', 'Male'],
        ['Arup', 'Khulna', 'Male'],
        ['Bithi', 'Josore', 'Female'],
        ['Mukta', 'Madaripur', 'Female']
    ];
    echo $hhh[2][2];
    echo "<pre>";
    print_r($hhh);
    echo "</pre>";

    for ($j=0; $j < count($hhh); $j++) { 
        for ($k=0; $k < count($hhh[$j]); $k++) { 
           echo $hhh[$j][$k]." ";
        }
        echo "<br>";
    }

    foreach ($hhh as $value) {
        foreach ($value as $values) {
           echo $values." ";
        }
        echo "<br>";
    }

    $hbk = [
        ['Name'=>'Hasibur','Age'=>24,'City'=>'Chandpur'],
        ['Name'=>'Bithi','Age'=>22,'City'=>'Josore'],
        ['Name'=>'Arup','Age'=>16,'City'=>'Khulna'],
        ['Name'=>'Mukta','Age'=>13,'City'=>'Madaripur'],
        ['Name'=>'Jafrin','Age'=>12,'City'=>'Dhaka']
    ];
    echo "<pre>";
    print_r($hbk);
    echo "</pre>";

    foreach ($hbk as $hbks) {
       foreach ($hbks as $key => $vals) {
           echo $key." : ".$vals."<br>";
       }
       echo "<br>";
    }
?>