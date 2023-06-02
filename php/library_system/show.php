<!DOCTYPE html>
<html>
    <head>
        <title>Library Search</title>
        <style>
              h2,h3{
                text-align: center;
            }
            table,td,tr,th{
                border: 3px solid black;
                border-collapse:collapse;
                padding:5px;
                text-align : center;
            }
            table{
                width: 60%;
                margin-left: 300px;
            }
        </style>
    </head>
    <body>
        <h2>Library Management System</h2>
        <hr>
        <h3>The Book you Requested for </h3>
        <?php
    
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $db = "demo";

            $tit = $_POST['title'];
            $conn = new mysqli($servername , $username , $password , $db);

            if($conn->connect_error)
                die("Connection failed !!!!" . $conn->connect_error);            
            
                $sql = "select * from library where Title ='$tit'";
                $res = $conn->query($sql);
               ?> 
                
                <table>
                    <tr>
                        <th>Accession_Number</th>
                        <th>Title</th>
                        <th>Author</th> 
                        <th>Edition</th>
                        <th>Publisher</th>
                    </tr>
                <?php        
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                ?>
            <tr>
                <td><?php echo $row['Accession_no']?></td>
                <td><?php echo $row['Title']?></td>
                <td><?php echo $row['Author']?></td>
                <td><?php echo $row['Edition']?></td>
                <td><?php echo $row['Publisher']?></td>
            </tr>    
            <?php
                }
            }  
            else{
                echo "Soory !!! Is not present!!!"."<br/>";
                echo "<a href='search.html'>Back to Search Page</a>";
            }
            ?>
        </table>    
        <?php
             $conn->close();
             echo "<a href='home.html'>Enter New Record</a>". " OR  ";
             echo "<a href='search.html'>Search for a book</a>";
        ?>     
    </body> 
</html>