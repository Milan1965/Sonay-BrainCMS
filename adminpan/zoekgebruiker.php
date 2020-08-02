<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(10);
?>
    <title><?= $config['hotelName'] ?>: Gebruiker Zoeken</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/bg_hotel.png);background-repeat: no-repeat;background-position: right bottom;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Zoeken in de Gebruiker-database</font></div>
					</div>
					<div class="png20">
			<?php
				if (User::userData('rank') > '6')
				{
				?>
				<div class="col-md-12">
					<section class="panel">
							<form action="" method="POST">
							<div class="panel-body">
								<?php admin::searchUser(); ?>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Gebruikersnaam</label>
									<div class="col-sm-10">
										<input type="text"  value="" name="user" class="form-control">
									</div>
								</div>
								<button style="width: 100%;" name="zoek" type="submit" class="btn big green">Zoeken</button>
							</div>
						</section>
					</div>
				</form>
				<?php
				}
				else{
				?>
				<input type="hidden"  value="<?php echo admin::EditUser("zoek"); ?>" name="zoek" class="form-control" disabled>
				<?php
				}
			?>
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