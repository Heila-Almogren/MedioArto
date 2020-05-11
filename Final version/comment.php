 


<?php
$servername = "localhost";
$username = "root";
$password = "";
$name="medioarto";

// Create connection
$conn = new mysqli($servername, $username, $password,$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

   session_start();


                    
                    
                  /*  $_SESSIONidquery= "SELECT id FROM visitor where visitorUsername =". $_SESSION['visitorUsername'] .";"
                        
                    $result1SESSIONidquery= mysqli_query($conn, $_SESSIONidquery); */
                  

$commentBox =  $_REQUEST['commentBox'];
$idd = $_REQUEST['idd'];
$sid=$_SESSION['visitorid'] ;




                $query1 = " INSERT INTO comment (content, vistior_id , atwork_id)   
VALUES ( '$commentBox ' ,'$sid', ' $idd ');";
                  
                  
                $result1 = mysqli_query($conn, $query1);





           
           
header("location:Artifact.php?id=".$idd) ;
            ?>
            