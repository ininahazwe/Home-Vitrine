$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 30) {
        $("#header").addClass("shadow");
    }
    else {
        $("#header").removeClass("shadow");
    }
}); 

$(document).ready(function(){
    var scrollTop = 0;
    $(window).scroll(function(){
      scrollTop = $(window).scrollTop();
       $('.counter').html(scrollTop);
      
      if (scrollTop > 30) {
        $('ul.menu').addClass('scrolled-nav');
     /*    $('.logo').addClass('scrolled-logo'); */
        $('#donate').addClass('scrolled-donate');
      } else if (scrollTop < 30) {
        $('ul.menu').removeClass('scrolled-nav');
       /*  $('.logo').removeClass('scrolled-logo'); */
        $('#donate').removeClass('scrolled-donate');
      } 
      
    }); 
    
});

jQuery("document").ready(function($){
    var
    logo = jQuery('#logo #logo-img'),
    w = logo.width();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() >= 30) {
            logo.css({
              "width": w/2.5

                     });
        } else{
            logo.css({
              "width": w/1
                     });
        }
    });
});