<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(5);
?>
    <title><?= $config['hotelName'] ?>: Bans</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/boom.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle bans die hebben plhabnethabnethabnethabnethabnethabnetaatsgevonden</font></div>
					</div>
					<div class="png20">
							<?php admin::DeleteBans(); ?>
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Ban ID</b></td><td><b>Gebruiker</b></td><td><b>Type</b></td><td><b>Reden</b></td><td><b>Stafflid</b></td><td><b>Datum</b></td><td><b>Verloopt op & om</b></td></tr></strong></b
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM bans ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'';
										echo'<tr>
										<td>'.$news["id"].'</td>
										<td style="width: 13%;">'.$news["value"].'</td>
										<td style="width: 7%;">'.$news["bantype"].'</td>
										<td style="width: 25%;">'.$news["reason"].'</td>
										<td>'.$news["added_by"].'</td>
										<td>'. gmdate('d-m-Y H:i', $news['added_date']).'</td>
										<td>'. gmdate('d-m-Y H:i', $news['expire']).'</td>
										';
										if (User::userData('rank') > '7')
										{
											echo'	
											<td><a href='.$config['hotelUrl'].'/adminpan/bans/delete/'.$news["id"].'><i style="padding-top: 4px; color:red;" class="fa fa-trash"></i></center></a></td>
											</tr>
											';
										}
									}			
								?>
								</tbody>
							</table>
					</div>
				</div>
        </div>
	</div>
<?php
include "includes/footer.php"
?>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>