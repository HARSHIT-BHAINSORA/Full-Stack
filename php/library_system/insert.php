<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db = "demo";


    $a_no = $_POST['acc_no'];
    $tit = $_POST['title'];
    $auth = $_POST['author'];
    $edi = $_POST['edition'];
    $pub = $_POST['publisher'];



    $conn = new mysqli($servername , $username , $password , $db);

    if($conn->connect_error)
        die("Connection failed !!!!" . $conn->connect_error);

    $sql = "insert into library values('$a_no' , '$tit' , '$auth' , '$edi' , '$pub')";
    $res = $conn->query($sql);

    if($res == true)
    {
        echo "Record Entered Successfully !!!"."<br />";
        echo "<a href='home.html'>Enter New Record</a>" . " OR ";
        echo "<a href='search.html'>Search for a book</a>";

    }
    else
    {
        echo "Error Occurs !!!"."<br />" . "OR";
        echo "<a href='home.html'>Back to Homepage</a>";
    }
    
    $conn->close();
?>