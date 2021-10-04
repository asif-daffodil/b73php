<?php  
    $age = 50;

    if ($age <= 12 && $age >= 0) {
        echo "You are a Baby";
    }elseif ($age <= 19 && $age > 12) {
        echo "You are a teenager";
    }elseif ($age <= 29 && $age > 19) {
        echo "You are a young man";
    }elseif ($age <= 49 && $age > 29) {
        echo "You are a middle-aged man";
    }elseif ($age >= 50 && $age < 150) {
        echo "You are an old man";
    }else {
        echo "You are not in this world";
    }

    echo "<br>";

    switch ($age) {
        case ($age <= 12 && $age >= 0):
            echo "You are a Baby";
            break;

        case ($age <= 19 && $age > 12):
            echo "You are a teenager";
            break;
        
        case ($age <= 29 && $age > 19):
            echo "You are a young man";
            break;
        
        case ($age <= 49 && $age > 29):
            echo "You are a middle-aged man";
            break;

        case ($age >= 50 && $age < 150):
            echo "You are an old man";
            break;

        default:
            echo "You are not in this world";
            break;
    }
    echo "<br>";
    
    $name = "Hasibur Rahman";
    $age = 22;
    $status = "Single";
    $religion = "Islam";
    $nationality = "Bangladeshi";
    $homeTown = "Chandpur";

    if(!empty($name)){
        if($age >= 18){
            if ($status == "Single") {
               if($religion != "ihudi"){
                if(isset($nationality)){
                  if ($homeTown != "Noyakhali"){
                    echo "Apnar Chakri Hobe";
                  }else{
                      echo "Apnar Chakri Hobei Hobe";
                  }  
                }else{
                    echo "eta jongle na";
                }
               }else{
                   echo "Bangladeshe israil er passport alowed na";
               }
            }else {
                echo "Married are not allowed here";
            }
        }else{
            echo "Sorry babu, ekhane bacchader allow kora hoyna";
        }
    }else {
        echo "Naam chara bektir chakri hoyna";
    }
?>