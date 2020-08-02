<?php
	staffCheckHk(8);
?>
<meta charset="utf-8">
<link type="text/css" href="/templates/fubbo/css/style.css" rel="stylesheet">
<script type="text/javascript">
// In this exemple we refresh API every 5 secondes, we can edit this by changing "5000" just below.
    update();
    setInterval(function (){
        update();
    }, 5000);
    function update(){
        var xhr = new XMLHttpRequest()
            xhr.open("GET", "https://radio.habsie.nl/api/nowplaying/1", true)
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
                        $('.nextPlaying').text(data.playing_next.song.text);
                        $('.playlist').text(data.now_playing.playlist);
                        $('.art').html('<img src="' + data.now_playing.song.art + '" width="70px"> ');
                    }
                }
            }
            xhr.send();
    }
</script>
		<div id="header-content">
		<div class="container">
			<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<div class="hotel"></div>
					
					<a href="/" class="btn green big check-in-header">Terug naar Home</a>
				</div>
			</div>
		</div>
	</div>
	<div id="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="navigation">
						<li>
							<a href="/vox_dash">VoxASE<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/vox_ase_overzicht">Collega Overzicht</a></li>
								<li><a href="/vox_ase_alert">Website Alert</a></li>
								<li><a href="/vox_ase_nieuws">Nieuws</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Sollicitaties<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/vox_ase_solli_expert">Expert Sollicitaties</a></li>
								<li><a href="/vox_ase_solli_dj">DJ Sollicitaties</a></li>
								<li><a href="/vox_ase_solli_event">Event Team Sollicitaties</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Gebruikers<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/vox_ase_gebruiker">Gebruiker Wijzigen</a></li>
								<li><a href="/vox_ase_bans">Bans</a></li>
								<li><a href="/vox_ase_vdw"><?= $config['hotelName'] ?> v/d Week</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Logs<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/vox_ase_chatlogs">Chatlogs</a></li>
								<li><a href="/vox_ase_pchatlogs">Privé Vhatlogs</a></li>
								<li><a href="/vox_ase_ruillogs">Ruillogs</a></li>
							</ul>
						</li>
						<li>
							<a href="/vox_ase_filter">Woordfilter</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>