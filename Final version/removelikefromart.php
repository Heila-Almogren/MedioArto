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
      $idda = $_REQUEST['idartfroo'];
      $iddv =$_SESSION['visitorid'] ;

            

$query1 = " DELETE FROM favoriteslist WHERE visitor_id IN(SELECT id FROM visitor where id ='".$iddv."') AND atwork_id IN(SELECT id FROM atwork where id ='".$idda."');";    



                  
                $result1 = mysqli_query($conn, $query1);
$id=$_POST["id"] ;
           
header("location:Artifact.php?id=1") ;

header("location:Artifact.php?id=".$idda."") ;

            ?>


