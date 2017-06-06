const app = {
	loginToggler() {

	   	$(".alt-2").click(function() {
	      	if (!$(this).hasClass('material-button')) {

	         	$("span:first-child").removeClass('rotate').css({
	         		"top": "42%",
	         		"left": "50%"
	         	});

	         	setTimeout(function() {
	            	$(".overbox").css({
	               		"overflow": "initial"
	            	})
	         	}, 600);

	         	$(this).animate({
	            	"width": "100px",
	            	"height": "100px"
	         	}, 500, function() {
	            	$(".box").removeClass("back");

	            	$(this).removeClass('active');
	         	});

	         	$(".overbox .card-block").fadeOut(300);
	         	$(".overbox .title").fadeOut(300);
	         	$(".overbox .sub-title").fadeOut(300);
	         	$(".overbox .row").fadeOut(300);
	         	$(".overbox .divider").fadeOut(300);

	         	$(".overbox").addClass('scale-overbox');

	         	$(".alt-2").addClass('material-buton');
	      	}

	   	})

	   	$(".material-button").click(function() {

	      	if ($(this).hasClass('material-button')) {
	         	setTimeout(function() {
	            	$(".overbox").css({
	               		"overflow": "hidden"
	            	}).removeClass('scale-overbox');
	            	$(".box").addClass("back");
	         	}, 200);

	         	$(this).addClass('active').animate({
	            	"width": "1050px",
	            	"height": "1050px"
	         	});

            	$("span:first-child").css({
	         		"top": "13%",
	         		"left": "73%"
	         	});

	         	if ((window.innerWidth <= 768) || (window.innerWidth >= 991)) {
	            	$("span:first-child").css({
		         		"top": "10%",
		         		"left": "69%"
		         	});
	         	}

	         	setTimeout(function() {
	            	$("span:first-child").addClass('rotate');

	            	$(".overbox .card-block").fadeIn(300);
		         	$(".overbox .title").fadeIn(300);
		         	$(".overbox .sub-title").fadeIn(300);
		         	$(".overbox .row").fadeIn(300);
		         	$(".overbox .divider").fadeIn(300);

	         	}, 700);

	         	$(this).removeClass('material-button');

	      	}

	      	if ($(".alt-2").hasClass('material-buton')) {
	         	$(".alt-2").removeClass('material-buton');
	         	$(".alt-2").addClass('material-button');
	      	}

	   	});

	   	$(".button").click(function(e) {
	      	var pX = e.pageX,
	         	pY = e.pageY,
	         	oX = parseInt($(this).offset().left),
	         	oY = parseInt($(this).offset().top);

	      	$(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
	      	$('.x-' + oX + '.y-' + oY + '').animate({
	         	"width": "500px",
	         	"height": "500px",
	         	"top": "-250px",
	         	"left": "-250px",

	      	}, 600);
	      	$("button", this).addClass('active');
	   	})

	}
}