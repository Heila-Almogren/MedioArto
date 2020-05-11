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
 
?>
<?php 
                    
                  /*  $_SESSIONidquery= "SELECT id FROM visitor where artistUsername =". $_SESSION['artistUsername'] .";"
                        
                    $result1SESSIONidquery= mysqli_query($conn, $_SESSIONidquery); */
                    $result1SESSIONidquery="1" ;
                $query1 ="UPDATE atwork SET enableComment ='1' WHERE id=3";
                  
                  
                $result1 = mysqli_query($conn, $query1);
$id=$_POST["id"] ;
           
header("location:EditArtifact.php?id=". $id ) ;
            ?>
					<?php
                mysqli_close($conn);
?>