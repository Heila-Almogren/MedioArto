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
 

           $iddv =$_SESSION['artistid'] ;
           $idart =$_REQUEST['idart'] ;



               
                  /*  $_SESSIONidquery= "SELECT id FROM visitor where visitorUsername =". $_SESSION['visitorUsername'] .";"
                        
                    $result1SESSIONidquery= mysqli_query($conn, $_SESSIONidquery); */
//$idda = $_REQUEST['idart'];
   //   $iddv = $_REQUEST['idv'];
	  
$query1 = "DELETE FROM atwork WHERE id='".$idart."';";

                $result1 = mysqli_query($conn, $query1);
	
header("location:ArtistsDash.php?id=".$iddv) ;




?>
