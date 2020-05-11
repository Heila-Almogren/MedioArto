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
      $idda = $_REQUEST['add'];
      $iddv =$_SESSION['artistid'] ;

            

                 $query1 ="UPDATE atwork SET enableComment ='1' WHERE id='".$idda."'";



                  
                  
                $result1 = mysqli_query($conn, $query1);
//$id=$_POST["id"] ;
           
header("location:EditArtifact.php?id=".$idda."") ;
            ?>