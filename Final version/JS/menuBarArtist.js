




$(document).ready(function() {
         $("#x").mouseover(function() { 
             
             $("#myForm").slideDown("fast");
         
         
         });
    
    $("#x").one("mouseover",function() {
            
                    //for artist, show add artwork + edit account
                    var addArtworkTab = document.createElement("a");
                    addArtworkTab.innerHTML = "<a href='addArtwork.php'> <div class='ProfileOption' style='color:black;'>&#x1F4A1; &nbsp; Add Artwork</div></a>";
                    $(".ProfileTitle").after(addArtworkTab);

                
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });