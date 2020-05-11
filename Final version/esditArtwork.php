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
                    //$result1SESSIONidquery="1" ;
					//$name=$_POST['name'];
					//$date=$_POST['date'];
					//$time=$_POST['time'];description 
					//&des=$_POST['des'];

					
					/*$sql1="UPDATE artwork SET name='" . $_POST['name'] . "', date='" . $_POST['date'] . "', time='" . $_POST['time']."', description='" . $_POST['description'] . "' WHERE id='1';*/
              
					//$sql1="UPDATE atwork SET name='" . $_POST['name'] . "', date='" . $_POST['date'] . "', time='" . $_POST['time']."', description='" . $_POST['description'] . "' WHERE id='3'";
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
   	$sql1="UPDATE atwork SET name='" . $_REQUEST['artwork_name'] . "', date='" . $_REQUEST['artwork_date'] . "', time='" . $_REQUEST['artwork_time']."', description='" . $_REQUEST['artwork_des'] . "' WHERE id='5'";

                $result1 = mysqli_query($conn, $sql1);
//$id=$_POST["id"] ;
           
header("location:EditArtifact.php?id='1'" ) ;
            ?>
					<?php
                mysqli_close($conn);
?>