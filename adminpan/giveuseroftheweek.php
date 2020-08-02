<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(10);
?>
    <title><?= $config['hotelName'] ?>: <?= $config['hotelName'] ?> v/d Week</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/party.png);background-repeat: no-repeat;background-position: right bottom;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Maak een <?= $config['hotelName'] ?> de <?= $config['hotelName'] ?> v/d Week</font></div>
					</div>
					<div class="png20">
						Je staat op het punt <?php echo admin::EditUserOfTheWeek("username"); ?> de <?= $config['hotelName'] ?> van de Week te maken, doorgaan?
						<form name="mygallery" action="" method="POST">
							<?php admin::EditUserOfTheWeek("username"); 
								admin::UpdateUserOfTheWeek();
							?>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="hidden"  value="<?php echo admin::EditUserOfTheWeek("username"); ?>" name="naam" class="form-control" disable>
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="hidden"  value="<?php echo admin::EditUserOfTheWeek("motto"); ?>" name="motto" class="form-control">
								</div>
							</div>
							
							<button style="width: 100%;" name="update" type="submit" class="btn big green">Doorgaan</button></form>
				</div>
		</div>
<?php
include "includes/footer.php"
?>
        </div>
    </div>
	</div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>