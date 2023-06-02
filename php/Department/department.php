<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db = "demo";

    $dept = $_POST['Department'];

    $conn = new mysqli($servername , $username , $password , $db);

    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }

    $sql = "select * from pers where Department_name = 'Software_Dev'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "Emp_id :". $row['Emp_id']."&emsp;"."Emp_Name :".$row['Emp_name']."&emsp;"."Salary :".$row['Salary']."&emsp;"."Dept_Name :".$row['Department_name']."<br/>";  
        }
    }
    else    
        echo "No recod Exits...";
    
    $conn->close();
?>