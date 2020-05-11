

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


      $iddv =$_SESSION['visitorid'] ;

        
$idd = $_REQUEST['idd'];

                    
                  /*  $_SESSIONidquery= "SELECT id FROM visitor where visitorUsername =". $_SESSION['visitorUsername'] .";"
                        
                    $result1SESSIONidquery= mysqli_query($conn, $_SESSIONidquery); */
                    $result1SESSIONidquery="1" ;
                $query1 = " INSERT INTO favoriteslist (visitor_id, atwork_id)   
VALUES ( (SELECT id FROM visitor where id ='".$iddv."'), (SELECT id FROM atwork where id ='".$idd."'));";
                  
                  
                $result1 = mysqli_query($conn, $query1);
           
header("location:Artifact.php?id=".$idd."") ;
            ?>
            