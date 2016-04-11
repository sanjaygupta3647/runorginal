
$(document).ready(function(e) {
 $('.nav-mobile').click( function(){
	 $('nav').slideToggle(1000);
	 });
		  
	$('.top').click( function(){
	 $('.web-top').slideToggle(1000);
	 });
		  
	  
	 
	 
	$(window).resize(function() {
    /*If browser resized, check width again */
    if ($(window).width() > 992) {
     $('nav').addClass('desk');
    }
    else {$('nav').removeClass('desk');}
 }); 
	 
	 
	$(window).resize(function() {
    /*If browser resized, check width again */
    if ($(window).width() > 975) {
     $('.web-top').addClass('desk');
    }
    else {$('.web-top').removeClass('desk');}
 }); 
	  
	     
});
   
