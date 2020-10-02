 

/*********************************************FOR_MENU_ACTIVE_CLASS_START***********************************/
$(document).ready(function() {

 // Get current page URL
 var url = window.location.href;

 // remove # from URL
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

 // remove parameters from URL
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

 // select file name
 url = url.substr(url.lastIndexOf("/") + 1);
 
 // If file name not avilable
 if(url == ''){
 url = 'index.html';
 }
 
 // Loop all menu items
 $('.navbar-nav li').each(function(){

  // select href
  var href = $(this).find('a').attr('href');
 
  // Check filename
  if(url == href){

   // Add active class
   $(this).addClass('active');
  }
 });
});

/*********************************************FOR_MENU_ACTIVE_CLASS_End***********************************/




(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	  }
	  var $subMenu = $(this).next(".dropdown-menu");
	  $subMenu.toggleClass('show');

	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	  });

	  return false;
	});
})(jQuery)





 




/*******************************************FOR_LOGIN_SIGNIN_RESETPASSWORD_START*************************/

// $(function() {
    
//     var $formLogin = $('#login-form');
//     var $formLost = $('#lost-form');
//     var $formRegister = $('#register-form');
//     var $divForms = $('#div-forms');
//     var $modalAnimateTime = 300;
//     var $msgAnimateTime = 150;
//     var $msgShowTime = 2000;

//     $("form").submit(function () {
//         switch(this.id) {
//             case "login-form":
//                 var $lg_username=$('#login_username').val();
//                 var $lg_password=$('#login_password').val();
//                 if ($lg_username == "ERROR") {
//                     msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
//                 } else {
//                     msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
//                 }
//                 return false;
//                 break;
//             case "lost-form":
//                 var $ls_email=$('#lost_email').val();
//                 if ($ls_email == "ERROR") {
//                     msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
//                 } else {
//                     msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
//                 }
//                 return false;
//                 break;
//             case "register-form":
//                 var $rg_username=$('#register_username').val();
//                 var $rg_email=$('#register_email').val();
//                 var $rg_password=$('#register_password').val();
//                 if ($rg_username == "ERROR") {
//                     msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
//                 } else {
//                     msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
//                 }
//                 return false;
//                 break;
//             default:
//                 return false;
//         }
//         return false;
//     });
    
//     $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
//     $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
//     $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
//     $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
//     $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
//     $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
//     function modalAnimate ($oldForm, $newForm) {
//         var $oldH = $oldForm.height();
//         var $newH = $newForm.height();
//         $divForms.css("height",$oldH);
//         $oldForm.fadeToggle($modalAnimateTime, function(){
//             $divForms.animate({height: $newH}, $modalAnimateTime, function(){
//                 $newForm.fadeToggle($modalAnimateTime);
//             });
//         });
//     }
    
//     function msgFade ($msgId, $msgText) {
//         $msgId.fadeOut($msgAnimateTime, function() {
//             $(this).text($msgText).fadeIn($msgAnimateTime);
//         });
//     }
    
//     function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
//         var $msgOld = $divTag.text();
//         msgFade($textTag, $msgText);
//         $divTag.addClass($divClass);
//         $iconTag.removeClass("glyphicon-chevron-right");
//         $iconTag.addClass($iconClass + " " + $divClass);
//         setTimeout(function() {
//             msgFade($textTag, $msgOld);
//             $divTag.removeClass($divClass);
//             $iconTag.addClass("glyphicon-chevron-right");
//             $iconTag.removeClass($iconClass + " " + $divClass);
//   		}, $msgShowTime);
//     }
// });

/*******************************************FOR_LOGIN_SIGNIN_RESETPASSWORD_END*************************/




























/**********************************************************************/
// $(document).ready(function () {
//     $('.navbar-nav li a').click(function(e) {

//         $('.navbar-nav li.active').removeClass('active');

//         var $parent = $(this).parent();
//         $parent.addClass('active');
//         e.preventDefault();
//     });
// });
/****************************************************************************/

