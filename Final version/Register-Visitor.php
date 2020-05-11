
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


function check($v_userName , $v_email){
	global $conn;
	$query="SELECT * FROM visitor WHERE visitorUsername='$v_userName' OR Email='$v_email'";
	$sql1=mysqli_query($conn ,$query);
    $result=mysqli_fetch_assoc($sql1);
	if(!empty($result)) // USER exists as visitor
		return false;
	else{
	$query2="SELECT * FROM artist WHERE ArtistUsername='$v_userName' OR Email='$v_email'";
	$sql2=mysqli_query($conn ,$query2);
    $result2=mysqli_fetch_assoc($sql2);
	if(!empty($result2)) // USER exists as artist
	return false;
	else{
		return true;
	}
}
}	
 
    if(isset($_POST['sub'])){
	$v_firstName=$_POST['firstname'];
	$v_lastName=$_POST['lastname'];
    $v_userName=$_POST['Username'];
	$v_password=$_POST['password'];
    $v_email=$_POST['email'];
    $v_telephone=$_POST['telephone'];
	
	
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
	} }
	

   if(check($v_userName,$v_email)){
    $sql="INSERT INTO visitor(visitorUsername,password,Fname,Lname,profileImage,Email,telephone)VALUES('$v_userName','$v_password','$v_firstName','$v_lastName','$profileImage','$v_email','$v_telephone')";
	$result1=mysqli_query($conn,$sql);
	header("Location: message.html");
	}else
		echo "<script>alert('Username or Email already exist!');</script>";
	    
    }

?> 


<!DOCTYPE html>
<html>

<head>

    <title>Visitor Registeration</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-Guest.css">
    <link rel="stylesheet" type="text/css" href="CSS/RegisterStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                $('.back').show();  //back says that you registered succesfully
				
				
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
                    visitor
                </p>

            </div>

            <div class="BoxStyle" style="text-align: center; height:450px; margin-top: 150px;">


                <form method="post" enctype="multipart/form-data">
                    <!--form of registeration-->
                    <p class="BoxTitle">REGISTER</p>

                    <table>
                        <tr>

                        </tr>

                    </table>
                    <div>


                        <input type="text" name="firstname" placeholder="First Name *" maxlength="15" class="InputStyle" id="1" required>



                        <input type="text" name="lastname" maxlength="15" class="InputStyle" placeholder="Last name *" id="2" required>






                        <input type="text" name="Username" maxlength="15" class="InputStyle" placeholder="Username *" id="3" required>




                        <input type="password" name="password" minlength="8" maxlength="16" class="InputStyle" placeholder="Password *" id="4" required>




                        <input type="email" name="email" class="InputStyle" placeholder="email *" id="5" required>




                        <input type="tel" name="telephone" class="InputStyle" placeholder="Phone Number" id="6" minlength="9" maxlength="9" required>



                        <div class="uploadFile">



                            <div class="uploadAlias" style="text-align: center; display: flex;">

                                <div class="tooltip">Optional: Profile image: </div>

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

               


               

            </div>






        </div>
    </div>

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