 


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
                  
$idartwork = $_REQUEST['idartwork'];


                
                        
                            
                       $nameartwork= $_REQUEST['artworkname']; 
                            
                      $decartwork= $_REQUEST['artworkdes']; 
                            
                       $timeartwork= $_REQUEST['artworktime'];
                            
                       $dateartartwork= $_REQUEST['artworkdate']; 
                            

                            
                            $query1 = "UPDATE atwork
SET name = '".$nameartwork."', description = '".$decartwork."' , time = '".$timeartwork."',date = '".$dateartartwork."' 
     
             WHERE id='".$idartwork."';";
        
                $result1 = mysqli_query($conn, $query1);






                           
                            
                            

                            









           
           
header("location:EditArtifact.php?id=".$idartwork) ;
            ?>
            