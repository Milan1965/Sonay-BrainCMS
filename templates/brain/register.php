<?php
	include "includes/index/header.php"
?>
<link href="/templates/Nabbo/style/css/register.css?n=<?php echo date('s:i'); ?>" rel="stylesheet"/>
<?php
	
	if(isset($_GET['userref'])) {
		$userref = $_GET['userref'];
	}
	else{
		$userref = '';
	}
	
?>
<title><?= $config['hotelName'] ?> ~ Registreren</title>
    <div class="container_24">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
				<div style="margin-left:20px;" class="box">
                   <div class="title green">Word ook een <?= $config['hotelName'] ?></div>
				  <?php User::Register(); ?>
				  <form method="post">
                       <b><?= $config['hotelName'] ?> Naam</b><br>
                        <input type="text" class="form-control" style="width: 100%" id="username" name="username" placeholder="Gebruikersnaam..."><br>
						         <b>Wachtwoord</b><br>
                        <input type="password" class="form-control" style="width: 100%" id="password" name="password" placeholder="Wachtwoord..."><br>
						         <b>Herhaal Wachtwoord</b><br>
                        <input type="password" class="form-control" style="width: 100%" id="password_repeat" name="password_repeat" placeholder="Wachtwoord herhalen..."><br>
					<b>E-mailadres</b><br>
                        <input type="text" class="form-control" style="width: 100%" id="email" name="email" placeholder="E-mailadres..."><br>
                        <input type="hidden" class="form-control" style="width: 100%" id="motto" name="motto" value="<?= $config['startMotto'] ?>">
                        <input type="hidden" class="form-control" style="width: 100%" id="avatar-code" name="habbo-avatar" value="<?= $config['startFigure'] ?>">   						

                  			           <center>
			         <button type="submit" href="/me" class="btn-dayhab-n btn-success news-info" name="register">Voltooi</button>
			       </center>
				   </div>
		       </ul>
	             </div>
          <div class="col-md-8">
                <ul class="list-group">
				<div style="margin-right:20px;" class="box">
                    <div class="title blue">Wat is <?= $config['hotelName'] ?>?</div>
           <?= $config['hotelName'] ?> is een gratis virtueel spel waar je kunt chatten, lopen, vrienden kunt maken en ontmoeten. Ook is het mogelijk om je eigen virtuele kamer te creeëren die je vervolgens naar eigen keus kunt inrichten. Na de registratie ontvang je een boel credits waarmee je coole spullen zoals meubels, planten, huisdieren en nog veel meer dingen mee kunt kopen. Waar wacht je nog op? <b>Registreer je snel!</b> 
                </div>
				</ul>
				<div class="panel-heading" style='margin-right:20px;background: url("/adminpan/img/newsimages/158458826.png") center; position: relative;'>
							<strong style="color:white;">Dayhab - Gloed Nieuw!</strong><br>
							<small style="color:white;">Nieuwe catalogus, nieuwe website,<br> club kopen, helpertools, sollicitaties, custom kleding en nog veel meer!<br>
							Registreer je dus snel op <?= $config['hotelName'] ?>, en wees een van onze lieftallige Vidos.</small>

						</div>
			
        </div>
   </div>
</div>
<?php
	include "includes/footer.php"
?>