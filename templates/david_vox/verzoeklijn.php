<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Verzoeklijn</title>
</head>

<body>

	<div class="container">
        <div class="row">
			<div class="col-8">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/autodj.gif);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">AutoDJ Verzoeklijn</font></div>
						<div class="desc"><font color="white">Geen LiveDJ maar toch liedjes aanvragen? Dat kan hier!</font></div>
					</div>
					<div class="png20">
<iframe src="https://radio.habsieradio.nl/public/habsie_radio/embed-requests" frameborder="0" allowtransparency="true" style="width: 100%; min-height: 968px; border: 0;"></iframe>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/dj.gif);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Verzoeklijn</font></div>
						<div class="desc"><font color="white">Stuur een bericht naar de LiveDJ!</font></div>
					</div>
					<div class="png20">
				<form action="" method="POST" autocomplete="off" style="margin-top: -20px;">
					<?php verzoek(); ?>
					<p><label><b><?= $lang["Nyourname"] ?></b><br>
					<input type="text" name="username" size="400" placeholder="<?= $lang["Nyourname"] ?>" value= "<?= User::userData('username') ?>" id="username" style="width: 100%;" disabled>
					<p><label><b>Verzoek</b><br>
					<textarea name="experience" size="400" rows="5" cols="50" style="width: 100%;"> </textarea></p>
					<input type="submit" value="<?= $lang["Nsubmit"] ?>" name="addsollie" class="btn green big" style="width: 100%;">
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