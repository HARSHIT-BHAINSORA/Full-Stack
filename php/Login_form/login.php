<?php

    $severname = "localhost:3307";
    $username = "root";
    $password = "";
    $db = "demo";

   
	

    $user = $_POST["user_name"];
    $pass = $_POST["pass"];
    


    $conn = new mysqli($severname , $username , $password , $db);

    if($conn->connect_error)
        die("Connection failed" . $conn->connect_error);
    
    $sql = "select * from user_info where username = '$user'";
    $res = $conn->query($sql);

    if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            if($row['username'] == $user && $row['password'] == $pass)
                echo "Valid users!!!";
            else    
                echo "Wrong info";    
        }
    }
    else    
        echo "NO Such user exist";


    $conn->close();
?>
