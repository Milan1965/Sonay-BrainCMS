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
    <a href="/instellingen3" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Instellingen</div>
            <div class="settings-desc">Pas jouw hotel & radio instellingen aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/sessies" id="settings-navigation-box" class="selected">
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
            <div class="title">Login Activiteit</div>
        </div>

        <div class="png20">
				<table>
					<tr>
						<th>IP</th>
						<th>Datum</th>
						<th>Browser</th>
					</tr>
					<?php
						$getUserSessions = $dbh->prepare("SELECT userid,ip,date,browser FROM user_session_log WHERE userid = :id order by date DESC LIMIT 10");
						$getUserSessions->bindParam(':id', $_SESSION['id']);
						$getUserSessions->execute();
						while ($getUserSessionsData = $getUserSessions->fetch())
						{
							$hidIp = preg_replace("/(\d+\.\d+\.)\d+\.\d+/", "$1**.**", $getUserSessionsData['ip']);
							echo '
							<tr>
							<td style="width: 20%;">'.htmlspecialchars($hidIp).'</td>
							<td style="width: 20%;">'.gmdate("d-m-Y H:i:s", strtotime('+2 hour', $getUserSessionsData['date'])).'</td>
							<td style="width: 40%;">'.htmlspecialchars($getUserSessionsData['browser']).'</td>
							</tr>
							';
						}
					?>
				</table>
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