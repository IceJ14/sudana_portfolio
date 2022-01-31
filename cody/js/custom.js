jQuery(function($) {

	$(document).ready(function(){

		/*FIT VIDEOS STARTS*/
	    jQuery("article").fitVids();
	    /*FIT VIDEOS ENDS*/


	    /*PRETTYPHOTO STARTS*/
	    jQuery("a[class^='prettyPhoto']").prettyPhoto();
	    /*PRETTYPHOTO ENDS*/

        $('.mobile-menu').on('click', function() {
            $('.main-navigation .menu').slideToggle();
        });
        

        // grab the initial top offset of the navigation 
        var stickyNavTop = $('.main-navigation').offset().top;
        
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top
                 
            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            console.log(stickyNavTop);

            var bannerHeight = $('.social-links').outerHeight() + $('.header-container').outerHeight() +  $('.main-navigation').outerHeight();
            if (scrollTop > stickyNavTop +  $('.main-navigation').outerHeight() ) { 
                $('.banner').addClass('sticky');
                $('.banner').stop().animate({'top' : '0px'}, 500);
                $('body').css('padding-top', $('.main-navigation').outerHeight() );
            } else {
                $('.banner').removeClass('sticky'); 
                $('.banner').stop().animate({'top' : '-'+ $('.main-navigation').outerHeight() + 'px'}, 500);
                $('body').css('padding-top', '0');
            }
        };

        stickyNav();
        // and run it again every time you scroll
        $(window).scroll(function() {
            stickyNav();
        });

       
	});

});

