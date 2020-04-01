$(document).ready(function() {
         $("#x").mouseover(function() { $("#myForm").slideDown("fast"); });
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         })
   });