<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(7);
?>
    <title><?= $config['hotelName'] ?>: Expert Sollicitaties</title>
</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/community.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle Expert Sollicitaties</font></div>
					</div>
					<div class="png20">
							<table id="customers">
								<b>	
									<strong>
											<tr>
												<td><b>Gebruiker</b></td>
												<td><b>Echte Naam</b></td>
												<td><b>Discord</b></td>
												<td><b>Leeftijd</b></td>
												<td><b>Uren p/week</b></td>
												<td><b>Ervaring</b></td>
												<td><b>Motivatie</b></td>
												<td><b>Waarom jou aannemen?</b></td>
												<td><b>IP</b></td>
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
										<td style="width: 6%;">'.htmlspecialchars($news['uren']).'</td>
										<td style="width: 15%;">'.htmlspecialchars($news['ervaring']).'</td>
										<td style="width: 20%;">'.htmlspecialchars($news['motivatie']).'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['jou']).'</td>
										<td style="width: 40%;">'.htmlspecialchars($news['ip']).'</td>
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