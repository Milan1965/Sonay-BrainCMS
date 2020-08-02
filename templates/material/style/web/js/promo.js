var currentStory = 1;
var interval = "";

var promo = {
    update: function() {
        var bulletLength = $(".promo-container").length;
        if(bulletLength > 1) {
            var index = currentStory;
            currentStory++;
            index++;
            $("#promo-bullets a").removeClass("active");
            $(".promo-container").fadeOut("slow");
            $("#promo-bullets a:nth-child(" + index + ")").addClass("active");
            index++;
            $(".promo-container:nth-child("+ index+")").fadeIn("slow");
            if(currentStory >= $("#promo-bullets a").size()) {
                currentStory = 0;
            }}
    }, init: function() {
        var bulletLength = $(".promo-container").length;
        $("#promo-bullets").append('<a class="active">0</a>');
        for(i = 1; i < bulletLength; i++) { 
            $('#promo-bullets').append('<a>'+ i+'</a>');
        }
        interval = setInterval("promo.update()", 9000);
        $("#promo-bullets a").click(function(event) {
            if(!$(event.target).hasClass("active")) {
                var index = $("#promo-bullets a").index(this);
                currentStory = index + 1;
                index += 2;
                clearInterval(interval);
                interval = setInterval("promo.update()", 9000);$
                ("#promo-bullets a").removeClass("active");
                $(".promo-container").fadeOut("slow");
                $(event.target).addClass("active");
                $(".promo-container:nth-child(" + index + ")").fadeIn("slow");
                if(currentStory>=$('#promo-bullets a').size()) {
                    currentStory = 0;
                }
            }
        });
    }
};
$(document).ready(function() {
    promo.init();
});