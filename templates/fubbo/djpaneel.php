<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Radiopaneel</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-7">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#32322e;background-image:url(/templates/david_vox/img/shouts.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Shouts & Requests</font></div>
						<div class="desc"><font color="white">Berichtjes ingezonden door <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<?php
									if(User::userData('djteam') > 0){
										echo'
						Helaas is er momenteel een foutje in het Shouts & Requests systeem, daarom dien je naar <a href="https://habsiefm.insidehost.nl/verzoeklijn/admin/forms/submissions.php" target="_blank">HabsieFM/verzoeklijn</a> te gaan om de Shouts & Requests te lezen.
									';
									}
								?>
					</div>
				</div>
        </div>
        <div class="col-5">
				<div id="content-box" style="min-height:400px">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/informatie.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Radio Statistieken</font></div>
						<div class="desc"><font color="white">Statistieken van <?= $config['hotelName'] ?>Radio</font></div>
					</div>
					<div class="png20">
	<b>Luisteraars</b><br>
	Er zijn momenteel <b class="listner"></b> luisteraars.
	<p><b>Track</b><br>
	Het nummer <b class="nowPlaying"></b> wordt nu afgespeeld.</p>
	<p><b>Volgend nummer</b><br>
	Zometeen wordt <b class="nextPlaying"></b> afgespeeld.</p>
	<p><b>Coverart</b><br>
	<b class="art"></b></p>
					</div>
				</div>
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/gegevens.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Stream Informatie</font></div>
						<div class="desc"><font color="white">Gegevens van <?= $config['hotelName'] ?>Radio</font></div>
					</div>
					<div class="png20">
								<?php
									if(User::userData('djteam') > 0){
										echo'
	<b>IP</b><br>
	<input type="text" size="400" placeholder="176.9.213.53" value= "176.9.213.53" style="width: 100%;" disabled>
	<p><b>Port</b><br>
	<input type="text" size="400" placeholder="8005" value= "8005" style="width: 100%;" disabled></p>
	<p><b>Wachtwoord</b><br>
	<input type="text" size="400" placeholder="Vraag aan David voor het wachtwoord" value= "Vraag aan David voor het wachtwoord" style="width: 100%;" disabled></p>
	<p><b>Kwaliteit</b><br>
	<input type="text" size="400" placeholder="320kb/s - 44,1kHz" value= "320kb/s - 44,1kHz" style="width: 100%;" disabled></p>
									';
									}
								?>
					</div>
				</div>
		</div>
<?php
include "includes/footer.php"
?>
        </div>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>