
<!DOCTYPE HTML>
<?php
	staffCheck();
	Game::sso('client');	
	Game::homeRoom();	
?>
<html>
<head>
<title>Client</title>
<link rel="icon" href="/web/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="/web/client/css/hotel.css">
<link rel="stylesheet" type="text/css" href="/web/client/css/buttons.css">
<link rel="stylesheet" type="text/css" href="https://www.sunnieday.nl/web-gallery/radio/css/sunnieradio.css">
<script type="text/javascript">
	function toggleFullScreen() {
		if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {
				document.documentElement.requestFullScreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullScreen) {
				document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
			}
		} else {
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			}
		}
	}
	</script>
<script type="text/javascript">
	function resizeClient(){
		var theClient = document.getElementById('client');
		var theWidth = theClient.clientWidth;
		theClient.style.width = "10px";
		theClient.style.width = theWidth + "px";
	}
	</script>
<script src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-2.min.js" data-apikey="87e296599f958b873750b172ccee6bf4"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/assets/js/swfobject.js?"></script>
<script type="text/javascript">
        var flashvars = {
			"connection.info.host":"vul in",
            "connection.info.port":"vul in",
			"client.reload.url":"https://www.habsie.nl/me",
			"client.fatal.error.url":"https://www.habsie.nl/client_error",
			"client.connection.failed.url":"https://www.habsie.nl/client_error",
			"logout.url":"https://www.habsie.nl/logout",
			"logout.disconnect.url":"https://www.habsie.nl/logout",
			"url.prefix":"https://www.habsie.nl",
			"client.starting":"Habsie is aan het laden...",
			"has.identity":"1",
			"client.starting.revolving":"Tijd voor een bakkie!\/Laden van grappige berichtjes...een momentje.\/Sambal bij?\/Volg het gele eendje.\/Tijd is slechts een illusie.\/Zijn we er al?\/Mooi t-shirt heb je aan.\/Kijk links, kijk rechts. Knipper twee keer en...ta da!\/Het ligt niet aan jou, het ligt aan mij\/Ssst! Ik probeer na te denken.\/Laden van het pixel universum!",
			"spaweb":"1",
			"client.notify.cross.domain":"0",
			"client.allow.cross.domain":"1",
			"nux.lobbies.enabled":"true",
			"country_code":"NL",
            "flash.client.origin":"popup",
			"processlog.enabled":"0",
			"sso.ticket":"<?= User::userData('auth_ticket') ?>",
            "account_id":"<?= User::userData('id') ?>",
						"external.texts.txt" : "https://www.habsie.nl/bibliotheek/gamedata/acc_head_U_antenna.txt",
			"external.variables.txt" : "https://www.habsie.nl/bibliotheek/gamedata/acc_head_U_excited.txt",
			"external.override.texts.txt" : "https://www.habsie.nl/bibliotheek/gamedata/override/acc_head_U_happy.txt", 
			"external.override.variables.txt" : "https://www.habsie.nl/bibliotheek/gamedata/override/acc_head_U_angry.txt",
			"avatareditor.promohabbos":"https://www.habsie.nl/web/client/hotlooks.xml",
			"furnidata.load.url" : "https://www.habsie.nl/bibliotheek/gamedata/furnidata.xml",
			"productdata.load.url" : "https://www.habsie.nl/bibliotheek/gamedata/acc_head_U_bobba.txt", 
			"flash.client.url":"https://www.habsie.nl/bibliotheek/gordon/PRODUCTION-201601012205-226667486/",
        };
    </script>
<script type="text/javascript" src="/web/client/js/leetapi.js"></script>
<script type="text/javascript">
        var params = {
            "base" : "https://www.habsie.nl/bibliotheek/gordon/PRODUCTION-201601012205-226667486/",
            "allowScriptAccess" : "always",
            "menu" : "false",
            "wmode": "opaque"
        };
        swfobject.embedSWF('https://www.habsie.nl/bibliotheek/gordon/PRODUCTION-201601012205-226667486/D291220193.swf', 'flash-container', '100%', '100%', '11.1.0', '/web/client/flash/expressInstall.swf', flashvars, params, null, null);
    </script>
