/**	
	* Template Name: Discover
	* Version: 1.0	
	* Template Scripts
	* Author: Syed Raziul Islam
	
**/


(function ($) {
	"use strict";
    
    /**Accordion js**/
    $(document).ready(function($) {
        $('.accordion-toggle').on('click', function(event){
            event.preventDefault();
            var accordion = $(this);
            var accordionContent = accordion.next('.accordion-content');
            var accordionToggleIcon = $(this).children('.toggle-icon');
            accordion.toggleClass("open");
            accordionContent.slideToggle(250);
            if (accordion.hasClass("open")) {
                accordionToggleIcon.html("<i class='fa fa-minus-circle'></i>");
            } else {
                accordionToggleIcon.html("<i class='fa fa-plus-circle'></i>");
            }
        });
        
        
        /** Owl Carousel Js**/
        $(".discover-slide").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            autoplay: false,
            loop: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            mouseDrag:false,
            touchDrag:false,
        });
        
        /** MagnificPopup **/
        $('.single-project-item a.project-priview').magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }          
        });
        
        $('.video-bg a').magnificPopup({
          type: 'iframe',
          gallery:{
            enabled:true
          }          
        }); 
        
        /** MixItUp JS**/
        $('#project-wrapper').mixItUp();
        
         /** Counter Js **/
    	$('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        
        /** Slicknav **/
        $('.mainmenu').slicknav({
            prependTo: '.responsive-menu'
        });
        
        $(function () {
        $('.map')          
            .gmap3({
                center:[-33.868825, 151.209262],
                zoom:12,
                scrollwheel: false,
                mapTypeId: "shadeOfGrey", // to select it directly
                    mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
                }
            })
            .styledmaptype(
            "shadeOfGrey",
            [
                {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},
                {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},
                {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":17},{"weight":1.2}]},
                {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":20}]},
                {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":21}]},
                {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#BFDEEB"},{"lightness":17}]},
                {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},
                {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#dddddd"},{"lightness":16}]},
                {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":19}]},
                {"featureType":"water","elementType":"geometry","stylers":[{"color":"#f41c54"},{"lightness":17}]}
            ],
                {name: "Shades of Grey"}
            );
        });

    });	   

    jQuery(window).load(function(){
       $(".discover-preloader-wrapper").fadeOut("500")        
    });


}(jQuery));	