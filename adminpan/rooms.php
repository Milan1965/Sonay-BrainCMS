<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
	admin::CheckRank(5);
?>
<aside class="right-side">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<section class="panel">
					<header class="panel-heading">
						Kamers in Gold<br>
						<form name="mygallery" action="" method="POST">
						</header>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-condensed">
								<tbody>
									<strong><tr><td style="width: 5%;"><b>ID</b></td><td><b>Kamernaam</b></td><td><b>Kamer ID</b></td><td><b>Kamer Status</b></td><td><b>Kamermodel</b><!--</td><td style="width: 5%;"><b>Bewerken</b></td></tr></strong>-->
										<?php
											if ($config['hotelEmu'] == 'arcturus')
											{
												$getArticles = $dbh->prepare("SELECT * FROM rooms ORDER BY id DESC");
												$getArticles->execute();
												while($news = $getArticles->fetch())
												{
													echo'';
													echo'<tr>
													<td>'.$news["id"].'</td>
													<td style="width: 13%;">'.$news["name"].'</td>
													<td>'.$news["id"].'</td>
													<td style="width: 25%;">'.$news["state"].'</td>
													<td>'.$news["model"].'</td>
													</tr>';
												}
											}
											else
											{
												$getArticles = $dbh->prepare("SELECT * FROM rooms ORDER BY id DESC");
												$getArticles->execute();
												while($news = $getArticles->fetch())
												{
													echo'';
													echo'<tr>
													<td>'.$news["id"].'</td>
													<td style="width: 13%;">'.$news["caption"].'</td>
													<td>'.$news["id"].'</td>
													<td style="width: 25%;">'.$news["state"].'</td>
													<td>'.$news["model_name"].'</td>
													</tr>';
												}
											}
										?>
									</tbody>
									</table>
									</div>
								</div>
							</div>
							<?php
								include_once "includes/footer.php";
								include_once "includes/script.php";
							?>																																