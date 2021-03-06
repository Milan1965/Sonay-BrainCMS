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
    <a href="/instellingen2" id="settings-navigation-box" class="selected">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">E-mailadres Aanpassen</div>
            <div class="settings-desc">Pas jouw e-mailadres aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/instellingen3" id="settings-navigation-box">
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

    <div id="content-box" style="height:270px">
        <div class="title-box png20">
            <div class="title">E-mailadres Aanpassen</div>
        </div>

        <div class="png20">
            <form method="post">
			<?php User::editEmail(); ?>
                <label for="old-password">Nieuw E-mailadres</label>
                <input type="text" name="email" id="avatarmotto" class="form-control" required>
                <div class="desc" style="margin: 0 0 20px 0">Vul hier jouw gewenste e-mailadres in, die jij in de toekomst wilt gaan gebruiken voor <?= $config['hotelName'] ?>.</div>

                <input type="submit" value="<?= $lang["Ssave"] ?>" name="account" class="btn green save">
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