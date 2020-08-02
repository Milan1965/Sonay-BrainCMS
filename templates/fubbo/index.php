<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Habbo: World Connected</title>

        <link type="text/css" href="http://localhost/templates/fubbo/css/index.css" rel="stylesheet">
<style>
        /* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
    </head>

    <body>
        <!--<div class="error-msg">Die Felder müssen ausgefüllt sein.</div>-->
		
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
                            <input type="password" class="login-field" name="password" id="login-password" maxlength="32">

                            <button href="/me" type="submit" class="btn big green login-button" style="width: 100%" name="login">Inloggen</button>
                        </form>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Of</p>
                            </div>
                            <div class="col-md-12">
                                <a href="/register" class="btn big orange register-button">Gratis Account Aanmaken</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <br>
	<br>
	<br>
	<br>            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="footer-content">
                        <ul class="footer-links">
                            <li><a href="">Homepage</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                        <p class="footer"><?= $config['hotelName'] ?> Hotel &copy; 2019. All rights reserved.<br /><?= $config['hotelName'] ?> Hotel is no way affiliated with Sulake Corporation Oy.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>