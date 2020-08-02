<html>
<head>
<?php
include "includes/djheader_scripts.php"
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
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Gebruiker</b></td><td><b>Bericht</b></td><td><b>Datum</b></td><td><b>IP</b></td></tr></strong></b>
								<tbody>
								<?php
									if(User::userData('djteam') > 0){
									$getArticles = $dbh->prepare("SELECT * FROM verzoek ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch())
										echo'<tr>
										<td style="width: 20%;">'.$news["username"].'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['experience']).'</td>
										<td style="width: 60%;">'. date('d-m-Y', $news['date']).'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['ip']).'</td>
										
										</tr>';
									}
								?>
							</table>
					</div>
				</div>
        </div>
		<div class="col-4">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#32322e;background-image:url(/templates/david_vox/img/regels.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Verwijderen?</font></div>
						<div class="desc"><font color="white">Alle shouts/Requests verwijderen van <?= $config['hotelName'] ?>'s?</font></div>
					</div>
					<div class="png20">
							<table class="table table-striped table-bordered table-condensed">
								<center
								<tbody>
								<?php
									
										echo'<input type="submit" class="btn red login-button" style="width: " value="Verwijder Alle Shouts/Requests van ' . $config['hotelName']  . '!!!" name="hotelsettings"">';
									
								?>
								<br>
								<br>
								</center>
							</table>
					</div>
				</div>
        </div>
        
				<div class="col-3">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/gegevens.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Radio Instellingen</font></div>
						<div class="desc"><font color="white">Gegevens van <?= $config['hotelName'] ?>Radio</font></div>
					</div>
					<div class="png20">
								<?php
									if(User::userData('djteam') < 0){
										echo ' 
	<b>Radio-IP</b><br>
	<input type="text" size="400" placeholder="Radio-IP" style="width: 100%;" disabled>
	<p><b>Port</b><br>
	<input type="text" size="400" placeholder="Port Wijzigen" style="width: 100%;" require></p>
	<p<b>Verificatie Wachtwoord</b><br>
	<input type="password" size="400" placeholder="Wachtwoord" style="width: 100%;" require></p>
	<p><b>Kwaliteit</b><br>
	<input type="text" size="400" placeholder="320kb/s - 44,1kHz" style="width: 100%;" disabled></p>
	<br>
	<input type="submit" class="submit btn green save" value="Opslaan" name="hotelsettings""';
									}
										else {
										echo'
										<p>Je hebt niet voldoende permissies om instellingen van de radio te wijzigen.</p>';}
									
								?>
					</div>
				</div>
		</div>
		
		<div class="col-8">
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