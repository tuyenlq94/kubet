jQuery( function ( $ ) {

	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	function toggleMenu() {
		const nav = document.querySelector( '#site-navigation' );
		if ( !nav ) {
			return;
		}
		const $menu = $( '#site-navigation' );
		const menu = nav.querySelector( 'ul' ),
			button = document.querySelector( '.menu-toggle' );
		button.addEventListener( 'click', () => {
			nav.classList.toggle( 'is-open' );
		} );


	}

	function keepFocusInMenu() {
		document.addEventListener( 'keydown', function ( e ) {
			const nav = document.querySelector( '.nav' );

			if ( !nav || !nav.classList.contains( 'is-open' ) ) {
				return;
			}

			const elements = [ ...nav.querySelectorAll( 'input, a, button' ) ],
				lastEl = elements[ elements.length - 1 ],
				firstEl = elements[ 0 ],
				activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( !shiftKey && tabKey && lastEl === activeEl ) {
				e.preventDefault();
				firstEl.focus();
			}

			if ( shiftKey && tabKey && firstEl === activeEl ) {
				e.preventDefault();
				lastEl.focus();
			}
		} );
	}

	// @link https://www.w3.org/WAI/tutorials/menus/flyout/
	function toggleSubmenu() {
		const nav = document.querySelector( '.nav' );
		if ( !nav ) {
			return;
		}

		const buttons = [ ...nav.querySelectorAll( '.sub-menu-toggle' ) ];

		buttons.forEach( button => {
			button.addEventListener( 'click', e => {
				e.preventDefault();
				const a = button.previousElementSibling, li = a.closest( 'li' );
				if ( li.classList.contains( 'is-open' ) ) {
					button.setAttribute( 'aria-expanded', 'false' );
					a.setAttribute( 'aria-expanded', 'false' );
				} else {
					button.setAttribute( 'aria-expanded', 'true' );
					a.setAttribute( 'aria-expanded', 'true' );
				}
				li.classList.toggle( 'is-open' );
			} );
		} );
	}
	function openSearch() {
		const button = document.querySelector( '.search-open' ),
			input = document.querySelector( '.header-search .search-field' );

		if ( !button ) {
			return;
		}

		button.addEventListener( 'click', e => {
			e.preventDefault();
			document.body.classList.toggle( 'header-search-open' );
			button.setAttribute( 'aria-expanded', 'true' );
			input.focus();
		} );
	}


	let slickSlide = () => {
		$( '.banner' ).slick( {
			slidesToShow: 1,
			dots: false,
			arrows: false,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
		} );

	};
	function maginicpopup() {
		$( '.popup-with-form' ).magnificPopup( {
			type: 'inline',
			preloader: false,
			focus: '#name',
			callbacks: {
				beforeOpen: function () {
					if ( $( window ).width() < 700 ) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
				}
			}
		} );
		$( '.popup-youtube' ).magnificPopup( {
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false
		} );
		$( '.popup-gallery' ).magnificPopup( {
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [ 0, 1 ] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function ( item ) {
					return item.el.attr( 'title' ) + '<small>by Marsel Van Oosten</small>';
				}
			}
		} );
	}

	function counter_number() {
		var a = 0;
		$( window ).scroll( function () {
			var oTop = $( '.khac_biet__wrap' ).offset().top - window.innerHeight;
			if ( a == 0 && $( window ).scrollTop() > oTop ) {
				$( '.count' ).each( function () {
					$( this ).prop( 'Counter', 0 ).animate( {
						Counter: $( this ).text()
					}, {
						duration: 4000,
						easing: 'swing',
						step: function ( now ) {
							$( this ).text( Math.ceil( now ) );
						}
					} );
				} );
				a = 1;
			}
		} );
		// if ( $( 'body' ).hasClass( 'page-template-front-page' ) ) {
		// };
	}
	function scrollMenu() {
		$( window ).scroll( function () {
			if ( $( this ).scrollTop() > 50 ) {
				$( '#masthead' ).addClass( 'mnfixed' );

			} else {
				$( '#masthead' ).removeClass( 'mnfixed' );
			}
		} );
	}

	function scrollToTop() {
		var $window = $( window ),
			$button = $( '.scroll-to-top' );
		$window.scroll( function () {
			$button[ $window.scrollTop() > 100 ? 'removeClass' : 'addClass' ]( 'hidden' );
		} );
		$button.on( 'click', function ( e ) {
			e.preventDefault();
			$( 'body, html' ).animate( {
				scrollTop: 0
			}, 500 );
		} );
	}

	function tab() {
		$( 'ul.tabs li' ).click( function () {
			var tab_id = $( this ).attr( 'data-tab' );

			$( 'ul.tabs li' ).removeClass( 'current' );
			$( '.tab-content' ).removeClass( 'current' );

			$( this ).addClass( 'current' );
			$( "#" + tab_id ).addClass( 'current' );
		} );
	}
	function tab_product() {
		$( 'ul.product-show li' ).click( function () {
			var tab_id = $( this ).attr( 'data-tab' );

			$( 'ul.product-show li' ).removeClass( 'current' );
			$( '.content-product' ).removeClass( 'current' );

			$( this ).addClass( 'current' );
			$( "#" + tab_id ).addClass( 'current' );
		} );
	}

	var wow = new WOW();
	wow.init();

	keepFocusInMenu();
	toggleMenu();
	toggleSubmenu();
	//openSearch();
	scrollToTop();
	slickSlide();
	//maginicpopup();
	tab();
	//counter_number();
	tab_product();
	scrollMenu();
} );
