<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Winkel</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-6">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#8F110B;background-image:url(/templates/david_vox/img/vips.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">VIP Voordelen</font></div>
						<div class="desc"><font color="white">Alle voordelen voor VIP leden!</font></div>
					</div>
                <div class="png20">
:badge - Krijg een donatie badge boven je hoofd<br>
:seks - Voor wat pixel liefde met een andere <?= $config['hotelName'] ?>.<br>
:steel - Steel een look van een andere <?= $config['hotelName'] ?>.<br>
:fastboard- Haal een super snelle hoverboard uit en begin te rennen.<br>
:vuur - Steek een <?= $config['hotelName'] ?> in vuur en vlam.<br>
:slijm - Gooi wat slijm op een andere <?= $config['hotelName'] ?>.<br>
:vroom - Doe Famke Louise na.<br>
:rook - Rook een sigaret.<br>
                </div>
				</div>
			</div>
			<div class="col-6">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#b3514d;background-image:url(/templates/david_vox/img/stacks.gif);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">VIP Kopen</font></div>
						<div class="desc"><font color="white">Koop gauw jouw VIP status</font></div>
					</div>
                <div class="png20">
			<center>
				<?php buyvip(); ?>
				VIP kost precies 100 diamanten!
			</center>
			<form method="post">
				<input type="submit" class="btn green big" value="VIP kopen" name="getvip" style="margin-top: 10px;width: 100%;">
			</form>
                </div>
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