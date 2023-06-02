<?php
    date_default_timezone_set("Asia/Kolkata");
    setcookie('LastVisit' , date("d/m/Y" . " " . "h-i-sa". " " . "l"));
?>

<h2>Your Last time visit was : </h2>

<?php

    if(isset($_COOKIE['LastVisit']))
    {
        $visit = $_COOKIE['LastVisit'];
        echo $visit;
    }
    else 
    {
        echo "That's your first visit!!!";
    }

?>