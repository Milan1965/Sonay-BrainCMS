
<html>
    <head>
        <meta charset="utf-8">

        <title><?= $config['hotelName'] ?>: Registreren</title>

        <link type="text/css" href="/templates/fubbo/css/registration.css" rel="stylesheet">
		<script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
<?php
	
	if(isset($_GET['userref'])) {
		$userref = $_GET['userref'];
	}
	else{
		$userref = null;
	}
	
?>
<style>
	.error {
		text-align: center;
		font-size: 13px;
		background: #f44336;
		display: none;
		width: 100%;
		color: #fff;
		padding: 0 10px;
		border-radius: 2px;
		margin-bottom: 8px;
		line-height: 40px;
	}
</style>
    <body>
        <div class="main" style="margin-top: -1%;">
            <div class="logo"></div>
            
            <div class="content-box" id="step-1">
                <div class="title-box">
                    <div class="title">Dus je gaat een <?= $config['hotelName'] ?> aanmaken? :D</div>
                </div>

                <div class="png20">
					
					<?php User::Register(); ?>
                    <form name="reg" method="post">
                        <div class="alert">We vinden het te-gek dat je voor ons hebt gekozen :)</div>
							
                        <label><?= $config['hotelName'] ?>naam</label>
                        <input type="text" id="username" name="username" autocomplete="off" style="width:94%">
                        <p class="desc">Kies een mooie naam, deze kan je later namelijk niet meer veranderen!</p>
                        
                        <label>Wachtwoord</label>
                        <input type="password" class="form-control" style="width: 94%" id="password" name="password">
                        <p class="desc">Kies een wachtwoord dat lastig te raden is, maar wel makkelijk voor jou te onthouden is.</p>
                        
                        <label>Wachtwoord Herhalen</label>
                        <input type="password" class="form-control" style="width: 94%" id="password_repeat" name="password_repeat">
                        <p class="desc">Herhaal even je wachtwoord, dit is puur voor de veiligheid!</p>
                        
                        <label>E-mailadres</label>
                        <input type="text" class="form-control" style="width: 94%" id="email" name="email">
                        <p class="desc">Via jouw e-mailadres kun je je <?= $config['hotelName'] ?> account dubbel beveiligen.</p>
                        
                        <label>Motto</label>
                        <input type="text" class="form-control" style="width: 94%" id="motto" name="motto" value="<?= $config['startMotto'] ?>">
                        <p class="desc">Kies een motto waaraan andere <?= $config['hotelName'] ?>'s jou echt aan kunnen herkennen!</p>
                        
                        <label>Je gaat er straks zo uitzien...</label><br>
                        <img src="/templates/fubbo/img/avatar.png">
                        <p class="desc">Wat een ongelofelijke knapperd! :O</p>
						

                        <a href="/" class="btn red back-register">Annuleren</a>
						<script>
						function alertSuccess() {
							return new Promise(function (resolve, reject) {
								document.getElementById("regbutton").style.display = "";
							});
						}
						</script>
                        <button id="regbutton" type="submit" style="display:none;" class="btn green next-register" name="register">Registreren</button>
                        <button type="submit" class="btn green next-register" name="register" >Registreren</button>

                        <div style="clear:both"></div>
                    </form>
                </div>
            </div><br><br><br>
        </div>
    </body>
    <script type="text/javascript" src="js/vendor.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>