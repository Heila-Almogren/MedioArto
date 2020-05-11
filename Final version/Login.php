






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
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
       
      $sql = "SELECT id FROM visitor WHERE visitorUsername = '$myusername' and password = '$mypassword'";
       
       
       
      $result = mysqli_query($conn,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       
         $_SESSION['visitor_user'] = $myusername;

           
                $query1 = "SELECT * FROM visitor where visitorUsername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        $_SESSION['visitorfname'] = $row[3] ;
                        $_SESSION['visitorid'] = $row[0] ;
                                                $_SESSION['visitorIMAGE'] = $row[5] ;

                         /// add more info for visitor
                        //ex     $_SESSION['new name'] = $row[num of the index] ;

                        
                    }
                }
            
                 

            
                $query1 = "SELECT * FROM visitor where visitorUsername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
         header("location: visitor.php?id=". $row[0]);

                        
                    }
                }
               
            
         
      }    else { $sql = "SELECT id FROM artist WHERE artistUsername = '$myusername' and password = '$mypassword'";
       
       
       
      $result = mysqli_query($conn,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
                 
                 if($count == 1) {
       
         $_SESSION['artist_user'] = $myusername;

           
                $query1 = "SELECT * FROM artist where artistUsername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        $_SESSION['artistid'] = $row[0] ;
                                                $_SESSION['artistfname'] = $row[4] ;
                                                                                                $_SESSION['artistimage'] = $row[7] ;

                                                                        $_SESSION['artiststate'] = $row[8] ;


                         /// add more info for artist
                        //ex     $_SESSION['new name'] = $row[num of the index] ;

                        
                    }
                }
            
                     
                 $artiststate = $_SESSION['artiststate']  ;

            if($artiststate==1){
                $query1 = "SELECT * FROM artist where artistUsername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
         header("location: ArtistsDash.php?id=". $row[0]);

                        
                    }
                } }
                     else { if($artiststate==0)
                         echo "<script>alert('waiting for approval!');</script>"; 
                          else
                     echo "<script>alert('Your account has been disapproved!');</script>"; 

                              
                          
                          }
               
          
      }else{   
      $sql = "SELECT id FROM admin WHERE adminusername = '$myusername' and password = '$mypassword'";
       
       
       
      $result = mysqli_query($conn,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
                     
                     if($count == 1) {
       
         $_SESSION['admin_user'] = $myusername;

           
                $query1 = "SELECT * FROM admin where adminusername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        $_SESSION['adminid'] = $row[0] ;
                                                $_SESSION['adminfname'] = $row[1] ;

                         /// add more info for admin
                        //ex     $_SESSION['new name'] = $row[num of the index] ;

                        
                    }
                }
            
                 

            
                $query1 = "SELECT * FROM admin where adminusername ='". $myusername ."';";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
         header("location: AdminDashboard.php?id=". $row[0]);

                        
                    }
                }
          
          
      } else {  
                         

                     
                       
                     echo "
            <script >
                       alert('Your Login Name or Password is invalid!');

            $('#overall').effect('shake');
                        $('#username').css('border-bottom-color', 'red');
            
            </script>
        ";
                         
                         
                     
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                     }
                     
                     
                     
                     
                   
                     
                     
            
          
      }
          
          
      }
   }
?>





<!DOCTYPE html>
<html>

<head>

    <title>Login</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-Guest.css">
    <link rel="stylesheet" type="text/css" href="CSS/LoginStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="JS/FitText.js/jquery.fittext.js"></script>
    <script src="JS/menuBar.js"></script>
    <script src="JS/flip/dist/jquery.flip.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            $('#overall').show('slide', {
                direction: 'right'
            }, 350);




            $('#forgotPasswordButton').click(function() {
                //here verify account
                $('#overall').hide('slide', {
                    direction: 'right'
                }, 350, function() {

                    window.location.href = "ForgotPassword.php";
                });
            });


            $('#registerButton').click(function() {




                $('#overall').hide('slide', {
                    direction: 'right'
                }, 350, function() {

                    window.location.href = "ChooseRole.php";

                });
            });









             /* $('form').submit(function(e) {      
               e.preventDefault();


               $('#loginButtom').click(function() {

                    //here verify account
                    var input = $('#username');
                    var uname = 'hello';        


                    if (input.val() != uname) {     //if the username is not correct
                        $('#overall').effect("shake");
                        $("#username").css("border-bottom-color", "red");

                    } else {
                        $('#overall').hide('slide', {       //if the username is correct
                            direction: 'right'
                        }, 350, function() {

                            $("#username").css("border-bottom-color", "black");
                        });

                        $('.footer').hide('slide', {
                            direction: 'down'
                        }, 350, function() {

                            window.open("visiterPage.html", "_self");       //go to visitor page



                        });
                    }

                }); 
            }); */








        });
    </script>

</head>

<body>





  
<div class="nav">
  
       
           
       
  <a href="ChooseRole.php">Register</a>
  <a class="active" href="Login.php">Login</a>
  <a href="About-Guest.php">About</a>
         <a  href="MedioArto.php">Home</a>

  <img src="Images/Leaves.png" alt="logo" class="logo">
</div>
    





    <!--side menu-->
    <div class="skeleton">

        <div id="overall" style="display: none;">

            <div class="blockline">

                <div class="mainTitleDiv">
                    <p id="LDSA">
                        account
                    </p>

                </div>

                <div class="BoxStyle" style="text-align: center;">


                    <form   method='post' action=""    >
                        <p class="BoxTitle">LOG IN</p>

                        <input type="text" name="username" maxlength="15" class="InputStyle" placeholder="Username" id="username" required>

                        <input type="password" name="password" minlength="8" maxlength="16" class="InputStyle" placeholder="Password" required>



                        <br>




                        <div>

                            <button class="ButtonStyle" id="loginButtom" type="submit">LOGIN</button>
                        </div>
                        <a>
                            <p class="BoxSmall" id="forgotPasswordButton" style="color: black; cursor: pointer;">Forgot Password?</p>
                        </a>
                        <a>
                            <p class="BoxSmall" id="registerButton" style="color: black; cursor: pointer;">Don't have an account? Register Instead</p>
                        </a>
                        
                        

                    </form>



                </div>



            </div>


            <!-- <h2>Horizontal Flip</h2>
	
	<div id="flip-this" class="flip-horizontal"> 
  		<div class="front"> 
<img src="Images/20.jpg" alt="" />  		</div> 
  		<div class="back">
<img src="Images/Artists/2.jpg" alt="" />  		</div> 
	</div>-->



        </div>


    </div>



    <!--

-->
    <div class="footer">

        <div class="footerC brief">
            Medio Arto is a platform for eco-friendly art to share ideas of recycling items that usually reside in the recycling bin.. go and share yours now!
        </div>

        <div class="footerC">
            Contact Us:
            <div class="footerC col">
                email: &nbsp;
                <a href="mailto:info@medioarto.com">info@medioarto.com</a> </div>
            <div class=" footerC col">
                tel: +966563636787</div>


            <div class=" footerC col">
                Address:</div>


            <div class=" footerC col">
                11314 Riyadh, Saudi Arabia</div>
        </div>

        <div class="footerC">
            Find Us on Social Media!


            <div class=" footerC col">
                <div class=" footerC col">
                    <a href="#" class="fa fa-twitter"></a>
                    &nbsp;
                    <a href="#" class="fa fa-facebook"></a>
                    &nbsp;
                    <a href="#" class="fa fa-youtube"></a> &nbsp;
                    <a href="#" class="fa fa-instagram"></a>
                </div>

            </div>


        </div>





    </div>



</body>

</html>