$( document ).ready(function() {
    console.log( "welcomePage manager 1.2 \nCreated by Zeemeneer" );


    var Loader = $("#loader");
    Loader.animate({'width':'+=50px'});


    $('#next').click(function(){
    	console.log('next');
    	$('#contentLoader').load('welcomeManager/1');
    })

    $('#vorige').click(function(){
    	Loader.animate({'width':'-=50px'});
    	console.log('back');
    })
});