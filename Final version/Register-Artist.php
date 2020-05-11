<?php
$servername = "localhost";
$username = "root";
$password = "";
$name="medioarto";

// Create connection
$conn = new mysqli($servername,$username, "",$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   session_start();
?>

<?php 


function check($a_userName , $a_email){
	global $conn;
	$query="SELECT * FROM artist WHERE artistUsername='$a_userName' OR Email='$a_email'";
	$sql1=mysqli_query($conn ,$query);
    $result=mysqli_fetch_assoc($sql1);
	if(!empty($result)) // USER exists as artist
		return false;
    else{
	$query2="SELECT * FROM visitor WHERE visitorUsername='$a_userName' OR Email='$a_email'";
	$sql2=mysqli_query($conn ,$query2);
    $result2=mysqli_fetch_assoc($sql2);
	if(!empty($result2)) // USER exists as visitor
	return false;
	else{
		return true;
	}
}
}	
 
    if(isset($_POST['sub'])){
	$a_firstName=$_POST['firstname'];
	$a_lastName=$_POST['lastname'];
    $a_userName=$_POST['Username'];
	$a_password=$_POST['password'];
    $a_email=$_POST['email'];
    $a_telephone=$_POST['telephone'];
	
	
  $name = $_FILES['prevArt']['name'];
  $target_dir = "prevWork/";
  $target_file = $target_dir.basename($_FILES["prevArt"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","tiff","png","gif");
    if(in_array(strtolower($imageFileType),$extensions_arr)=== false){
    $errors['extension']="extension not allowed, please choose a JPEG or PNG file.";
      }
    if(empty($errors)){
  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Insert record
    $name_file = $name;
     // Upload file
     move_uploaded_file($_FILES['prevArt']['tmp_name'],$target_dir.$name);
	}
   
   
  $profileImage = $_FILES['profileImage']['name'];
  $target_dir = "profileImage/";
  $target_file = $target_dir.basename($_FILES["profileImage"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","tiff","png","gif");
    if(in_array(strtolower($imageFileType),$extensions_arr)=== false){
    $errors['extension']="extension not allowed, please choose a JPEG or PNG file.";
      }
    if(empty($errors)){
  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Insert record
    $name_file = $profileImage;
     // Upload file
     move_uploaded_file($_FILES['profileImage']['tmp_name'],$target_dir.$profileImage);
	} 
	
   
   
   

   if(check($a_userName,$a_email)){
    $sql="INSERT INTO artist(artistUsername,password,Fname,Lname,previousWork,profileImage,state,Email,telephone)VALUES('$a_userName','$a_password','$a_firstName','$a_lastName','$name','$profileImage','0','$a_email','$a_telephone')";
	$result1=mysqli_query($conn,$sql);
	header("Location: MedioArto.php");
	}else
		echo "<script>alert('Username or Email already exist!');</script>";
    } }}

?> 


<!DOCTYPE html>
<html>

<head>

    <title>Artist Registeration</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-Guest.css">
    <link rel="stylesheet" type="text/css" href="CSS/RegisterStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="JS/FitText.js/jquery.fittext.js"></script>
    <script src="JS/menuBar.js"></script>
    <script src="JS/flip/dist/jquery.flip.js"></script>
    <script src="JS/flip/dist/jquery.flip.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.blockline').show('slide', {
                direction: 'right'
            }, 350);


            //back to log in
            $('.BoxSmall, #done').click(function() {
                $('.blockline').hide('slide', {
                    direction: 'right'
                }, 350, function() {
                    window.location.href = "Login.php";
                });
            });



            $('form').submit(function(/*e*/) { //when form is submitted
               // e.preventDefault();
                $('form').hide();
                $('.back').show(); 



            });





        });

    </script>

</head>

<body>







    <div class="nav">




        <a class="active" href="ChooseRole.php">Register</a>
        <a href="Login.php">Login</a>
        <a href="About-Guest.php">About</a>
        <a href="MedioArto.php">Home</a>

        <img src="Images/Leaves.png" alt="logo" class="logo">
    </div>










    <!--side menu-->
    <div class="skeleton">

        <div class="blockline" style="display: none;">

            <div class="mainTitleDiv">
                <p id="LDSA" style="margin-top: 450px;">
                    artist
                </p>

            </div>

            <div class="BoxStyle" style="text-align: center; height: auto; margin-bottom: 40px;">


                <form id="myform" method="post" enctype="multipart/form-data">

                    <p class="BoxTitle">REGISTER</p>

                    <table>
                        <tr>

                        </tr>

                    </table>
                    <div>

                        <!--form input-->
                        <input type="text" name="firstname" placeholder="First Name *" minlength="2" maxlength="15" class="InputStyle" id="1" required>



                        <input type="text" name="lastname" minlength="2" maxlength="15" class="InputStyle" placeholder="Last name *" id="2" required>






                        <input type="text" name="Username" minlength="4" maxlength="15" class="InputStyle" placeholder="Username *" id="3" required>




                        <input type="password" name="password" minlength="8" maxlength="16" class="InputStyle" placeholder="Password *" id="4" required>




                        <input type="email" name="email" class="InputStyle" placeholder="email *" id="5" required>




                        <input type="tel" name="telephone" class="InputStyle" placeholder="Phone Number" id="6" minlength="9" maxlength="9" required>


                       <div class="uploadFile">



                            <div class="uploadAlias" style="text-align: center; display: flex;">

                                <div class="tooltip">Art portfolio:
                                    <span class="tooltiptext">We'd like to one of your cool previous artworks! upload it here </span>
                                </div>

               <input type="hidden" name="MAX_FILE_SIZE" value="200000" /> 
			   <input type="file" name="prevArt" required >
										   
										   
                            </div> 



                        </div> 
						
						<div class="uploadFile">

                            <div class="uploadAlias" style="text-align: center; display: flex;">

                            <div class="tooltip">Profile image: </div>

               <input type="hidden" name="MAX_FILE_SIZE" value="200000" /> 
			   <input type="file" name="profileImage" required />
										   
										   
                            </div> 

                        </div> 

                    </div>










                    <button type="submit" name="sub" class="ButtonStyle" value="submit">Submit</button>

                    <button type="reset" class="ButtonStyle">Reset</button>



                    <a style="cursor: pointer; color: black">
                        <p class="BoxSmall">Already have an account? Log In</p>
                    </a>

                </form>

                <!--this part is hidden. it appears when registeration is succesful-->
                <div class="back" style="display: none;">
                    <img src="Images/Check.png" style="height: 40px; padding-bottom: 20px; padding-top: 40px;"><br>
                    Nice name! Congrats, you've registered succesfully &#128077; <br>
                    <button class="ButtonStyle" id="done">Back</button>
                </div>

            </div>



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
