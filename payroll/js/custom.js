jQuery(document).ready(function($) {
	
	
/*	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});


	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});*/


	
	jQuery("#flexiselDemo1").flexisel({
		visibleItems: 2,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 1
			}, 
			landscape: { 
				changePoint:640,
				visibleItems:2
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});


	// $().UItoTop({ easingType: 'easeOutQuart' });

});