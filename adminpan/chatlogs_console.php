<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(7);
?>
    <title><?= $config['hotelName'] ?>: Privé Chatlogs</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/avatar.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle privé chats die hebben plaatsgevonden, kan even duren om te laden!</font></div>
					</div>
					<div class="png20">
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>ID</b></td><td><b>Verzender ID</b></td><td><b>Ontvanger ID</b></td><td><b>Bericht</b></td><td><b>Datum</b></td></tr></strong></b
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM chatlogs_console ORDER BY id DESC  LIMIT 100000");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'<tr>
										<td>'.$news["id"].'</td>
										<td style="width: 13%;">'.$news["from_id"].'</td>
										<td style="width: 7%;">'.$news["to_id"].'</td>
										<td style="width: 25%;">'.$news["message"].'</td>
										<td>'. gmdate('d-m-Y, H:i ', $news['timestamp']).'</td>
										';
									}
								?>
							</tbody>
						</table>
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