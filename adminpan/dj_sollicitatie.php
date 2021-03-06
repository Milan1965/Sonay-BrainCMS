<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(10);
?>
    <title><?= $config['hotelName'] ?>: DJ Sollicitaties</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/dj.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle DJ Sollicitaties</font></div>
					</div>
					<div class="png20">
							<table>
								<b>	
									<strong>
											<tr>
												<td><b>Gebruiker</b></td>
												<td><b>Echte Naam</b></td>
												<td><b>Discord</b></td>
												<td><b>Leeftijd</b></td>
												<td><b>Ervaring</b></td>
												<td><b>Clip/Audio</b></td>
												<td><b>Datum</b></td>
											</tr>
									</strong>
								</b>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM expsolli ORDER BY date DESC LIMIT 8");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'<tr>
										<td style="width: 8%;">'.htmlspecialchars($news['username']).'</td>
										<td style="width: 8%;">'.htmlspecialchars($news['realname']).'</td>
										<td style="width: 8%;">'.htmlspecialchars($news['discord']).'</td>
										<td style="width: 4%;">'.htmlspecialchars($news['age']).'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['ervaring']).'</td>
										<td style="width: 20%;">'.htmlspecialchars($news['jou']).'</td>
										<td>'. date('d-m-Y', $news['date']).'</td>
										</tr>';
									}
								?>
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