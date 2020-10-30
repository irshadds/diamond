jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var loader = $('#loader');
    var loader_container = $('#preloader');
    var scroll = $(window).scrollTop();  
    var scrollup = $('.backtotop');
    var menu_toggle = $('.menu-toggle');
    var dropdown_toggle = $('.main-navigation button.dropdown-toggle');
    var nav_menu = $('.main-navigation ul.nav-menu');

/*------------------------------------------------
            PRELOADER
------------------------------------------------*/

    loader_container.delay(1000).fadeOut();
    loader.delay(1000).fadeOut("slow");

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    if( $(window).width() < 767 ) {
        $('#top-bar').click(function(){
            $('#top-bar .wrapper').slideToggle();
            $('#top-bar').toggleClass('top-menu-active');
        });
    }

    menu_toggle.click(function(){
        nav_menu.slideToggle();
       $('.main-navigation').toggleClass('menu-open');
       $('.menu-overlay').toggleClass('active');
    });

    dropdown_toggle.click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.menu-sticky #masthead').addClass('nav-shrink');
        }
        else {
            $('.menu-sticky #masthead').removeClass('nav-shrink');
        }
    });

/*--------------------------------------------------------------
 Keyboard Navigation
----------------------------------------------------------------*/
if( $(window).width() < 1024 ) {
    $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
        if( e.which === 9 ) {
            e.preventDefault();
            $('#masthead').find('.menu-toggle').focus();
        }
    });
}
else {
    $( '#primary-menu li:last-child' ).unbind('keydown');
}

$(window).resize(function() {
    if( $(window).width() < 1024 ) {
        $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });
    }
    else {
        $( '#primary-menu li:last-child' ).unbind('keydown');
    }
});

/*------------------------------------------------
            SLICK SLIDER
------------------------------------------------*/

// $('.featured-slider').slick({
//     responsive: [{
//         breakpoint: 1023,
//             settings: {
//             slidesToShow: 1,
//             arrows: false
//         }
//     }]
// });





// $('.gallery-slider').slick({
//     responsive: [{
//         breakpoint: 1200,
//             settings: {
//             slidesToShow: 2
//         }
//     },
//     {
//         breakpoint: 400,
//         settings: {
//             slidesToShow: 1
//         }
//     }]
// });
// $('#destination-slider .destination-slider-wrapper').slick({
//     responsive: [{
//         breakpoint: 767,
//             settings: {
//             slidesToShow: 1,
//             fade: false,
//             arrows: true,
//             dots: false
//         }
//     }]
// });
// $('.places-slider').slick();
// $('.clients-feedback').slick({
//     responsive: [{
//         breakpoint: 1200,
//             settings: {
//             slidesToShow: 2
//         }
//     },
//     {
//         breakpoint: 992,
//         settings: {
//             slidesToShow: 1,
//             fade: true
//         }
//     }]
// });

// var slideWrapper = $(".featured-slider"),
//     iframes = slideWrapper.find('.embed-player'),
//     lazyImages = slideWrapper.find('.slide-image'),
//     lazyCounter = 0;

// // POST commands to YouTube or Vimeo API
// function postMessageToPlayer(player, command){
//   if (player == null || command == null) return;
//   player.contentWindow.postMessage(JSON.stringify(command), "*");
// }

// // When the slide is changing
// function playPauseVideo(slick, control){
//   var currentSlide, slideType, startTime, player, video;

//   currentSlide = slick.find(".slick-current");
//   slideType = currentSlide.attr("class").split(" ")[1];
//   player = currentSlide.find("iframe").get(0);
//   startTime = currentSlide.data("video-start");

//   if (slideType === "vimeo") {
//     switch (control) {
//       case "play":
//         if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
//           currentSlide.addClass('started');
//           postMessageToPlayer(player, {
//             "method": "setCurrentTime",
//             "value" : startTime
//           });
//         }
//         postMessageToPlayer(player, {
//           "method": "play",
//           "value" : 1
//         });
//         break;
//       case "pause":
//         postMessageToPlayer(player, {
//           "method": "pause",
//           "value": 1
//         });
//         break;
//     }
//   } else if (slideType === "youtube") {
//     switch (control) {
//       case "play":
//         postMessageToPlayer(player, {
//           "event": "command",
//           "func": "mute"
//         });
//         postMessageToPlayer(player, {
//           "event": "command",
//           "func": "playVideo"
//         });
//         break;
//       case "pause":
//         postMessageToPlayer(player, {
//           "event": "command",
//           "func": "pauseVideo"
//         });
//         break;
//     }
//   } else if (slideType === "video") {
//     video = currentSlide.children("video").get(0);
//     if (video != null) {
//       if (control === "play"){
//         video.play();
//       } else {
//         video.pause();
//       }
//     }
//   }
// }

// // Resize player
// function resizePlayer(iframes, ratio) {

//   if (!iframes[0]) return;
//   var win = $(".featured-slider"),
//       width = win.width(),
//       playerWidth,
//       height = win.height(),
//       playerHeight,
//       ratio = ratio || 16/9;

//   iframes.each(function(){
//     var current = $(this);
//     if (width / ratio < height) {
//       playerWidth = Math.ceil(height * ratio);
//       current.width(playerWidth).height(height).css({
//         left: (width - playerWidth) / 2,
//          top: 0
//         });
//     } else {
//       playerHeight = Math.ceil(width / ratio);
//       current.width(width).height(playerHeight).css({
//         left: 0,
//         top: (height - playerHeight) / 2
//       });
//     }
//   });
// }

// // DOM Ready
// $(function() {
//   // Initialize
//   slideWrapper.on("init", function(slick){
//     slick = $(slick.currentTarget);
//     setTimeout(function(){
//       playPauseVideo(slick,"play");
//     }, 1000);
//     resizePlayer(iframes, 16/9);
//     alert("It is here");
//   });
//   slideWrapper.on("beforeChange", function(event, slick) {
//     slick = $(slick.$slider);
//     playPauseVideo(slick,"pause");
//   });
//   slideWrapper.on("afterChange", function(event, slick) {
//     slick = $(slick.$slider);
//     playPauseVideo(slick,"play");
//   });
//   slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
//     lazyCounter++;
//     if (lazyCounter === lazyImages.length){
//       lazyImages.addClass('show');
//       // slideWrapper.slick("slickPlay");
//     }
//   });

//   start the slider
//   slideWrapper.slick({
//     // fade:true,
//     autoplaySpeed:4000,
//     lazyLoad:"progressive",
//     speed:600,
//     arrows:false,
//     dots:true,
//     cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
//   });
// });

// // Resize event
// $(window).on("resize.slickVideoPlayer", function(){  
//   resizePlayer(iframes, 16/9);
// });

/*------------------------------------------------
                TABS
------------------------------------------------*/

$('ul.tabs li').click(function(event) {
    event.preventDefault();
    
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('active');
    $('.tab-content').removeClass('active');

    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
});

/*------------------------------------------------
            POPUP VIDEO
------------------------------------------------*/

    $(".video-link").click(function (event) {
        event.preventDefault();
        $('.popup .widget_media_video').fadeIn();
        $('.video-overlay').addClass('active');
    });

    $(document).click(function (e) {
        var container = $(".video-link,.popup .widget_media_video");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".popup .mejs-controls .mejs-playpause-button.mejs-pause button").trigger("click");
            $('.popup .widget_media_video').fadeOut();
            $('.video-overlay').removeClass('active');            
        }
    });
    
/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});