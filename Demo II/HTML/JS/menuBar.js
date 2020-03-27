$(document).ready(function() {
         $("#x").mouseover(function() { $("#myForm").slideDown("fast"); });
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         })
   });



$(document).ready(function()
{
   $("#panel").hide();

   $('.login').toggle(
   function()
   {
      $('#panel').animate({
      height: "150", 
      padding:"20px 0",
      backgroundColor:'#000000',
      opacity:.8
}, 500);
   },
   function()
   {
      $('#panel').animate({
      height: "0", 
      padding:"0px 0",
      opacity:.2
      }, 500);
   });
});