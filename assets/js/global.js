
/* Preloader */

$(window).on('load', function() {
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut('slow');
	$('body').delay(350).css({'overflow':'visible'});


	setTimeout(function(){
		$('#habbo').addClass('active');
	}, 1500);

	setTimeout(function(){
		$('#box_1').addClass('active');
	}, 2000);

	setTimeout(function(){
		$('#habbo').addClass('dance');
	}, 3000);

	setTimeout(function(){
		$('#box_1').removeClass('active');
	}, 10000);

	setTimeout(function(){
		$('#box_2').addClass('active');
	}, 11000);

	setTimeout(function(){
		$('#room_2').addClass('active');
	}, 12000);

	setTimeout(function(){
		$('#room_1').removeClass('active');
	}, 12500);

	setTimeout(function(){
		$('#room_3').addClass('active');
	}, 13000);

	setTimeout(function(){
		$('#box_2').removeClass('active');
	}, 19000);

	setTimeout(function(){
		$('#box_3').addClass('active');
	}, 20000);

	setTimeout(function(){
		$('#furni').addClass('active');
	}, 21000);

	setTimeout(function(){
		$('#box_3').removeClass('active');
	}, 28000);

	setTimeout(function(){
		$('#box_4').addClass('active');
	}, 29000);

	setTimeout(function(){
		$('#friends').addClass('active');
	}, 29500);


})





/* Avatar */


function changeAvatar(value, target) {  
	target = $(target);
	if(value.length != 0){
		target.css("background-image", "url(https://www.dayhab.cc/habbo-imaging/avatarimage.php?user=" + value + "&action=sit&direction=2&head_direction=2&img_format=png&gesture=spk&headonly=0&size=b");
	}
	else{
		target.css("background-image", "url(/templates/Nabbo/style/images/ghost.png");  
	}
}




// Forgot password

$('#open_forgot').click(function(){
	$('#forgot_password').addClass('active');
});


$('.close_forgot').click(function(){
	$('#forgot_password').removeClass('active');
});


// Register

$('.signup').click(function(){
	$('#register').addClass('active');
	$('#login').removeClass('active');
});

$('#signup-cancel').click(function(){
	$('#register').removeClass('active');
	$('#login').addClass('active');
});




// Select
(function() {
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el);
	} );
})();




var registerStyle = $(".roundedStyle").children("img").attr("alt");
$(".roundedStyle").click(function() {
    $(".roundedStyle").each(function() {
        $(this).removeClass("styleSelected")
    });
    $(this).addClass("styleSelected");
    registerStyle = $(this).children("img").attr("alt");
});






var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	next_fs.show(); 
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 1 - (1 - now) * 0.2;
			left = (now * 50)+"%";
			opacity = 1 - now;
			current_fs.css({
		'position': 'absolute'
	  });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	previous_fs.show(); 

	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 0.8 + (1 - now) * 0.2;
			left = ((1-now) * 50)+"%";
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})




/* Menu Mobile */
$(".burger").click(function(){
	$(".menu_mobile_content, .burger").toggleClass("active");
});