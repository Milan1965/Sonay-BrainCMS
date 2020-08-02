<html>
<head>
<?php
include "includes/vox_header.php"
?>
    <title><?= $config['hotelName'] ?>: VoxASE</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/gegevens.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">De management-tool van <?= $config['hotelName'] ?></font></div>
					</div>
					<div class="png20">
					Welkom, je bevindt je nu in VoxASE.<br> Dit wordt gebruikt als management-tool voor <?= $config['hotelName'] ?>. Elke stap die jij maakt op dit gedeelte van de website, kunnen wij terugzien, let dus goed op wat je doet.<br><br>
					Het is mogelijk dat je bepaalde pagina's niet kunt zien, dat komt omdat niet alle pagina's voor iedere functie gemaakt zijn. Denk jij dat er toch ergens een foutje is gemaakt? Spreek dan David even aan in het hotel.
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