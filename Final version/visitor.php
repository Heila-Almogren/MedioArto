
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


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/VisitorStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

    <script>
        $(document).ready(function() {


            $(".titleDivContainer").show('slide', {
                direction: 'left'
            }, 350, function() {
                $(".sideMenuContainer").show('slide', {
                    direction: 'right'
                }, 350);
            });





            $(".SideMenu").mouseout(function() {



                $(".SideMenu").animate({

                    right: '-350px',
                }, {
                    queue: false,

                }, "100");

                $(".mainTitleDiv").stop().animate({

                    left: '0px',
                }, {
                    queue: false,
                }, "100")
            });




            $(".SideMenu").mouseover(function() {

                $(".mainTitleDiv").stop(true).animate({

                    left: '-100px',
                }, {
                    queue: false,
                }, "50");

                $(".SideMenu").stop(true).animate({

                    right: '-50px',
                }, {
                    queue: false,
                }, "50");







            });

        });


        $(window).scroll(function() {
            $(".SideMenu").stop().animate({

                right: '-350px',
            }, {
                queue: false,
            }, "100")
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
        <a class="active" href="visitor.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">Home</p>
        </a>

        <img href="MedioArto.php" src="Images/Leaves.png" alt="logo" class="logo">
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








    <!--side menu-->

    <div class="blockline">
        <div class="titleDivContainer" style="display: none;">

            <div class="mainTitleDiv">
                <p id="LDSA">
                    Hey&#44;  

   Let's do something arty!
                </p>

            </div>
        </div>
        <div class="sideMenuContainer" style="display: none;">

            <div class="SideMenu" id="SideMenu">







                <table id="innerTable">
                    
                    
                    
                    <tr>
                        <td>
                            <p class="SideMenuTitle">WAHT'S IN YOUR RECYCLE BIN?

                                <p>
                        </td>


                        <td>
                            <form method='post' action='SearchResult.php'>


                                <div class="MenuElements">
                                    <!--here are all the items that are in the database-->
                                    <!--Replace those with the real items-->

                                    <table>

                                        
         <?php
                $query = "SELECT * FROM tool";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<tr> <td> <label class='container'>". $data[1] ." <input value='false' name='".$data[1]."' id='". $data[0]."' onclick='myFunction(". $data[0].")'type='checkbox'>  <span class='checkmark'> </span> </label> </td></tr>  <p id='demo'></p>                          


 ";
                    }
                }
                else {
                    echo "There are no restaurants.";
                   
                }
            ?>       
                                        
                                    </table>

                                </div>
                              

                                <p id="buttons">
                                    <button class="SearchButton" type="submit" formaction="SearchResult.php">Search</button>
                                    &nbsp;
                                    <button class="SearchButton" type="reset">Reset</button>

                                </p>
                            </form>
                        </td>
                    </tr>
                    
                </table>

                          
<script>
function myFunction( id) {
  var x = document.getElementById(id);
  x.setAttribute("value","true") ;
    
}
             




</script>

               





            </div>

        </div>

    </div>



    <div id="featured">
        <p class="featuredArtTitle">FEATURED ARTWORKS</p><br>

<!--
        <figure>
            <img class="featuredImg" src="Images/ArtWorks/6-tin-can-felt-monsters.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/226695.jpeg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/recycle-creative-lamai-tote-bag.jpg_16.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/f1d97862783760aa08c7847204df0940.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/plastic-bottles-recycling-ideas-21.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/decorative painted bottle ideas3 (6).jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/b0870903479cc96cc4e4900d7c0f5a9a.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/playing_card_lamp_shade.png">
        </figure>

-->
        
         
        <?php
                $query = "SELECT id ,image FROM atwork";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<figure>                                              <input type ='hidden'id='idv' name='idv' value=''>
 <a href='Artifact.php?id=" . $data[0] . "'> <img class='featuredImg' src='" . $data[1] . "'> </a></figure> ";
                    }
                }
                else {
                    echo "There are no restaurants.";
                }
            ?>

        
                    <script>
                    
                    
                 
        
                    
                    
                         var sjid="<?php echo $_GET['id'] ?>" ;
                    var ele=document.getElementById("idv") ;
                        ele.setAttribute("value",sjid) ;
                        
                    
                    
                    </script>
                 
                    
        
        
        


        <br>


        <p class="featuredArtTitle">FEATURED ARTISTS</p><br>
        <!--

        <figure>
            <img class="featuredImg" src="Images/Artists/3.jpg">
            <p>Frank Lee</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/5.jpg">
            <p>Harrison Burch</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/8.jpeg">
            <p>Taylor Camacho</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/10.jpg">
            <p>Roger Gomez</p>
        </figure>

-->

        
          <?php
                $query = "SELECT id ,Fname,Lname, profileImage FROM artist";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<figure> <a href='Artist.php?id=". $data[0] ."'> <img class='featuredImg' src='" . $data[3] . "'> <p>". $data[1] ." ". $data[2] ."</p></a></figure> ";
                    }
                }
                else {
                    echo "There are no restaurants.";
                }
            ?>
        



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
<?php
                mysqli_close($conn);
?>
