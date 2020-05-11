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

 
?>

<?php 
                    
                  /*  $_SESSIONidquery= "SELECT id FROM visitor where artistUsername =". $_SESSION['artistUsername'] .";"
                        
                    $result1SESSIONidquery= mysqli_query($conn, $_SESSIONidquery); */
                    $result1SESSIONidquery="1" ;
                $query1 ="UPDATE atwork SET date ='".$_REQUEST['artwork_date']."' WHERE id='".$_REQUEST['id']."'";
                  
                  
                $result1 = mysqli_query($conn, $query1);
           
header("location:EditArtifact.php?id=".$_REQUEST['id']);
            ?>
					<?php
                mysqli_close($conn);
?>