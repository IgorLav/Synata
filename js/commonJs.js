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

        if($(window).scrollTop() > 580) {
            header
                .css({'background':'#2f4050'})
        }
        else if($(window).scrollTop() <= 580) {
            header
                .css({'background':'transparent'})
        }
    });

    //multiselect with check boxes
    $(".dropdown dt a").on('click', function (event) {
          if(event.preventDefault){
            event.preventDefault();
          }else{
            event.returnValue = false; 
          }
          $(".dropdown dd ul").slideToggle('fast');
      });

      $(".dropdown dd ul li a").on('click', function () {
          if(event.preventDefault){
            event.preventDefault();
          }else{
            event.returnValue = false; 
          }
          $(".dropdown dd ul").hide();
      });

      function getSelectedValue(id) {
           return $("#" + id).find("dt a span.value").html();
      }

      $(document).bind('click', function (e) {
          var $clicked = $(e.target);
          if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
      });


      $('.mutliSelect input[type="checkbox"]').on('click', function () {
        
          var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
              title = $(this).val() + ",";
        
          if ($(this).is(':checked')) {
              var html = '<span title="' + title + '">' + title + '</span>';
              $('.multiSel').append(html);
              $(".hida").hide();
          } 
          else {
              $('span[title="' + title + '"]').remove();
              var ret = $(".hida");
              $('.dropdown dt a').append(ret);
              
          }
      });


});

