<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $config['hotelName'] ?>: Welkom </title>

        <link type="text/css" href="/templates/david_vox/css/index.css" rel="stylesheet">
    </head>

    <body>
		
        <div class="hero">
            <div class="hotel"></div>
        </div>

        <div id="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"></div>
                        <div class="online-count"><b><?= Game::usersOnline() ?></b> <?= $config['hotelName'] ?>'s online</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="login-position">
                        <h2>Aanmelden</h2>
						<?php User::Login(); ?>
                        <form method="post">
                            <label for="login-username"><?= $config['hotelName'] ?>naam</label>
                            <input type="text" class="login-field" name="username" id="login-username">

                            <label for="login-password">Wachtwoord</label>
                            <input tabindex="4" type="password" class="login-field" name="password" id="login-password" maxlength="32">
							
                            <button href="/me" type="submit" class="btn big green login-button" style="width: 100%" name="login">Inloggen</button>
                        </form>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>of</p>
                            </div>
                            <div class="col-md-12">
                                <a href="/register">
							<button class="btn big orange register-button">Registreren</button>
								</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row" style="margin-top: 12%; margin-left: -62%;">
<?php
include "includes/footer.php"
?>
            </div>
        </div>
    </body>
</html>