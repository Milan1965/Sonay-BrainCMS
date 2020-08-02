<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Event Vacature</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/party.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Event Vacature</font></div>
						<div class="desc"><font color="white">Je bent nu aan het solliciteren voor de functie: <b>Event Lid</b></font></div>
					</div>
					<div class="png20">
				<form action="" method="POST" autocomplete="off">
					<?php eventSolli(); ?>
					<label><b>Habsie Naam</b><br>
					<input type="text" name="username" size="400" placeholder="<?= $lang["Nyourname"] ?>" value= "<?= User::userData('username') ?>" id="username" style="width: 100%;" disabled>
					<p><label><b>Echte Naam</b><br>
					<input type="text" name="realname" size="400" placeholder="Harold" value= "" id="in1" style="width: 100%;"></p>
					<p><label><b>Discord</b><br>
					<input type="text" name="discord" size="400" placeholder="Discord" value= "" id="in2" style="width: 100%;"></p>
					<p><label><b>Leeftijd</b><br>
					<input type="text" name="age" size="400" placeholder="15" value= "" id="in3" style="width: 100%;"></p>
					<p><label><b>Hoeveel uren per week zou je online kunnen zijn?</b><br>
					<input type="text" name="uren" size="400" placeholder="10" id="in4" style="width: 100%;"></p>
					<p><label><b>Ervaring</b><br>
					<textarea type="quarrel" name="ervaring" size="400" rows="5" cols="50" style="width: 100%;" id="in5"></textarea></p>
					<p><label><b>Waarom moeten wij jou aannemen?</b><br>
					<textarea name="jou" size="400" rows="5" cols="50" style="width: 100%;" id="in7"> </textarea></p>
					<input type="submit" value="<?= $lang["Nsubmit"] ?>" name="addsollie" class="btn big green" style="width: 100%;">
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