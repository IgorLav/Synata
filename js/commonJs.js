$(document).ready( function(){
  
  //offers blocks tabs  
   $(".section-bottom .icon-wrap").click(function(){
   	   $(".section-bottom div").removeClass('active');
   	   $(this).parent('div').toggleClass('active');

   	   if ($(".mobile").hasClass("active")){
   	   		$(".arr-bottom-section span").removeClass("active");
   	   		$(".mobile-arr").addClass("active");
   	   } 
   	   else if ($(".web-app").hasClass("active")){
   	   		$(".arr-bottom-section span").removeClass("active");
   	   		$(".web-app-arr").addClass("active");
   	   } 
   	   else if ( $(".zend").hasClass("active") ){
   	   		$(".arr-bottom-section span").removeClass("active");
   	   		$(".zendesk-arr").addClass("active");
		}
		else if( $(".service-cloud").hasClass("active") ){
			$(".arr-bottom-section span").removeClass("active");
			$(".service-cloud-arr").addClass("active");
		}
   	});

   //home-header opacity
    $(document).on("scroll", function(){
        var header = $('.home .header');

        if($(window).scrollTop() > 570) {
            header
                .css({'background':'#2f4050'})
        }
        else if($(window).scrollTop() <= 570) {
            header
                .css({'background':'transparent'})
        }
    });
});

