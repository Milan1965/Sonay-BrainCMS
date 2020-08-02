<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
	admin::CheckRank(7);
?>
<aside class="right-side">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<section class="panel">
					<header class="panel-heading">
						Expert Sollicitaties<br>
						<form name="mygallery" action="" method="POST">
						</header>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-condensed">
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
												<td><b>Datum</b></td>
											</tr>
									</strong>
								</b>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM staffapplication ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'<tr>
										<td style="width: 8%;">'.$news["username"].'</td>
										<td style="width: 8%;">'.$news["realname"].'</td>
										<td style="width: 8%;">'.$news["skype"].'</td>
										<td style="width: 4%;">'.$news["age"].'</td>
										<td style="width: 6%;">'.$news["onlinetime"].'</td>
										<td style="width: 30%;">'.$news["functie"].'</td>
										<td style="width: 20%;">'.$news["motivatie"].'</td>
										<td style="width: 20%;">'.$news["jou"].'</td>
										<td>'. date('d-m-Y', $news['date']).'</td>
										</tr>';
									}
								?>
							
						</div>
						</div>
						</div>
						</div>
						<?php
						include_once "includes/script.php";
						?>													