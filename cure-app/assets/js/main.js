
$(document).ready( function () {
   "use strict";
 
   


});
//Loading Screen And Remove After Running
$(window).load(function(){
   $(".loading-overflow").fadeOut(7000,
      function()
   {
      $(this).remove()
   });
   //Adjust Height Loading Screen
   $("i").click(function(){
      $(".image-aqua").fadeToggle("slow");
   });

   $("i").click(function(){
      $(".cure-item").fadeToggle("slow")
   });
   /////////////////////////////////////////////////////   مكان  ,,,,  شيلت .category-list
   $("i").click(function(){
      $(".sidebar , , .donation-fixed , .acc-image , .categorey , .setting-donation").fadeToggle("slow")
   });

});