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
      $idar = $_REQUEST['idar'];



      $sel =$_REQUEST['sel'];

     if($sel=="-1"){      

$query1 = "UPDATE artist
SET state = '2' where id ='".$idar."';";
   
     } else
         
     {$query1 = "UPDATE artist
SET state = '1' where id ='".$idar."';";
}


                  
                  
                $result1 = mysqli_query($conn, $query1);
$id=$_POST["id"] ;
           
header("location:AdminDashboard.php?id=1") ;
            ?>
            