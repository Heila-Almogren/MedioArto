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
         
                flag1 = true; /*change value of flag2 based on whether he is visitor or artist*/
        
                if(flag1){
                    //for artist, show add artwork + edit account
                    var addArtworkTab = document.createElement("a");
                    addArtworkTab.innerHTML = "<a href='FavouriteList.html'><div class='ProfileOption' style='color:black;'>&#x1F4A1; &nbsp; Add Artwork</div></a>";
                    $(".ProfileTitle").after(addArtworkTab);
                    
                    var editTabA = document.createElement("a");
                    
                    editTabA.innerHTML = "<a href='FavouriteList.html'><div class='ProfileOption edit' style='color:black;'>&#128100; &nbsp; Edit Account</div></a>";
                    
                    $(".ProfileTitle").after(editTabA);
                };
        
        flag2 = true;
        if(flag2){
                    //for visitor, show edit account
                    
                    var editTabV = document.createElement("a");
                    
                    editTabV.innerHTML = "<a href='FavouriteList.html'><div class='ProfileOption edit' style='color:black;'>&#128100; &nbsp; Edit Account</div></a>";
                    
                    $(".ProfileTitle").after(editTabV);
                };
        
        flag3 = true;
        
        if(flag3){
            //for admin, show control panel only
                    var MngTab = document.createElement("a");
                    MngTab.innerHTML = "<a href='FavouriteList.html'><div class='ProfileOption' style='color:black;'>&#9881; &nbsp; Control Panel</div></a>";
                    $(".ProfileTitle").after(MngTab);
                    
                };
        
        
      
        
        
        
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });