<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Vacatures</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/expert.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Expert</font></div>
						<div class="desc"><font color="white">Wil jij <?= $config['hotelName'] ?> veilig houden?</font></div>
					</div>
					<div class="png20">
<b>Voorwaarden:</b><br>
- Je bent 15 jaar of ouder;<br>
- Je kan onder druk presteren;<br>
- Je bent minimaal 8 uur per week beschikbaar;<br>
- Je kan goed in een team werken;<br><br>
<hr>
<a href="/expert_vacature"><button style="width: 100%" class="btn big green">Solliciteren</button></a>
					</div>
				</div>
        </div>
        <div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/autodj.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">DJ</font></div>
						<div class="desc"><font color="white">Hou jij van muziek?</font></div>
					</div>
					<div class="png20">
<b>Voorwaarden:</b><br>
- Je bent 15 jaar of ouder;<br>
- Je bent minimaal een uur per week beschikbaar;<br>
- Je hebt veel muziek(kennis);<br>
- Je hebt een goede en duidelijke microfoon;<br>
- Je kan goed in een team werken;<br>
<hr>
<a href="/dj_vacature"><button style="width: 100%" class="btn big green">Solliciteren</button></a>
					</div>
				</div>
        </div>
        <div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/party.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Event Team</font></div>
						<div class="desc"><font color="white">Wil jij events organiseren?</font></div>
					</div>
					<div class="png20">
<b>Voorwaarden:</b><br>
- Je bent 13 jaar of ouder;<br>
- Je kan leuke evenementen verzinnen en uitvoeren;<br>
- Je hebt verstand van wired;<br>
- Je kan onder druk presteren;<br>
- Je kan goed in een team werken;<br>
<hr>
<a href="/event_vacature"><button style="width: 100%" class="btn big green">Solliciteren</button></a>
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