/**********************************************GALLERY_LIGHT_BOX_START*****************************/

 $( document ).ready(function() {
  (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();

});


 $( document ).ready(function() {
  (function() {
        var $gallery1 = new SimpleLightbox('.gallery1 a', {});
    })();

});





 $( document ).ready(function() {
  (function() {
        var $gallery2 = new SimpleLightbox('.gallery2 a', {});
    })();

});


  $( document ).ready(function() {
  (function() {
        var $gallery3 = new SimpleLightbox('.gallery3 a', {});
    })();

});



$( document ).ready(function() {
  (function() {
        var $team_box_left_img = new SimpleLightbox('.team_box_left_img a', {});
    })();

});


/**********************************************GALLERY_LIGHT_BOX_END*****************************/
 

/**********************************************TESTIMONIAL_SLIDER_START*****************************/
 $( document ).ready(function() {
 	  	$('.testimonials').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    dots: true,
	    infinite: true,
	   
	    arrows: true,
		infinite: true,
		autoplay: true,
		adaptiveHeight: true,

	});
});
/**********************************************TESTIMONIAL_SLIDER_END*****************************/

/**********************************************COUNTER_SLIDER_START*****************************/
 $( document ).ready(function() {
	$('.counter_slider').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    dots: true,
	    infinite: true,
	   
	    arrows: true,
		infinite: true,
		autoplay: true,
		adaptiveHeight: true,
		  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	      slidesToShow: 3,
	      slidesToScroll: 3,
	      infinite: true,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	      slidesToShow: 2,
	      slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	      slidesToShow: 1,
	      slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	    ]

	});

});

/**********************************************COUNTER_SLIDER_END*****************************/




 /*******************************************************THUM_SLIDER_START***********************/
  $( document ).ready(function() {
	  	if ( $('.product__slider-main').length ) {
	        var $slider = $('.product__slider-main')
	            .on('init', function(slick) {
	                $('.product__slider-main').fadeIn(1000);
	            })
	            .slick({
	                slidesToShow: 1,
	                slidesToScroll: 1,
	                arrows: true,
	                 controlNav: true,
	                autoplay: false,
	                lazyLoad: 'ondemand',
	                autoplaySpeed: 3000,
	                asNavFor: '.product__slider-thmb'
	            });

	    var $slider2 = $('.product__slider-thmb')
	            .on('init', function(slick) {
	                $('.product__slider-thmb').fadeIn(1000);
	            })
	            .slick({
	                slidesToShow: 4,
	                slidesToScroll: 1,
	                lazyLoad: 'ondemand',
	                asNavFor: '.product__slider-main',
	                dots: false,
	                centerMode: false,
	                 controlNav: true,
	                focusOnSelect: true
	            });

	 //remove active class from all thumbnail slides
	 $('.product__slider-thmb .slick-slide').removeClass('slick-active');

	 //set active class to first thumbnail slides
	 $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

	 // On before slide change match active thumbnail to current slide
	 $('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	 	var mySlideNumber = nextSlide;
	 	$('.product__slider-thmb .slick-slide').removeClass('slick-active');
	 	$('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
	});
	  
	  
	  // init slider
	require(['js-sliderWithProgressbar'], function(slider) {

	    $('.product__slider-main').each(function() {

	        me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);

	        // stop slider
	        //me.slider.stop();

	        // start slider
	        //me.slider.start(index);

	        // get reference to slick slider
	        //me.slider.getSlick();

	    });
	});
	  var options = {
	    progressbarSelector    : '.bJS_progressbar'
	    , slideSelector        : '.bJS_slider'
	    , previewSlideSelector : '.bJS_previewSlider'
	    , progressInterval     : ''
	        // add your own progressbar animation function to sync it i.e. with a video
	        // function will be called if the current preview slider item (".b_previewItem") has the data-customprogressbar="true" property set
	    , onCustomProgressbar : function($slide, $progressbar) {}
	}

	    // slick slider options
	    // see: https://kenwheeler.github.io/slick/
	var sliderOptions = {
	    slidesToShow   : 1,
	    slidesToScroll : 1,
	    arrows         : true,
	    fade           : true,
	    controlNav: true,
	    autoplay       : true
	}

	    // slick slider options
	    // see: https://kenwheeler.github.io/slick/
	var previewSliderOptions = {
	    slidesToShow   : 4,
	    slidesToScroll : 1,
	    dots           : true,
	     controlNav: true,
	    focusOnSelect  : true,
	    centerMode     : true
	}
	}
});
 /*******************************************************THUM_SLIDER_END***********************/



/**************************************************FAQ_Accordion_START*****************************/

 const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

/**************************************************FAQ_Accordion_END*****************************/



