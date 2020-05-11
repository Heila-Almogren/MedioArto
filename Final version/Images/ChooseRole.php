<!DOCTYPE html>
<html>
<head>
<title>MEDIO ARTO</title>
<link rel="stylesheet" type="text/css" href="CSS/Navigation-Guest.css">
    <link rel="stylesheet" type="text/css" href="CSS/ChooseRoleStyle.css">
        <link rel ="stylesheet" type ="text/css" href="CSS/footer.css">



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>


    <script>
        
        
        
                $(document).ready(function(){
            
            $( '.choose' ).show('slide', { direction: 'right' }, 350);
                    
                    $('.r1').click(function(){
                        $( '.choose' ).hide('slide', { direction: 'right' }, 350, function(){
                            window.open("Register-artist.php", "_self");
                        });
                    });
                    
                    
                    
                    $('.r2').click(function(){
                        $( '.choose' ).hide('slide', { direction: 'right' }, 350, function(){
                            window.open("Register-Visitor.php", "_self");
                        });
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
    
       

    <div class="skeleton">
    
        <div class="choose" style="display: none;">
            <fieldset>
                
                <legend><h1>Who is more likely to be you?</h1>
            
            
            </legend>
                
                    <div class="role r1">
                    <img class="roleImg" src="Images/artist.png">
                    <p class="roleTitle">Artist</p>
                    <p class="roleDesc">you have cool craft ideas to share us with!</p>
                </div>
                
                <div class="role verticalLine"></div>
                
                    <div class="role r2">
                <img class="roleImg" src="Images/visitor.png">
                    <p class="roleTitle">Visitor</p>
                    <p class="roleDesc">you are looking for craft ideas to surprise you friends!</p>
                </div>
                
                
                
            </fieldset>
            
    
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
        <a href="#" class="fa fa-youtube"></a>     &nbsp;
        <a href="#" class="fa fa-instagram"></a> 
            </div>
            
            </div>
        
        
        </div>
        
        
        
        
        
        </div>
    

</body>
