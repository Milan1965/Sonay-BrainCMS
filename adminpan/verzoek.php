<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
?>
<aside class="right-side">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<section class="panel">
					<header class="panel-heading">
						Verzoeklijn<br>
						</header>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Gebruiker</b></td><td><b>Bericht</b></td><td><b>Datum</b></td></tr></strong></b>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM verzoek ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch())
									{
										echo'<tr>
										<td style="width: 20%;">'.$news["username"].'</td>
										<td>'.$news["experience"].'</td>
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