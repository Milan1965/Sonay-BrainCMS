<?php
	staffCheckHk(8);
?>
<?php// if(@fsockopen($_SERVER['HTTP_CF_CONNECTING_IP'], 80, $errstr, $errno, 1))
//die("Proxy access not allowed"); ?>
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
                        $('.nextPlaying').text(data.playing_next.song.text);
                        $('.playlist').text(data.now_playing.playlist);
                        $('.art').html('<img src="' + data.now_playing.song.art + '" width="70px"> ');
                    }
                }
            }
            xhr.send();
    }
</script>
<style>


input[type=text], input[type=email], input[type=password] {
  background: #fff;
  width: 100%;
  padding: 12px;
  border-radius: 5px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  outline: none;
  font: 600 13px "Poppins", "Roboto", sans-serif;
  color: rgba(66, 66, 81, 0.7);
  margin: 5px 0 10px 0;
}

input[type=text]::-webkit-input-placeholder, input[type=email]::-webkit-input-placeholder, input[type=password]::-webkit-input-placeholder {
  font: 600 13px "Poppins", "Roboto", sans-serif;
  color: rgba(66, 66, 81, 0.5);
}

input[type=text]:-ms-input-placeholder, input[type=email]:-ms-input-placeholder, input[type=password]:-ms-input-placeholder {
  font: 600 13px "Poppins", "Roboto", sans-serif;
  color: rgba(66, 66, 81, 0.5);
}

input[type=text]::-ms-input-placeholder, input[type=email]::-ms-input-placeholder, input[type=password]::-ms-input-placeholder {
  font: 600 13px "Poppins", "Roboto", sans-serif;
  color: rgba(66, 66, 81, 0.5);
}

input[type=text]::placeholder, input[type=email]::placeholder, input[type=password]::placeholder {
  font: 600 13px "Poppins", "Roboto", sans-serif;
  color: rgba(66, 66, 81, 0.5);
}
</style>
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
							<a href="/adminpan/dash">VoxASE<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
							<?php
							if (User::userData('rank') > '1')
							{
								echo'	
								<li><a href="/adminpan/overzicht">Collega Overzicht</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '9')
							{
								echo'	
								<li><a href="/adminpan/alert">Website Alert</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '7')
							{
								echo'	
								<li><a href="/adminpan/news">Nieuws</a></li>
								';
							}
							?>
							</ul>
						</li>
						<li>
							<?php
							if (User::userData('rank') > '6')
							{
								echo'	
								<a href="#">Sollicitaties<span><i class="far fa-angle-down"></i></span></a>
								';
							}
							?>

							<ul class="subnavi">
							<?php
							if (User::userData('rank') > '6')
							{
								echo'	
								<li><a href="/adminpan/expert_sollicitatie">Expert Sollicitaties</a></li>
								<li><a href="/adminpan/event_sollicitatie">Event Team Sollicitaties</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '9')
							{
								echo'	
								<li><a href="/adminpan/dj_sollicitatie">DJ Sollicitaties</a></li>
								';
							}
							?>
							</ul>
						</li>
						<li>
							<?php
							if (User::userData('rank') > '4')
							{
								echo'	
								<a href="#">Gebruikers<span><i class="far fa-angle-down"></i></span></a>
								';
							}
							?>

							<ul class="subnavi">
							<?php
							if (User::userData('rank') > '9')
							{
								echo'	
								<li><a href="/adminpan/zoekgebruiker">Gebruiker Wijzigen</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '4')
							{
								echo'	
								<li><a href="/adminpan/bans">Bans</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '9')
							{
								echo'	
								<li><a href="/adminpan/userofteweek">Speler v/d Week</a></li>
								';
							}
							?>
							</ul>
						</li>
						<li>
							<?php
							if (User::userData('rank') > '4')
							{
								echo'	
								<a href="#">Logs<span><i class="far fa-angle-down"></i></span></a>
								';
							}
							?>

							<ul class="subnavi">
							<?php
							if (User::userData('rank') > '5')
							{
								echo'	
								<li><a href="/adminpan/chatlogs">Chatlogs</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '6')
							{
								echo'	
								<li><a href="/adminpan/chatlogs_console">Privé Chatlogs</a></li>
								';
							}
							?>
							<?php
							if (User::userData('rank') > '4')
							{
								echo'	
								<li><a href="/adminpan/tradelogs">Ruillogs</a></li>
								';
							}
							?>
							</ul>
						</li>
						<li>
							<?php
							if (User::userData('rank') > '5')
							{
								echo'	
								<a href="/adminpan/wordfilter">Woordfilter</a>
								';
							}
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>