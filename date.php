<?php  
    echo date("d-m-y")."<br>";
    echo date("d-M-Y")."<br>";
    echo date("d-F-Y (D)")."<br>";
    echo date_default_timezone_get()."<br>";
    date_default_timezone_set('America/New_York');
    echo date("d-F-Y (l) h:i:s a")."<br>";
    echo date("d-F-Y (l) H:i:s A")."<br>";
    date_default_timezone_set('Asia/Dhaka');
    echo date("d-F-Y (l) H:i:s A")."<br>";


    //mktime
    // hour min sec month day year
    $myTime = mktime(14, 15, 16, 2, 10, 2025);
    echo date("d-F-Y (l) H:i:s A", $myTime)."<br>";

    //strtotime
    $hasibur = strtotime("-30 years +2month -7 days +5 hours +3 mins"); 
    echo date("d-F-Y (l) H:i:s A", $hasibur)."<br><br>";

    $startDate = strtotime("next friday");
    $endDate = strtotime("+6 weeks", $startDate);
    while ($startDate <= $endDate) {
        echo date("d-F-Y (l)", $startDate)."<br>";
        $startDate = strtotime("+1 week", $startDate);
    }
?>