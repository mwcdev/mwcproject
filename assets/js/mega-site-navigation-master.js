jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MqL = 1170;
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile - open lateral menu clicking on the menu icon
	$('.mwc-nav-trigger').on('click', function(event){
		event.preventDefault();
		if( $('.mwc-main-content').hasClass('nav-is-visible') ) {
			closeNav();
			$('.mwc-overlay').removeClass('is-visible');
		} else {
			$(this).addClass('nav-is-visible');
			$('.mwc-primary-nav').addClass('nav-is-visible');
			$('.mwc-main-header').addClass('nav-is-visible');
			$('.mwc-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
			toggleSearch('close');
			$('.mwc-overlay').addClass('is-visible');
		}
	});

	//open search form
	$('.mwc-search-trigger').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});

	//close lateral menu on mobile 
	$('.mwc-overlay').on('swiperight', function(){
		if($('.mwc-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.mwc-overlay').removeClass('is-visible');
		}
	});
	$('.nav-on-left .mwc-overlay').on('swipeleft', function(){
		if($('.mwc-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.mwc-overlay').removeClass('is-visible');
		}
	});
	$('.mwc-overlay').on('click', function(){
		closeNav();
		toggleSearch('close')
		$('.mwc-overlay').removeClass('is-visible');
	});


	//prevent default clicking on direct children of .mwc-primary-nav 
	$('.mwc-primary-nav').children('.has-children').children('a').on('click', function(event){
		event.preventDefault();
	});
	//open submenu
	$('.has-children').children('a').on('click', function(event){
		if( !checkWindowWidth() ) event.preventDefault();
		var selected = $(this);
		if( selected.next('ul').hasClass('is-hidden') ) {
			//desktop version only
			selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
			selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
			$('.mwc-overlay').addClass('is-visible');
		} else {
			selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
			$('.mwc-overlay').removeClass('is-visible');
		}
		toggleSearch('close');
	});

	//submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

	function closeNav() {
		$('.mwc-nav-trigger').removeClass('nav-is-visible');
		$('.mwc-main-header').removeClass('nav-is-visible');
		$('.mwc-primary-nav').removeClass('nav-is-visible');
		$('.has-children ul').addClass('is-hidden');
		$('.has-children a').removeClass('selected');
		$('.moves-out').removeClass('moves-out');
		$('.mwc-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$('body').removeClass('overflow-hidden');
		});
	}

	function toggleSearch(type) {
		if(type=="close") {
			//close serach 
			$('.mwc-search').removeClass('is-visible');
			$('.mwc-search-trigger').removeClass('search-is-visible');
			$('.mwc-overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.mwc-search').toggleClass('is-visible');
			$('.mwc-search-trigger').toggleClass('search-is-visible');
			$('.mwc-overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.mwc-search').hasClass('is-visible')) $('.mwc-search').find('input[type="search"]').focus();
			($('.mwc-search').hasClass('is-visible')) ? $('.mwc-overlay').addClass('is-visible') : $('.mwc-overlay').removeClass('is-visible') ;
		}
	}

	function checkWindowWidth() {
		//check window width (scrollbar included)
		var e = window, 
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
			return true;
		} else {
			return false;
		}
	}

	function moveNavigation(){
		var navigation = $('.mwc-nav');
  		var desktop = checkWindowWidth();
        if ( desktop ) {
			navigation.detach();
			navigation.insertBefore('.mwc-logo');
		} else {
			navigation.detach();
			navigation.insertAfter('.mwc-main-content');
		}
	}
});