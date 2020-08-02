<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Instellingen</title>
</head>

<body>

	<div class="container">
		<div class="row">
<link type="text/css" href="/templates/david_vox/css/settings.css" rel="stylesheet">
<div class="col-4">
    <a href="/instellingen" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-lock-open-alt icon"></i>
            <div class="settings-title">Wachtwoord Veranderen</div>
            <div class="settings-desc">Verander jouw wachtwoord</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/instellingen2" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">E-mailadres Aanpassen</div>
            <div class="settings-desc">Pas jouw e-mailadres aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/instellingen3" id="settings-navigation-box" class="selected">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Instellingen</div>
            <div class="settings-desc">Pas jouw hotel & radio instellingen aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/sessies" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-key icon"></i>
            <div class="settings-title">Login Activiteit</div>
            <div class="settings-desc">Bekijk jouw 10 recente login's</div>
        </div>
        <div class="clear"></div>
    </a>
</div>
<div class="col-8">

    <div id="content-box" style="height:100%">
        <div class="title-box png20">
            <div class="title">Hotel/Radio Instellingen</div>
        </div>

        <div class="png20">
			<form action="" method="POST">
					<?php User::editHotelSettings(); 
						$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
						$getUser->bindParam(':id', $_SESSION['id']);
						$getUser->execute();
						$stats = $getUser->fetch();
					?>
					<b>Radio beluisteren</b><br> Wil jij naar de radio luisteren zodra de hotel-pagina laad?<br>
						<input type="radio" class="hidde" onclick="Brain.Actions.settings(1, 1);" name="hinstellingenr" id="true" value="1" novalidate=""> <img src="/templates/david_vox/img/image_969.png"> 
							<div class="<?php if($stats['radio_aan'] == 1 ){ echo "burst_active";}else {echo 'burst';}?>" id="img_true_1"> 
								<label for="true"> 
									Jahoor, ik luister graag naar de  radio!
								</label> 
							</div> 
						<input type="radio" class="hidde" onclick="Brain.Actions.settings(2, 1);" name="hinstellingenr" id="false" value="0" novalidate=""> <img src="/templates/david_vox/img/image_969_1.png"> 
							<div class="<?php if($stats['radio_aan'] == 0 ){ echo "burst_active";}else {echo 'burst';}?>" id="img_false_1"> 
								<label for="false"> 
									Nee dankje, ik luister liever naar Spotify.
								</label> 
							</div> <br>
						<input type="submit" class="submit btn green save" value="<?= $lang["Ssave"] ?>" name="hotelsettings"">
			</form>
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