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
?><html>

<head>

    <title>MEDDIO ARTO</title>


    <link rel="stylesheet" type="text/css" href="CSS/visitorDashboardStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script > 

$(document).ready(function() {
         $("#x").mouseover(function() { 
             
             $("#myForm").slideDown("fast");
         
         
         });
    
    $("#x").one("mouseover",function() {
            
                    //for artist, show add artwork + edit account
                    var addArtworkTab = document.createElement("a");
                    addArtworkTab.innerHTML = "<a href='addArtwork.php?id=<?php
echo  $_SESSION['artistid'];
?>'> <div class='ProfileOption' style='color:black;'>&#x1F4A1; &nbsp; Add Artwork</div></a>";
                    $(".ProfileTitle").after(addArtworkTab);

                
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });</script>


    <script>
        $(document).ready(function() {
            $("#myArtworkTab").click(function() {
                $("#myProfile").hide();
                $(".myArtwork").show();

                $("#profilePhotoDiv").animate({
                    borderBottomRightRadius: "0px",
                }, "fast");

                $("#myProfileTab").css("background-color", "lightgray");
                $("#myProfileTab").animate({
                    borderBottomRightRadius: "30px",
                }, "fast");

                $("#myArtworkTab").css("background-color", "white");
                $("#myArtworkTab").animate({
                    borderBottomRightRadius: "0px",
                }, "fast");


                $("#bottomTab").animate({
                    borderTopRightRadius: "30px",
                }, "fast");
            });

            $("#myProfileTab").click(function() {
                $(".myArtwork").hide();
                $("#myProfile").show();


                $("#profilePhotoDiv").animate({
                    borderBottomRightRadius: "30px",
                }, "fast");

                $("#myProfileTab").css("background-color", "white");
                $("#myProfileTab").animate({
                    borderBottomRightRadius: "0px",
                }, "fast");

                $("#myArtworkTab").css("background-color", "lightgrey");
                $("#myArtworkTab").animate({
                    borderBottomRightRadius: "3px",
                }, "fast");


                $("#bottomTab").animate({
                    borderTopRightRadius: "0px",
                }, "fast");

            });








            $(".artworkImage").hover(
                function(e) {

                    $(this).children().show();
                },
                function() {
                    $(".innerTools").hide();
                }
            );


            $(".deleteIcon").click(function() {

                if (confirm("are you sure you want to delete this artwork?")) {
                    $(this).parent().parent().parent().remove();
                    /*here is the php code of deleting artwork from favourite list*/

                  
                    
                    
                    
                }

            });




        });

    </script>
  
</head>



<body>
	
	    <div id="MenuBar">

       
            <?php
                      
                     $IM= $_SESSION['artistimage'];
// Echo session variables that were set on previous page
     print "<a><img src='".$IM."'  class='userProfileIcon' id='x'></a> " ;
?>

        
        
        
        <a href="About-artist.php?id=<?php
echo  $_SESSION['atrtistid'];
?>">
            <p class="menuText">About</p>
        </a>
             
  <a class="active" href="ArtistsDash.php?id=<?php
echo  $_SESSION['artistid'];
?>">
            <p class="menuText">Home</p>
        </a>


        <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>



    <!--pop-up menu of profile image-->

    <nav class="form-popup" id="myForm">


        <p class="ProfileTitle">
            Hello, 
			        <?php
// Echo session variables that were set on previous page
echo  $_SESSION['artistfname'];
?>

        </p>





        <a href="MedioArto.php">
            <div class="ProfileOption">
                &#x1f511; &nbsp;
                Logout
            </div>
        </a>


    </nav>

    <table style="margin-top: 50px; width: 100%; min-height: 770px;  height: 100%; border-collapse:collapse; background-color: white;">

        <tr style="200px;">
            <td style="background-color: white; padding: 0px; width: 300px; min-width: 300px; height: 200px; text-align: center;">
                   <div id="profilePhotoDiv" style="height: 100%; background-color: dodgerblue; border-bottom-right-radius: 30px;">
                   
                    
             <?php  
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " <img src='" . $row[7] . "' style='height: 200px; width: 200px; border-radius: 50%; margin-top:20px; margin-bottom: 20px;'> ";
                        
                    }
                }
                else
                    echo mysqli_error();
            ?>
                    
                    
                    
                    
                </div>

            </td>

            <td rowspan="4" style="vertical-align: top">
                <!--field-->

                <div id="myProfile" ; style="margin-left: 50px; font-family: 'Muli-Reg'; font-size: 20px;">
                    <form>
                        <table>

                            <br><br>
							<tr>
                                <td style="width:130px;">First Name</td>
                                <td><input type="text" name="firstname" placeholder="First Name" maxlength="15" class="InputStyle" id="1" value=" <?php  
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[3] . " ";
                        
                    }
                }
                else
                    echo mysqli_error();
            ?>"></td>

                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" name="lastname" maxlength="15" class="InputStyle" placeholder="Last name" id="2" value=" <?php  
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[4] . " ";
                        
                    }
                }
                else
                    echo mysqli_error();
            ?>"></td>

                            </tr>
                                                  <tr>
                            <td>username</td>
                            <td><input type="text" name="Username" maxlength="15" class="InputStyle" placeholder="Username" id="3" value=" <?php  
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[1] . " ";
                        
                    }
                }
                else
                    echo mysqli_error();
            ?>"></td>

                        </tr>

                        </table>
                    </form>
                </div>

                <div class="myArtwork" ; style="margin-left: 40px; margin-right: 40px; font-family: 'Muli-Reg'; font-size: 20px; display:none;">
                    <!--this is the list of all artist' artworks-->

                    <!--div class="inline" style="width:200px; height:200px; margin: 60px;">
                        <div class="artworkImage" style="height: 180px; width: 180px; border-radius:50%; background-image: url('Images/ArtWorks/6-tin-can-felt-monsters.jpg'); text-align: center; opacity:1; background-size: contain; position: relative; margin: auto;">

                            <div class='innerTools' style='display:none; height: 100%; width: 100%; background: rgba(255, 255, 255, 0.5); border-radius: 50%; '> 
							<a href="EditArtifact.php">
							<img class='editIcon' src='Images/edit.png' style='margin-top: 70px; height: 30px; width: 30px;'>
							</a>&nbsp; &nbsp; 
							<img class='deleteIcon' src='Images/remove.png' style='margin-top: 70px; height: 40px; width: 30px;  '>
							</div>
                        </div>
                    </div-->

         
                <?php 
                    $iddv =$_SESSION['artistid'] ;
                $query1 = "SELECT * FROM atwork where artist_id ='". $iddv ."';";
                $result = mysqli_query($conn, $query1);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "  <form method='post' action='removeArtwork.php' > 


                          <div class='inline' style='width:200px; height:200px; margin: 60px;'>
                        <div class='artworkImage' style='height: 180px; width: 180px; border-radius:50%; background-image: url(". $data[4]."); text-align: center; opacity:1; background-size: contain; position: relative; margin: auto;'>

                            <div class='innerTools' style='display:none; height: 100%; width: 100%; background: rgba(255, 255, 255, 0.5); border-radius: 50%; '>
							<a href='EditArtifact.php?id=".$data[0]."'>
							<img class='editIcon' src='Images/edit.png' style='margin-top: 70px; height: 30px; width: 30px;'></a>
							</div>
							
							
                        </div> 
						<input type=button class='delete' value='delete'>
                    </div>
                    <input type ='hidden'id='idart' name='idart' value='". $data[0]."'>
                       </form> 
                        ";
                     
                    }
                }
                else
					
                  
            ?>
                 							<!--input id='toggle-heart' onChange='this.form.submit()' type='checkbox'> delete-->

                    
                    <script>
        $(document).ready(function() {

            $('.delete').click(function() {
               if( confirm("are you sure you want to delete artwork?"))
			   {
				   this.form.submit();
			   }
                //save changes..
            });
        });
                    </script>

                </div>
            </td>
        </tr>
        <tr style="height: 80px;  vertical-align: middle;">

            <td id="myProfileTab" style="height: 80px; background-color: white; cursor: pointer; vertical-align: middle">
                <div style="height: 100%;  text-align: left; border-style=none; font-family: 'Muli-Reg'; font-size: 25px; display: table-cell;
    vertical-align: middle;">
                    <img src="Images/keycard@3x.png" style="height: 35px; margin: auto; margin-left:30px">

                    &nbsp; My Profile


                </div>
            </td>
        </tr>



        <tr style="height: 80px;">

            <td id="myArtworkTab" style="background-color: white; border-top-right-radius: 30px; background-color: lightgrey; cursor: pointer;">
                <div id="myArtworkTab" style="height: 80px; text-align: left;  border-style=none; font-family: 'Muli-Reg'; font-size: 25px; display: table-cell;
    vertical-align: middle;">
                    <img src="Images/scissors.png" style="height: 35px; margin: auto; margin-left:30px">


                    &nbsp; My Artworks


                </div>
            </td>
        </tr>

        <tr style="height: auto; min-height: 100%; background: white; vertical-align: middle;">
            <td id="bottomTab" style="padding: 0px; background-color: dodgerblue;">
                <div id="bottomTab" style="height:80px; text-align: left;  border-style=none; font-family: 'Muli-Reg'; font-size: 25px; background-color: dodgerblue">



                    &nbsp;


                </div>
            </td>
        </tr>






    </table>



    <div class="footer">

        <div class="footerC brief">
            Medio Arto is a platform for eco-friendly art to share ideas of recycling items that usually reside in the recycling bin.. go and share yours now!
        </div>

        <div class="footerC">
            Contact Us:
            <div class=" footerC col">
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
<?php
                mysqli_close($conn);
?>