<style>body{margin:0;background:#000;color:#7ecaee;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-family:Ubuntu,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:16px;font-variant-ligatures:common-ligatures;line-height:1.4;min-height:100vh;}.client-error{max-width:480px;}.client-error__title{text-align:center;}.client-error__flash{background-image:url('/web/client/flash/flashplayer.png');display:inline-block;height:39px;margin:12px 12px 0;width:158px;}h1,h2,h3,h4,h5,h6{color:#fff;font-family:"Ubuntu Condensed","Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-weight:400;margin:.6em 0;line-height:1.2;}h1,h2,h3,h4,h5{text-transform:uppercase;}p{margin:.75em 0;}a{color:#fff;cursor:pointer;outline:0;text-decoration:none;}</style>
</head>
<body id="client" class="flashclient">
<div id="client-ui">
<div id="flash-wrapper">
<div id="flash-container">
<div id="content" style="width: 400px; margin: 20px auto 0 auto;display: none">


<div class="client-error">
<h1 class="client-error__title" translate="client_error_title">JE HEBT FLASH NODIG OM Habsie TE KUNNEN SPELEN!</h1>
<p translate="CLIENT_ERROR_FLASH">Als je Habsie speelt op de computer, dan moet je 
<a href="http://www.adobe.com/go/getflashplayer" target="_blank">Flash toestaan, installeren, of updaten. </a> 
Klik op <a href="http://www.adobe.com/go/getflashplayer" target="_blank">KLIK HIER</a> om Flash te gebruiken. LET OP: als je computer Flash blokkeert, 
dan moet je de instellingen van je browser veranderen om Flash te deblokkeren en weer Habsie te kunnen spelen.</p>
                            <div class="client-error__downloads">
                                <div style="text-align: center;">
                                    <a href="https://www.adobe.com/go/getflashplayer" target="_blank"><img src="/extra/jzVgNZx.png"></a>
                                </div>
                            </div>
                            <p translate="CLIENT_ERROR_MOBILE">Probeer je Habsie Hotel op een tablet of mobiel te openen? Dit kan met een Flash-browser, zoals 
							<b>Puffin</b><br>Zoek in de App Store of Play Store naar: <b>Puffin</b></p>

</div>
</div>
<script type="text/javascript">
					$('#content').show();
				</script>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="client__buttons" style="margin-top: -12px;">
<div style="display: none">
<audio id="player2" controls autoplay src="https://hfm.stackhost.nl/radio/8000/radio.mp3?1595822432"></audio>
<script>
                var stream = document.getElementById("player2");

                function SetVolumeLower() {
                    stream.volume -= 0.1;
                }

                function SetVolumeHigher() {
                    stream.volume += 0.1;
                }

                function toggleRadio() {
                    if (stream.paused) {
                        $(".play").addClass("pause");
                        stream.load();
                    } else {
                        $(".play").toggleClass("pause");
                        stream.pause();
                    }
                }

                $(document).ready(function () {
                    var autoRadio = false;
                    if(!autoRadio) {
                        stream.pause();
                        $(".play").toggleClass("pause");
                    }
                });
				
				document.getElementById("player2").volume = 0.2;

				function myFunction() {
				  var x = document.getElementById("player2").autoplay;
				  document.getElementById("demo").innerHTML = x;
				}
            </script>
<script type="text/javascript">
// In this exemple we refresh API every 5 secondes, we can edit this by changing "5000" just below.
    update();
    setInterval(function (){
        update();
    }, 5000);
    function update(){
        var xhr = new XMLHttpRequest()
            xhr.open("GET", "https://hfm.stackhost.nl/api/nowplaying/1", true)
            xhr.onreadystatechange = function(channel) {
                if(xhr.readyState == 4) {
                var data = JSON.parse(xhr.responseText)
                var elm  = document.getElementById("info")
                if(data["station"] === null){
                    //If Azuracast is down
                        Console.log('Habsie Radio is offline')
                        $('.nowPlaying').text('');
                        $('.listner').text('');
                        $('.nextPlaying').text('');
                        $('.playlist').text('');
                    }else{
                    //If Azuracast is up and running:
                        $('.nowPlaying').text(data.now_playing.song.text);
                        $('.listner').text(data.listeners.current);
                        $('.nextPlaying').text('Playing Next ' + data.playing_next.song.text);
                        $('.playlist').text('playlist: ' + data.now_playing.playlist);
                        $('.art').html('<img src="' + data.now_playing.song.art + '" width="20px"> ');
                    }
                }
            }
            xhr.send();
    }
    </script>
</div>

<?php
if(User::userData('radio_aan') > 0){
  echo '
<div id="area_player">
<div id="player" class="draggable ui-widget-content ui-draggable" style="left: -0.6875px; position: relative; top: 0px;">
 <div class="player_min">
<div class="guy"></div>
<div class="txt">Radio</div>
<div class="handle ui-draggable-handle"></div>
<div class="open o-c tip" title=""></div>
</div>
<div class="player">
<div class="btn">
<a id="playerButton" data-enable="1">
<div onclick="toggleRadio();" class="play"></div>
</a>
<div class="btn2">
<div class="min" onclick="SetVolumeLower();"></div>
</div>
<div class="btn3">
<div class="plus" onclick="SetVolumeHigher();"></div>
</div>

<div class="close o-c tip" title="Minimaliseren"></div>
<div class="sdverzoek">
<a class="verzoeklijn tip" target="_blank" title="" href="/verzoek">verzoeklijn</a>
<a class="roosterlijn tip" target="_blank" title="" href="/rooster">rooster</a>
</div>
<div class="client__buttons" style="margin-top: 88px;">
<button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="toggleFullScreen()"><i show-if-fullscreen="false" class="client__fullscreen__icon icon icon--fullscreen"></i> <i show-if-fullscreen="" class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></button>
<button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="resizeClient()"><strong>VG</strong></button>
</div>
</div>
<div class="separa"></div>
<div id="load_radio">
<div class="info dj tip" title="">
<span id="locutorver">Habsie Radio</span>
</div>
<div class="info listeners tip" title="">
<span id="unicosver" class="listner"></span>
</div>
<div class="info music tip" title="" style="width: 57%;">
<marquee scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();">
<span id="musica" class="nowPlaying"> </span>
</marquee>
</div>
</div>
<div class="close o-c tip" title="Minimaliseren"></div>
</div>
</div>
</div>
  ';
}
?>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript" src="/radio/htmlplayer.js"></script>
<script type="text/javascript" src="/radio/hotel-min.js"></script>
</body>
</html>


