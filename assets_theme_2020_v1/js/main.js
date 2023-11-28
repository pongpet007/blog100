(function (c) {
	c(".notification-close button").on("click", function () {
		c(".notification-section").slideUp()
	});
	c(".newsletter-close button").on("click", function () {
		c(".newsletter-section").slideUp()
	});
	c("#mobile-menu-active").meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: ".mobile-menu-area .mobile-menu",
	});
	c(".language-click , .icon-cart , .icon-setting").on("click", function () {
		c(this).parent().find(".language-dropdown , .shopping-cart-content , .setting-wrapper").slideToggle("medium")
	});
	c(".slider-active").owlCarousel({
		loop: true,
		nav: false,
		autoplay: false,
		autoplayTimeout: 5000,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".best-selling-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 3,
		margin: 20,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1100: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	c(".best-selling-active-3").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 2,
		margin: 30,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1100: {
				items: 1
			},
			1200: {
				items: 2
			}
		}
	});
	c(".best-selling-active-4").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 2,
		margin: 30,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1100: {
				items: 1
			},
			1200: {
				items: 1
			},
			1500: {
				items: 2
			}
		}
	});
	c(".headphone-slider-active").each(function () {
		var e = c(this).siblings(".product-slider-nav");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			autoplay: true,
			autoplayTimeout: 5000,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			item: 5,
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 5
				},
				1200: {
					items: 5
				}
			}
		})
	});
	c(".sunglass-slider-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
	});
	c(".watch-slider-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 3
			},
			1200: {
				items: 3
			},
			1280: {
				items: 4
			},
			1500: {
				items: 5
			}
		}
	});
	c(".headphone-slider-active-2").each(function () {
		var e = c(this).prev(".product-slider-nav");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			margin: 15,
			autoplay: false,
			autoplayTimeout: 5000,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			item: 2,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 2
				}
			}
		})
	});

	c(".headphone-slider-active-9").each(function () {
		var e = c(this).prev(".product-slider-nav");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			autoplay: false,
			autoplayTimeout: 5000,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			item: 4,
			margin:30,
			responsiveClass:true,
		    responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		})
	});

	c(".featured-product-active").each(function () {
		var e = c(this).prev(".product-slider-nav-2");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			autoplay: false,
			autoplayTimeout: 5000,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			item: 4,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		})
	});
	c(".arrivals-product-active-2").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 2
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
	});
	c(".product-img-slider").slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
	});
	c(".deals-slider-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".latest-products-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2,
				margin: 20,
			},
			992: {
				items: 2,
				margin: 20,
			},
			1200: {
				items: 1
			}
		}
	});
	c(".deals-slider-active-2").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2,
				margin: 20,
			},
			768: {
				items: 2,
				margin: 20,
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".related-product-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".sidebar-blog-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".special-book-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".product-slider-active-2").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".best-selling-active-2").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".featured-book-active").each(function () {
		var e = c(this).prev(".product-slider-nav-2");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			autoplay: false,
			autoplayTimeout: 5000,
			item: 5,
			margin: 10,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 4
				},
				1000: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		})
	});
	c(".bestselling-cycle-active").each(function () {
		var e = c(this).prev(".product-slider-nav");
		c(this).owlCarousel({
			navContainer: e,
			loop: true,
			nav: true,
			autoplay: false,
			autoplayTimeout: 5000,
			item: 4,
			margin: 22,
			navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1000: {
					items: 4
				},
				1200: {
					items: 4
				}
			}
		})
	});
	c(".blog-slider-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 3
			}
		}
	});
	c(".blog-slider-active-2").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		margin: 30,
		item: 2,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	});
	c(".blog-slider-active-watch").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		margin: 30,
		item: 2,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2,
				margin: 30,
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			},
			1200: {
				items: 2
			}
		}
	});
	c(".blog-slider-active-3").owlCarousel({
		loop: false,
		nav: true,
		autoplay: false,
		margin: 30,
		item: 3,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1000: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	c(".blog-slider-active-4").owlCarousel({
		loop: false,
		nav: false,
		autoplay: true,
		margin: 30,
		item: 4,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 2,
				margin: 10,
			},
			1000: {
				items: 4
			}
		}
	});
	c(".blog-slider-active-5").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2,
				margin: 30,
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".brand-logo-active").owlCarousel({
		loop: true,
		nav: false,
		autoplay: false,
		autoplayTimeout: 5000,
		item: 5,
		margin: 100,
		responsive: {
			0: {
				items: 1,
			},
			480: {
				items: 2,
				margin: 30,
			},
			768: {
				items: 4,
				margin: 30,
			},
			992: {
				items: 4,
				margin: 100,
			},
			1200: {
				items: 5
			}
		}
	});
	c(".brand-logo-active-new").owlCarousel({
		loop: true,
		nav: false,
		autoplay: true,
		autoplayTimeout: 5000,
		item: 2,
		margin: 30,
		responsive: {
			0: {
				items: 1,
			},
			480: {
				items: 2,
				margin: 30,
			},
			768: {
				items: 2,
				margin: 30,
			},
			992: {
				items: 2,
				margin: 30,
			},
			1200: {
				items: 2
			}
		}
	});
	c("[data-countdown]").each(function () {
		var f = c(this),
			e = c(this).data("countdown");
		f.countdown(e, function (g) {
			f.html(g.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hour</p></span> <span class="cdown minutes">%M <p>Min</p></span class="cdown second"> <span>%S <p>Sec</p></span>'))
		})
	});
	if (c(".tilter").length > 0) {
		c(".tilter").tilt({
			maxTilt: 40,
			perspective: 800,
			easing: "cubic-bezier(.03,.98,.52,.99)",
			scale: 1,
			speed: 800,
			transition: true,
		})
	}
	c(".testimonial-active").owlCarousel({
		loop: true,
		nav: false,
		autoplay: false,
		autoplayTimeout: 5000,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		item: 1,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	c(".product-details-slider-active").owlCarousel({
		loop: true,
		nav: true,
		autoplay: false,
		autoplayTimeout: 5000,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		item: 3,
		margin: 30,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 3
			},
			1000: {
				items: 3
			}
		}
	});
	c.scrollUp({
		scrollText: '<i class="fa fa-angle-double-up"></i>',
		easingType: "linear",
		scrollSpeed: 900,
		animation: "fade"
	});
	var d = c("#slider-range");
	var a = c("#amount");
	c(function () {
		d.slider({
			range: true,
			min: 0,
			max: 1200,
			values: [300, 800],
			slide: function (e, f) {
				a.val("$" + f.values[0] + " - $" + f.values[1])
			}
		});
		a.val("$" + d.slider("values", 0) + " - $" + d.slider("values", 1))
	});
	c(".product-dec-slider").slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		centerPadding: "60px",
		prevArrow: '<span class="product-dec-icon product-dec-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="product-dec-icon product-dec-next"><i class="fa fa-angle-right"></i></span>',
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 479,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}]
	});
	c(".product-dec-slider-2").slick({
		infinite: true,
		slidesToShow: 3,
		vertical: true,
		slidesToScroll: 1,
		centerPadding: "60px",
		prevArrow: '<span class="product-dec-icon product-dec-prev"><i class="fa fa-angle-up"></i></span>',
		nextArrow: '<span class="product-dec-icon product-dec-next"><i class="fa fa-angle-down"></i></span>',
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 479,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}]
	});
	c(".zoompro").elevateZoom({
		gallery: "gallery",
		galleryActiveClass: "active",
		zoomWindowWidth: 300,
		zoomWindowHeight: 100,
		scrollZoom: false,
		zoomType: "inner",
		cursor: "crosshair"
	});
	new WOW().init();
	c(".count").counterUp({
		delay: 10,
		time: 1000
	});
	c("#showcat").on("click", function (f) {
		f.preventDefault();
		c("#hidecat").slideToggle(900)
	});
	if (c(window).width() < 992) {
		function b() {
			var e = c(".category-menu");
			e.find("nav.cate-menu-nav .cr-dropdown").find("ul.left-menu").css("display", "none");
			e.find("nav.cate-menu-nav .cr-dropdown ul").slideUp();
			e.find("nav.cate-menu-nav .cr-dropdown a").on("click", function (f) {
				f.preventDefault();
				c(this).parent(".cr-dropdown").children("ul.category-small-device").slideToggle()
			});
			e.find("nav.cate-menu-nav .cr-dropdown ul.category-small-device .cr-sub-dropdown ul").css("display", "none");
			e.find("nav.cate-menu-nav .cr-dropdown ul.category-small-device .cr-sub-dropdown a").on("click", function (f) {
				f.preventDefault();
				c(this).parent(".cr-sub-dropdown").children("ul").slideToggle()
			})
		}
		b()
	}
	c(".video-popup").magnificPopup({
		type: "iframe",
		mainClass: "mfp-fade",
		removalDelay: 160,
		preloader: false,
		zoom: {
			enabled: true,
		}
	});
	c(".img-popup").magnificPopup({
		type: "image",
		gallery: {
			enabled: true
		}
	});
	c(".sidebar-active").stickySidebar({
		topSpacing: 80,
		bottomSpacing: 30,
		minWidth: 767,
	})
})(jQuery);