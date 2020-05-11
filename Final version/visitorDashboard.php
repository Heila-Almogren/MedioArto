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




<!DOCTYPE html>
<html>

<head>

    <title>MEDDIO ARTO</title>


    <link rel="stylesheet" type="text/css" href="CSS/visitorDashboardStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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




            $(".editIcon").click(function() {
                window.open("About-Guest.html")
            });
        });

    </script>

</head>



<body>

 
    <div id="MenuBar">

        
            <?php
                      
                     $IM= $_SESSION['visitorIMAGE'];
// Echo session variables that were set on previous page
     print "<a><img src='".$IM."'  class='userProfileIcon' id='x'></a> " ;
?>

        
        
        
        <a href="About-Visitor.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">About</p>
        </a>
        <a href="AllArtists.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">Artists</p>
        </a>
        <a href="AllArtworks.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">Artifacts </p>
        </a>
        <a  href="visitor.php?id=<?php
echo  $_SESSION['visitorid'];
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
echo  $_SESSION['visitorfname'];
?>
            
            
        </p>

        
        <script>
        $(document).ready(function() {
         $("#x").mouseover(function() { 
             
             $("#myForm").slideDown("fast");
         
         
         });
    
    $("#x").one("mouseover",function() {
             
             /*
             
             flag 1 --> artists
             flag 2 --> visitor
             flag 3 -- > admin
             links i used here are kharbota.. make valid php links, thanks
             */
         
               
        
        flag2 = true;
        if(flag2){
                    //for visitor, show edit account
                    
                    var editTabV = document.createElement("a");
                    
                    editTabV.innerHTML = "<a href='visitorDashboard.php?id=<?php
echo  $_SESSION['visitorid'];
?>'><div class='ProfileOption edit' style='color:black;'>&#128100; &nbsp; View Account</div></a>";
                    
                    $(".ProfileTitle").after(editTabV);
                };
        
        
      
        
        
        
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });
        
        
        
        
        </script>

        




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
                $query1 = "SELECT * FROM visitor where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " <img src='" . $row[5] . "' style='height: 200px; width: 200px; border-radius: 50%; margin-top:20px; margin-bottom: 20px;'> ";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?>
                    
                    
                    
                </div>


            </td>

            <td rowspan="4" style="vertical-align: top">
                <!--field-->

                <div id="myProfile" ; style="margin-left: 50px; font-family: 'Muli-Reg'; font-size: 20px;">

                    <table>

                       


                        <tr>
                               <tr>
                            <td>Frist Name</td>
                            <td><input type="text" name="lastname" maxlength="15" class="InputStyle" placeholder="Last name" id="2" value=" <?php  
                $query1 = "SELECT * FROM visitor where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[3] . " ";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?>"></td>

                        </tr>

                        
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lastname" maxlength="15" class="InputStyle" placeholder="Last name" id="2" value=" <?php  
                $query1 = "SELECT * FROM visitor where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[4] . " ";
                        
                    }
                }
                else
                    echo "There are no visitor.";
            ?>"></td>

                        </tr>
                        <tr>
                            <td>username</td>
                            <td><input type="text" name="Username" maxlength="15" class="InputStyle" placeholder="Username" id="3" value=" <?php  
                $query1 = "SELECT * FROM visitor where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " " . $row[1] . " ";
                        
                    }
                }
                else
                                       echo "There are no visitor.";

            ?>"></td>

                        </tr>



                        <tr>
                            <td></td>
                            <td style="text-align: center;">
                                
                            </td>
                        </tr>

                    </table>

                </div>
                <div class="myArtwork" ; style="margin-left: 40px; margin-right: 40px; font-family: 'Muli-Reg'; font-size: 20px; display:none;">


                                        
                    
                       <?php  
                $query1 = "SELECT * FROM atwork where id IN (SELECT atwork_id FROM favoriteslist where visitor_id IN (SELECT id FROM visitor where id =". $_GET['id'] ."));";
                $result = mysqli_query($conn, $query1);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "  <form method='post' action='removelike.php' > 


                          <div class='inline' style='text-align: center ;width:200px; height:200px; margin: 60px;'> 
                        <div class='artworkImage' style='height: 180px; width: 180px; border-radius:50%; background-image: url(". $data[4]."); text-align: center; opacity:1; background-size: contain; position: relative; margin: auto;'>

                            <div class='innerTools' style='display:none; height: 100%; width: 100%; background: rgba(255, 255, 255, 0.5); border-radius: 50%; '>  <form method='post' action='removelike.php'><input style='border:none; background: rgba(0,0,0,0);color: white; width: 50px; height: 50px;font-size:50px;' id='delete' value='&#10006;' type='button'>  <input type ='hidden'id='idart' name='idart' value='". $data[0]."'> </form> <img class='deleteIcon' src='Images/heart.png' style='margin-top: 70px; height: 40px; width: 40px;  ' onChange='this.form.submit()' >   </div> 

                                               
                        </div> 
                        
                         
                        <a  href='Artifact.php?id=".$data[0]."'> <br> ". $data[1]."  </a>
                        
                    </div>
                    
                       </form>  
                        
                        ";
                     
                    }  
                }
                else
                  
            ?>
                  
                    <script>
             var sjidd="<?php echo $_GET['id'] ?>" ;
                    var eele=document.getElementById("idartfroo") ;
                        eele.setAttribute("value",sjidd) ;  
                   
    </script>
                    
                    <script>
        $(document).ready(function() {

            $('#delete').click(function() {
                if(confirm("are you sure you want to Dislike?"))
                this.form.submit();
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
                    <img src="Images/heart@3x.png" style="height: 35px; margin: auto; margin-left:30px">


                    &nbsp; My favourites


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


