<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: DJ Vacature</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/autodj.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">DJ Vacature</font></div>
						<div class="desc"><font color="white">Je bent nu aan het solliciteren voor de functie: <b>Proef DJ</b></font></div>
					</div>
					<div class="png20">
				<form action="" method="POST" autocomplete="off">
					<?php djSolli(); ?>
					<label><b>Habsie Naam</b><br>
					<input type="text" name="username" size="400" placeholder="<?= $lang["Nyourname"] ?>" value= "<?= User::userData('username') ?>" id="username" style="width: 100%;" disabled>
					<p><label><b>Echte Naam</b><br>
					<input type="text" name="realname" size="400" placeholder="Harold" value= "" id="in1" style="width: 100%;"></p>
					<p><label><b>Discord</b><br>
					<input type="text" name="discord" size="400" placeholder="Discord" value= "" id="in2" style="width: 100%;"></p>
					<p><label><b>Leeftijd</b><br>
					<input type="text" name="age" size="400" placeholder="15" value= "" id="in3" style="width: 100%;"></p>
					<p><label><b>Ervaring</b><br>
					<textarea name="ervaring" size="400" rows="5" cols="50" style="width: 100%;" id="in5"></textarea></p>
					<p><label><b>Link van Opname</b><br>
					Wij willen graag een stukje van 30 seconden horen waarin jij presenteert, dit kan je uploaden via <a href="https://clyp.it/" target="_blank">www.clyp.it</a>
					<input type="text" name="jou" placeholder="https://clyp.it/voorbeeld" size="400" rows="5" style="width: 100%;" id="in6"> </input></p>
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