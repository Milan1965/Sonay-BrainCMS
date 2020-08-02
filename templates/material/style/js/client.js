$( ".alert" ).draggable({containment: "window"});

function meMenu() {

	if($('.meMenu').height() > 21) {
		$('.meMenu').animate({height: 21}, 500);
		$('.meMenu').animate({width: 21}, 500);
	} else {
		$('.meMenu').animate({height: 150}, 500);
		$('.meMenu').animate({width: 60}, 500);
	}

};

function alertHide() {

		$('.alert').hide();

};

function alertShow() {

		$('.alert').show();

};