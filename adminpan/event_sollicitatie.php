<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(7);
?>
    <title><?= $config['hotelName'] ?>: Event Team Sollicitaties</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/community_tab.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle Event Team Sollicitaties</font></div>
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
												<td><b>Uren p/week</b></td>
												<td><b>Ervaring</b></td>
												<td><b>Waarom jou aannemen?</b></td>
												<td><b>Datum</b></td>
											</tr>
									</strong>
								</b>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM eventsolli ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'<tr>
										<td style="width: 8%;">'.htmlspecialchars($news['username']).'</td>
										<td style="width: 8%;">'.htmlspecialchars($news['realname']).'</td>
										<td style="width: 8%;">'.htmlspecialchars($news['discord']).'</td>
										<td style="width: 4%;">'.htmlspecialchars($news['age']).'</td>
										<td style="width: 6%;">'.htmlspecialchars($news['uren']).'</td>
										<td style="width: 20%;">'.htmlspecialchars($news['ervaring']).'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['jou']).'</td>
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