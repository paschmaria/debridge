const app = {
	loginToggler() {

		var cardBlock = $(".overbox .card-block"),
			subtitle = $(".overbox .sub-title"),
			divider = $(".overbox .divider"),
			title = $(".overbox .title"),
			row = $(".overbox .row");

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

	         	cardBlock.fadeOut(300);
	         	subtitle.fadeOut(300);
	         	divider.fadeOut(300);
	         	title.fadeOut(300);
	         	row.fadeOut(300);

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
	            	"width": "1100px",
	            	"height": "1100px"
	         	});

	         	if (window.innerWidth <= 575) {
	            	$("span:first-child").css({
		         		"top": "5%",
		         		"left": "60%"
		         	});

		         	$(this).animate({
		         		"width": "1400",
		         		"height": "1400"
		         	})

	         	} else if ((window.innerWidth > 575) && (window.innerWidth < 768)) {
	            	$("span:first-child").css({
		         		"top": "13%",
		         		"left": "65%"
		         	});

	         	} else if ((window.innerWidth > 767) && (window.innerWidth < 992)) {
	            	$("span:first-child").css({
		         		"top": "12%",
		         		"left": "66%"
		         	});

	         	} else if ((window.innerWidth > 991) && (window.innerWidth < 1200)) {
	            	$("span:first-child").css({
		         		"top": "12%",
		         		"left": "68%"
		         	});

	         	} else if (window.innerWidth >= 1200) {
	         		$("span:first-child").css({
		         		"top": "10%",
		         		"left": "71%"
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
	},
	productImageUpload(arg) {
		var slots = arg;
		window.URL = window.URL || window.webkitURL;

		let productUploadElem = document.getElementsByClassName("product-img-input"),
			productUploadBtn = document.getElementsByClassName("btn-product-img"),
			productImgWrapper = document.getElementById("product-img-wrapper"),
		    productImgList = document.getElementById("product-imgs");

		productImgWrapper.style.display = "none";

		Array.from(productUploadBtn).forEach( button => {
	      	button.addEventListener('click', (e) => {
	      		Array.from(productUploadElem).some( (input) => {
		      		if (input) {
	      				input.click();
		      			return true;
		      		}
	      		});
	      		e.preventDefault();
	      	}, false);
	    });

		var imageList = [];
		var products;

		Array.from(productUploadElem).forEach( input => {
	      	input.addEventListener('change', () => {
	      		if (slots === 0) {
	      			return;
	      		}
	      		else{
	      			productImgWrapper.style.display = "block";

		      		products = input.files;
		      		imageList.unshift(products)
		      		// console.log(products);
		      		imageHandler(products);
		      		slots--;
		      		console.log(slots);
	      		}
	      		
	      	}, false);
	    });

	    function imageHandler(files) {
    		Array.from(files).forEach( file => {
	    		if ((file.type !== "image/jpeg") && (file.type !== "image/png")) {

	    			return;

	    		} else {

	    			let imageItem = document.createElement("li"),
	    				image = document.createElement("img"),
	    				removeBtn = document.createElement("span");

	    			image.src = window.URL.createObjectURL(file);
			      	image.onload = function() {
	    				// console.log(this);
			        	window.URL.revokeObjectURL(this.src);
			    	}

			    	imageItem.appendChild(removeBtn);
			    	imageItem.appendChild(image);
	    			productImgList.appendChild(imageItem);
	    		}
    	    });

	    	// if (imageList.length > 4) {
    		// 	// alert("Complete");
    		// 	input.style.display ='none';
    		// } 
	    }
	},
	commentHandler: function(){
        
    }
}