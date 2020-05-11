
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
<title>MEDIO ARTO</title>
<link rel="stylesheet" type="text/css" href="CSS/About-Guest.css">
      <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
<body style="background-color: seagreen; min-width: 100; margin: 0;">
    
    
    

    
    <div id="MenuBar">

       
            <?php
                      
                     $IM= $_SESSION['visitorIMAGE'];
// Echo session variables that were set on previous page
     print "<a><img src='".$IM."'  class='userProfileIcon' id='x'></a> " ;
?>
        
        
        
        <a class="active" href="About-Visitor.php?id=<?php
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
    
    
    
    
    
    
    
    
    
       <div class="skeleton" style="
                                    min-width: 100%;
                                    height:550px;
             background-image: url(Images/children.jpg);
background-attachment: fixed;
                                    padding-top: 200px;
                background-size:cover;
                -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,0.9)), to(rgba(0,0,0,0.2)));
             
             ">
<p style="z-index:100;font-family: Muli-Reg; font-size: 30px; color: black; margin-left:100px; width: 400px; border-left: solid black; padding-left: 50px; text-shadow: 2px 2px 10px #fff;
">
            
            
            
            
            "MEDIO ARTO" MEANS "ART OF ENVIRONMENT" IN ESPERANTO.
            </p>
    
    <p style="font-family: Muli-Reg; font-size: 20px; color: black; margin-left:100px; width: 400px; text-shadow: 5px 5px 10px #fff;">
            <br> Art is an essential part of us being humans. In Medio Arto, We thought of a way to express our gratitude to our home nature by making masterpeices made originally from recycled things.
    </p>
    </div>
    
     

    
    
    <div id="teamDiv" style=" height: autopx; padding-bottom: 100px; text-align: center; background-color: white; min-width: 100%; font-family: Muli-Reg; padding-top: 50px;"> 
        <p style="margin: auto; height: 45px; width: 210px; font-size: 25px; text-align: center; border-bottom: solid black;">MEET OUR TEAM</p>
        
        
        <table style="text-align: left; margin:auto; margin-top: 100px;">
            
            
            
            
            
            
            
            
            <tr style="font-size: 20px; padding: 10px; border-left: solid black; margin-top: 200px; margin-bottom: 200px;">
                <td rowspan="2" style="width: 120px;">
                    <img src="Images/heila.png" style="border-radius: 50%; height: 100px; width: 100px;">
                </td>
            <td>
                Heila Almogren &nbsp; 
                </td>
            
            
            </tr>
            
            <tr style="font-size: 15px;">
            <td>
                Heila loves programming, pizza and helicopters.
                
                </td>
            
            
            </tr>
            
            
            
            
            
            <tr style="font-size: 20px; padding: 10px; border-left: solid black; margin-top: 100px; margin-bottom: 100px;">
                <td rowspan="2" style="width: 120px;">
                    <img src="Images/ghaida.png" style="border-radius: 50%; height: 100px; width: 100px;">
                </td>
            <td>
                Ghaida Al-Saif
                </td>
            
            
            </tr>
            
            <tr style="font-size: 15px;">
            <td>
                Heila loves programming, pizza and helicopters.
                </td>
            
            
            </tr>
            
            
            
            
            
            
            
            
            <tr style="font-size: 20px; padding: 10px; border-left: solid black; margin-top: 100px; margin-bottom: 100px;">
                <td rowspan="2" style="width: 120px;">
                    <img src="Images/shahad.png" style="border-radius: 50%; height: 100px; width: 100px;">
                </td>
            <td>
                Shahad Al-Otaibi
                </td>
            
            
            </tr>
            
            <tr style="font-size: 15px;">
            <td>
                Heila loves programming, pizza and helicopters.
                </td>
            
            
            </tr>
            
            
            
            
            
            
            
            
            <tr style="font-size: 20px; padding: 10px; border-left: solid black; margin-top: 100px; margin-bottom: 100px;">
                <td rowspan="2" style="width: 120px;">
                    <img src="Images/maha.png" style="border-radius: 50%; height: 100px; width: 100px;">
                </td>
            <td>
                Maha Al-Yemeni
                </td>
            
            
            </tr>
            
            <tr style="font-size: 15px;">
            <td>
                Heila loves programming, pizza and helicopters.
                </td>
            
            
            </tr>
            
            
            
            
            
            
            
            
            
        
        </table>
        
           <!-- <div class="team">
                <img src="Images/heila.png" style="border-radius: 50%; height: 200px; width: 200px;">
            
                <p style="font-size: 20px;">Heila Al-mogren</p>
                <p style="font-size: 15px;">she loves programming, pizza and helicopters.</p>
                
                
                </div>
        
        
        <div class="team">
                <img src="Images/ghaida.png" style="border-radius: 50%; height: 200px; width: 200px;">
            
                <p style="font-size: 20px;">Ghaida Al-Saif</p>
                <p style="font-size: 15px;">she loves programming, pizza and helicopters.</p>
                
                
                </div>
        
        
        <div class="team">
                <img src="Images/shahad.png" style="border-radius: 50%; height: 200px; width: 200px;">
            
                <p style="font-size: 20px;">Shahad Al-Otaibi</p>
                <p style="font-size: 15px;">she loves programming, pizza and helicopters.</p>
                
                
                </div>
        
        
        <div class="team">
                <img src="Images/maha.png" style="border-radius: 50%; height: 200px; width: 200px;">
            
                <p style="font-size: 20px;">Maha Al-Yemeni</p>
                <p style="font-size: 15px;">she loves programming, pizza and helicopters.</p>
                
                
                </div>-->
        
    
        
       
        
        
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

