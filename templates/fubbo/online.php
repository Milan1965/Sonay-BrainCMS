<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Online Spelers</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/fubbo/img/community.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white"> Alle online <?= $config['hotelName'] ?>'s</font></div>
						<div class="desc"><font color="white">Er zijn er op dit moment <?= Game::usersOnline() ?> online op <?= $config['hotelName'] ?>.</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$getOnline = $dbh->prepare("SELECT id,username,motto,online,look from users WHERE online = '1' ORDER BY RAND()");
$getOnline->execute();
if ($getOnline->RowCount() > 0)
{
while ($onlineRow = $getOnline->fetch())
{
?>
<a style="text-decoration:none;color:grey;text-align: center;" href="/profiel/<?= filter($onlineRow['username']) ?>"><div style="background: url(https://www.habbo.city/habbo-imaging/avatarimage?figure=<?= filter($onlineRow['look']) ?>&head_direction=2&gesture=sml);background-position: -2px -20px;width: 70px;float: left;background-repeat: no-repeat;"><br><br><br><br><font size="2"><?= filter($onlineRow['username']) ?></font></div></a>
<?php
}
}
else
{
echo'<br><center>Er zijn momenteel geen gebruikers online!</center></br>';
}
echo "</div>";
?>
									<div style="clear: both"></div>
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