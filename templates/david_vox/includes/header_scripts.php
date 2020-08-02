<?php staffCheck(); ?>
<meta charset="utf-8">
<link type="text/css" href="/templates/david_vox/css/style.css" rel="stylesheet">
<link type="text/css" href="/templates/david_vox/css/settings.css" rel="stylesheet">
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
                        $('.streamer').text('');
                    }else{
                    //If Azuracast is up and running:
                        $('.nowPlaying').text(data.now_playing.song.text);
                        $('.listner').text(data.listeners.current);
                        $('.nextPlaying').text(data.playing_next.song.text);
                        $('.playlist').text(data.now_playing.playlist);
                        $('.streamer').text(data.live.streamer_name);
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
				<div class="col-2">
<?php
if(User::userData('rank') > 2){
  echo '<a href="/adminpan/dash" class="btn red big check-in-header">Housekeeping</a>';
}
?>
				</div>
				<div class="col-2">
<?php
if(User::userData('djteam') > 0){
  echo '<a href="/djpaneel" class="btn red big check-in-header">Radiopaneel</a>';
}
?>
				</div>
				<div class="col-8">
					<div class="hotel"></div>

					<div class="online-count-box"><b><?= Game::usersOnline() ?></b> <?= $config['hotelName'] ?>'s online</div>

					<a href="/hotel" class="btn green big check-in-header" target="_blank">Naar <?= $config['hotelName'] ?></a>
				</div>
			</div>
		</div>
	</div>
	<div id="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<ul class="user-menu">
						<li>
							<a href="/">
								<div class="user-avatar-menu" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look') ?>&head_direction=3&gesture=sml)"></div><?= User::userData('username') ?><span><i class="far fa-angle-down"></i></span>
							</a>

							<ul class="user-subnavi">
								<li><a href="/profiel/<?= User::userData('username') ?>">Mijn Pagina</a></li>
								<li><a href="/instellingen">Instellingen</a></li>
								<li><a href="/uitloggen" class="logout">Afmelden</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-8">
					<ul class="navigation">
						<li>
							<a href="/community">Community<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/news/<?php
									$id = $dbh->prepare("SELECT id FROM cms_news ORDER BY id DESC LIMIT 1");
									$id->execute();
									while ($idoutput = $id->fetch())
									{
									echo''.filter($idoutput["id"]).'';
									} ?>">Laatste Nieuws</a></li>
								<li><a href="/statistieken">Statistieken</a></li>
								<li><a href="/online">Online <?= $config['hotelName'] ?>'s</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Medewerkers<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/management">Management</a></li>
								<li><a href="/developers">Developers</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Teams<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/dj">DJs</a></li>
								<li><a href="/eventteam">Event Team</a></li>
								<li style="margin-top: 18px;"><a href="/spamteam">Spam Team</a></li>
								<li><a href="/pixelaars">Pixelaars</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Winkel<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/winkel">VIP Kopen</a></li>
								<li><a href="/vips">Alle VIPs</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Valuta<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/ruilwaarde">Ruilwaarde</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Radio<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/verzoeklijn">Verzoeklijn</a></li>
								<li><a href="/rooster">Rooster</a></li>
								<li><a href="https://hfm.stackhost.nl" target="_blank">Website <i class="fas fa-external-link-alt"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
<style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>