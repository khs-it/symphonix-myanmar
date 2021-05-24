
// nav
$(document).ready
(function(){
	 $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('nav').addClass('scroll', 2000);
            } else {
                $('nav').removeClass('scroll');
            }
        });
 
       
    });


	$('.fa-bars').click(function(){
		$(this).hide();
		$('.fa-times').show();
	});
	$('.fa-times').hide();
	$('.fa-times').click(function(){
		$(this).hide();
		$('.fa-bars').show();
	})
	// aos
	AOS.init({
	  duration: 1200,
	});

	// tooltip
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	});

	// back top
	
	 $("#back-top").hide();
 
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
 
        // scroll body to 0px on click
        // $('#back-top a').click(function () {
        //     $('body,html').animate({
        //         scrollTop: 0
        //     }, 800);
        //     return false;
        // });
    });



});

// owlcarousel

$(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
            });
        });
 
// end
// 
// course owl-carousel

$(document).ready(function(){
            $('.main-carousel').owlCarousel({
            items:3,
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
            });
        });


// end




