

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
    <title> <?php  
            
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "" . $row[3] . "";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?></title>

    <link rel="stylesheet" type="text/css" href="CSS/ArtistStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--javascript of profile pop-up menu-->
</head>

<body>

    <!--Navigation bar-->
   
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

    <!--rgba(91, 146, 229, 1)-->

    <div style="background-color: white; min-width: 100%; height: 250px; text-align: center">


        <!--image of the artwork-->
         <?php  
            
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                          print "<img class='im' src='" . $row[7] . "' style='height: 300px; padding: 30px; width: 300px; margin-top:50px; background-color: white;' >";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?>
        



    </div>

    <div style="border: dashed #73C2FB; border-width: thick; width: auto; min-height: 400px; margin: 30px; border-radius: 40px; text-align: center; border-bottom: none; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; ">
        <p style="margin-top: 150px;  font-family: 'Muli-Reg'; font-size: 50px; text-align: center; width: 100%; color: white;">
            
            
           <?php  
            
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<b>" . $row[3] ." ". $row[4] . "</b>";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?> 
        
        </p>
        <!--artist name-->



        <!--artist breif description-->
        <p style=" font-family: 'Muli-Reg'; font-size: 20px; text-align: center; width: 700px; margin: auto; margin-top: 50px; margin-bottom: 50px; color: white;">
        
          <?php  
            
                $query1 = "SELECT * FROM artist where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<p>" . $row[5] . "  </p>";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?>         
            
        
        
        </p>





    </div>

    <div style="background-color: white; width: 100%; height: auto; min-height: 400px; text-align: center; ">
        <p class="featuredArtTitle">MY ARTWORKS</p><br>




        <!--list of all artworks-->
        
        


        <div style=" width: 100%;">
            
            
         
        <?php
                $query = " SELECT * FROM atwork where artist_id  IN (SELECT id FROM artist where id =". $_GET['id'] .");";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<figure> <a href='Artifact.php?id=" . $data[0] . "'> <img class='featuredImg' src='" . $data[4] . "'> </a></figure> ";
                    }
                }
                else {
                  
                }
            ?>
           
        </div>
       









    </div>










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
