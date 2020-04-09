<!DOCTYPE html>
<html> 

  <head>
      
    <title>MEDDIO ARTO</title>
      
      
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
      <link rel="stylesheet" type="text/css" href="CSS/AllArtists.css">
          <link rel="stylesheet" type="text/css" href="CSS/footer.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/menuBar.js"></script>
            <script>
          window.onload = function(){
        var x = document.querySelectorAll(".featuredImg").length;


    document.getElementById("total").innerText = "TOTAL: " + x + " RESULTS";

};
          
      
      </script>
      
  </head>

    
    
  <body>
    <div id="MenuBar">

      <a>
        <img src="Images/Neutral-placeholder-profile.jpg" class="userProfileIcon" id="x"></a>

      <a href="About-Visitor.html">
        <p class="menuText">About</p>
      </a>
      <a href="AllArtists.html">
        <p class="menuText">Artists</p>
      </a>
      <a class="active" href="AllArtworks.html">
        <p class="menuText">Artifacts</p>
      </a>
      <a href="visiterPage.html">
        <p class="menuText">Home</p>
      </a>

      <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>



    <!--pop-up menu of profile image-->

   <nav class="form-popup" id="myForm">
      

        <p class="ProfileTitle">
          Hello, Sara! 
            
          </p>






        <a href="MedioArto.html">
          <div class="ProfileOption">
            &#x1f511; &nbsp;
            Logout
          </div>
        </a>

     
    </nav>

     
      
      <p class="featuredArtTitle">ALL ARTWORKS</p><br>
       <div style="margin: auto; text-align: center;">
      
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
           <img class="featuredImg" src="Images/ArtWorks/recycle-creative-lamai-tote-bag.jpg_16.jpg">
       </figure>
       
       <figure>
           <img class="featuredImg" src="Images/ArtWorks/f1d97862783760aa08c7847204df0940.jpg">
       </figure>
        
        <figure>
           <img class="featuredImg" src="Images/ArtWorks/f1d97862783760aa08c7847204df0940.jpg">
       </figure>
           <figure>
           <img class="featuredImg" src="Images/ArtWorks/f1d97862783760aa08c7847204df0940.jpg">
       </figure>
           
           
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

