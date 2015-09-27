$(document).ready( function(){
    
   $(".section-bottom .icon-wrap").click(function(){
   	   $(".section-bottom div").removeClass('active');
   	   $(this).parent('div').toggleClass('active');
   });
});