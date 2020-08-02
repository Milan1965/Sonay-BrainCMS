function velkomstBoks() {

	if($('.velkomstBoks').height() == 280) {
		$('.velkomstBoks').animate({height: 70}, 500);
		document.getElementById("utvid").innerHTML = "Voor jong en oud";
	} else {
		$('.velkomstBoks').animate({height: 280}, 500);
		document.getElementById("utvid").innerHTML = "Een gezellige community";
	}

};

$( "#toppliste a" ).click(function() {
	$('.topplistenavActive').removeClass('topplistenavActive');
	$(this).addClass('topplistenavActive');

	var nyTopp = $(this).attr('rel');

	$( ".elementHolder .leviActive").fadeOut(300, function() {
		$(this).removeClass('leviActive');

		$('#'+nyTopp).fadeIn(300, function() {
			$(this).addClass('leviActive');

		})

	});

});