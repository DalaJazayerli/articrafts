
// Js Documents

// Table of contyent
// 1.  vars and inits
// 2.  Inits Menu
// 3.  Init Timer
// 4.  Init Favorite
// 5.  Init Isotope Filtering
// 6.  Init Slider

jQuery(document).ready(function($)
{
	"user strict";
	
	// 1 vars and Inits
	
	var mainSlider = $('.main_slider');
	var hamburger = $('.hamburger_container');
	var menu = $('.hamburger_menu');
	var menuActive = false;
	var hamburgerClose = $('.hamburger_close');
	var fsOverlay = $('.fs_menu_overlay');
	
	initFavorite();
	initIsotopeFiltering();
	initSlider();
	
	
	
	// 3.  Init Timer
	
	// 4.  Init Favorite
	function initFavorite()
	{
		if($('.favorite').length)
		{
			var favs = $('.favorite');
			favs.each(function()
			{
				var fav = $(this);
				var active = false;
				if(fav.hasClass('active'))
				{
					active = true;
				}
				fav.on('click', function()
				{
					if(active)
					{
						fav.removeClass('active');
						active = false;
					}
					else
					{
						fav.addClass('active');
						active = true;
					}
				});
			});
		}
	}
	// 5.  Init Isotope Filtering
	
	function initIsotopeFiltering()
	{
		if($('.grid_sorting_button').length)
		{
			$('.grid_sorting_button').click(function()
			{
				$('.grid_sorting_button.active').removeClass('active');
				$(this).addClass('active');
				
				var selector = $(this).attr('data-filter');
				$('.product-grid').isotope({
					filter: selector,
					animationOptions:{
						duration: 750,
						easing: 'linear',
						queue: false
					}
				});
				return false;
			});
			
		}
	}
	// 6.  Init Slider
	function initSlider()
	{
		if($('.product_slider').length)
		{
			var slider1 = $('.product_slider');
			
			slider1.owlCarousel({
				loop: false,
				dots:false,
				nav: false,
				reponsive:
				{
					0:{items:1},
					480:{items:2},
					768:{items:3},
					991:{items:4},
					1280:{items:5},
					1440:{items:5},
				}
			})
			if($('.product_slider_nav_left').length)
			{
				$('.product_slider_nav_left').on('click',function()
				{
					slider1.trigger('prev.owl.carousel');
				});
			}
			if($('.product_slider_nav_right').length)
			{
				$('.product_slider_nav_right').on('click',function()
				{
					slider1.trigger('next.owl.carousel');
				});
			}
		}
	}
	
	
});

