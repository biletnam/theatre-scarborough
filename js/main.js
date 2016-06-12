$(window).on("load", function () {
	var $container = $(".gallery")
	$container.masonry({
		ItemSelector: '.masonry',
		columnWidth: 150,
		transitionDuration: '1s',
		isFitWidth: true
	})
})

$(document).ready(function () {

/*===================================================
	Button to Toggle Vertical Click Nav Bar
===================================================*/
	$(".fa-bars").click(function (e) {
		e.preventDefault();
		var evaluation = $(".main-nav").hasClass("nav-open");
		if (evaluation) {
			$(".main-nav").slideUp();
			$(".main-nav").removeClass("nav-open");
			$("nav").next().css("margin-top", "0px");
		} else {
			$(".main-nav").addClass("nav-open");
			$(".main-nav").slideDown();
			$("nav").next().css("margin-top", "-10px");
		}
	})

/*===================================================
	Vertical Click Nav Bar
===================================================*/

	if ($(window).innerWidth() <= 753) {
		$(".main-nav > li > a").click(function (e) {
			e.preventDefault();
			var evaluation = $(this).next().hasClass("dd_open");
			if (evaluation) {
				$(this).next().slideUp();
				$(this).next().removeClass("dd_open");
				$(this).parent().next().animate({
					"margin-top": "0px"
				}, 500);
			} else {
				$(".dropdown").removeClass("dd_open");
				$(".dropdown").slideUp();
				$(this).next().slideDown();
				$(this).next().addClass("dd_open");
				var accorDion = $(this).next().children();
				var accorDown = accorDion.length;
				$(this).parent().next().animate({
					"margin-top": 38 * accorDown + 4.9 + "px"
				}, 500);
			}
			for (i = 0; i < 5; i++) {
				var marTop = $(".main-nav > li").eq(i).css("margin-top");
				marTop = parseInt(marTop, 10);
				if (marTop > 100) {
					$(".main-nav > li").eq(i).animate({
						"margin-top": "0"
					}, 400)
				}
			}
			if ($(this).parent().parent().parent().next().css("margin-top") == "115.5px") {
				$(this).parent().parent().parent().next().animate({
					"margin-top": "-10px"
				}, 400)
			} else if ($(this).parent().hasClass("gi")) {
				$(this).parent().parent().parent().next().animate({
					"margin-top": 38 * accorDown + 1.5 + "px"
				}, 500)
			}
		})

/*===================================================
	Horizontal Hover Nav Bar
===================================================*/

	} else if ($(window).innerWidth() > 753) {
		var evaluation = $(this).siblings(".dropdown").hasClass("dd_open");
		$("nav").next().css({
			"margin-top": "-10px"
		})
		$(".hoverEvent").hoverIntent(function () {
			$(".dropped").fadeOut();
			if (evaluation) {
				$(this).siblings(".dd_open").slideUp();
				$(this).siblings(".dropdown").removeClass("dd_open");
			} else {
				$(".dropdown").removeClass("dd_open");
				$(".dropdown").slideUp();
				$(this).siblings(".dropdown").slideDown();
				$(".mainBody").animate({
					"margin-top": $(this).siblings(".dropdown").children().css("height")
				}, 500);
				$(this).siblings(".dropdown").addClass("dd_open");
			}
		}, function () {
			$("nav").siblings().hoverIntent(function () {
				$(".dropdown").slideUp();
				$(".dropped").fadeIn();
				$(".mainBody").animate({
					"margin-top": $(".dropped").children().css("height")
				}, 300);
			})
			$(".dropped").siblings("a").hoverIntent(function () {
				$(".dropdown").slideUp();
				$(".dropped").fadeIn();
				$(".mainBody").animate({
					"margin-top": $(".dropped").children().css("height")
				}, 300);
			})
		})
	}

	var source = $(".main-nav > li");
	var length = source.length;
	var target = $(".dropdown");

	if ($(window).innerWidth() > 977) {
		for (i = 0; i < length; i++) {
			var itemNum = target.eq(i).children().length;
			target.eq(i).children().css("width", 100/itemNum + "%");
		}
		var pathName = window.location.pathname.substring(1);
		var pathOrigin = $(".main-nav > li > a");
		var pathStart = pathOrigin.siblings("ul");
		var pathSource = pathStart.children().children();
		for (i = 0; i < pathSource.length; i++) {
			var pathTarget = pathSource.eq(i).parent().parent();
			if (pathName == pathSource.eq(i).attr("href")) {
				pathTarget.css("display", "block");
				pathTarget.css("z-index", "auto");
				var height = pathTarget.css("height");
				$(".main-nav").parent().next().css("margin-top", height);
				pathSource.eq(i).parent().css("text-decoration", "underline");
				pathSource.eq(i).parent().parent().removeClass("dropdown");
				pathSource.eq(i).parent().parent().addClass("dropped");
				pathSource.eq(i).parent().parent().siblings("a").unbind();
			}
		}
	}

/*===================================================
	Random Background
===================================================*/

	var ranDom = Math.floor((Math.random() * 29) + 1);
	$("nav").next().css({
		"background": "url(img/random-backgrounds/bg" + ranDom + ".jpg)",
		"background-size": "contain"
	})

/*===================================================
	Landing Page News Section Responsiveness
===================================================*/

	var reSwitch = $(".replace_two")
	for (i = 0; i < reSwitch.length; i++) {
		var rePlace = reSwitch.eq(i).siblings("div.replace_one");
		if ($(window).innerWidth() < 977) {
			reSwitch.eq(i).insertBefore(rePlace)
		} else if ($(window).innerWidth() >= 977) {
			reSwitch.eq(i).insertAfter(rePlace)
		}
	}

/*===================================================
	Copyright Year
===================================================*/

	var nd = new Date();
	var cy = nd.getFullYear();
	$(".copy-year").html(cy);

/*===================================================
	Plugins
===================================================*/

	if ($(".mainBody").children("div").is("#maps")) {
		var mainMap = new GMaps ({
			div: '#mainMap',
			lat: 43.740141,
			lng: -79.21682,
			zoom: 15,
			scrollwheel: false
		})
		mainMap.addMarker({
			lat: 43.740141,
			lng: -79.21682,
			title: 'Privacy Commissioner',
			infoWindow: {
				content: '<p><b>Scarborough Village Community Centre</b></p>'
			}
		})
	} else if ($(".mainBody").children("div").is("#privacy")) {
		var privMap = new GMaps ({
			div: '#privMap',
			lat: 43.740141,
			lng: -79.21682,
			zoom: 15,
			scrollwheel: false
		})
		privMap.addMarker({
			lat: 43.740141,
			lng: -79.21682,
			title: 'Main Map',
			infoWindow: {
				content: '<p><b>Scarborough Village Community Centre</b></p>'
			}
		})
	} else if ($(".mainBody").children("div").is("#contact")) {
		var tsmap = new GMaps ({
			div: '#tsmap',
			lat: 43.740141,
			lng: -79.21682,
			zoom: 15,
			scrollwheel: false
		})
		tsmap.addMarker({
			lat: 43.740141,
			lng: -79.21682,
			title: 'Theatre Scarborough',
			infoWindow: {
				content: '<p><b>Scarborough Village Community Centre</b><br>3600 Kingston Road, Scarborough ON, M1M 1R9</p>'
			}
		})
		var smtmap = new GMaps ({
			div: '#smtmap',
			lat: 43.782420,
			lng: -79.235501,
			zoom: 15,
			scrollwheel: false
		})
		smtmap.addMarker({
			lat: 43.782420,
			lng: -79.235501,
			title: 'Scarborough Music Theatre',
			infoWindow: {
				content: '<p><b>51 Estate Dr</b></p>'
			}
		})
		var spmap = new GMaps ({
			div: '#spmap',
			lat: 43.726533,
			lng: -79.277182,
			zoom: 15,
			scrollwheel: false
		})
		spmap.addMarker({
			lat: 43.726533,
			lng: -79.277182,
			title: 'Scarborough Players',
			infoWindow: {
				content: '<p><b>780 Birchmount Rd</b></p>'
			}
		})
		var stgmap = new GMaps ({
			div: '#stgmap',
			lat: 43.760038,
			lng: -79.225238,
			zoom: 15,
			scrollwheel: false
		})
		stgmap.addMarker({
			lat: 43.760038,
			lng: -79.225238,
			title: 'Scarborough Theatre Guild',
			infoWindow: {
				content: '<p><b>2105 Midland Ave</b></p>'
			}
		})
	}
	var heightSet = $(".contactBody");
	for(i = 0; i < heightSet.length; i++) {
		var newHeight = heightSet.eq(i).css("height");
		$(".contactMaps").eq(i).css("height", newHeight);
	}
	var anchor = $(".gallery > a");
	for (i = 0; i < anchor.length; i++) {
		var src = anchor.eq(i).children().attr("src");
		var alt = anchor.eq(i).children().attr("alt");
		anchor.eq(i).attr("href", src);
		anchor.eq(i).attr("title", alt);
	}
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			preload: [0,2],
			navigateByImgClick: true,
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
			tPrev: 'Previous (Left arrow key)',
			tNext: 'Next (Right arrow key)',
			tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Theatre Scarborough</small>';
			}
		}
	})
})