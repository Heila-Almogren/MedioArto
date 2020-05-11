
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
      
      
    <link rel="stylesheet" type="text/css" href="./CSS/Navigation-visitor.css">
      <link rel="stylesheet" type="text/css" href="./CSS/AllArtists.css">
          <link rel="stylesheet" type="text/css" href="./CSS/footer.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      
      <script>
          window.onload = function(){
        var x = document.querySelectorAll('figure').length;


    document.getElementById("total").innerText = "TOTAL: " + x + " RESULTS";

};
          
      
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
        <a class="active" href="AllArtists.php?id=<?php
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

     
      
      <p class="featuredArtTitle">ALL ARTISTS</p><br>
       <div id="featured" style="margin: auto; text-align: center;">
          
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
                    echo "There are no artist.";
                     
                }
            ?>

           
      </div>
       

      
      <p id="total" style="font-size: 15px; font-family: 'Muli-Reg';  width: 90%; margin: auto; margin-bottom: 100px; text-align: center;border-top: solid lightgrey; padding: 40px;">TOTAL: 0 RESULTS</p>




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
        <a href="#" class="fa fa-youtube"></a>     &nbsp;
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

