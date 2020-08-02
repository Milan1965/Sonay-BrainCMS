<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(10);
?>
    <title><?= $config['hotelName'] ?>: <?php echo admin::EditUser("username"); ?>'s Account</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/bg_hotel.png);background-repeat: no-repeat;background-position: right bottom;height: 95px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Je bewerkt nu <?php echo admin::EditUser("username"); ?>'s Account</font><br>
						<a href="/functies.txt" target="_blank" style="text-decoration: none;"><font color="white"><u>Lees hier over de functies</u></font></a></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
						<div class="panel-body">
							<?php admin::EditUser("username"); 
								admin::UpdateUser();
							?>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">E-mailadres</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("mail"); ?>" name="mail" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Motto</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("motto"); ?>" name="motto" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Rank</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("rank"); ?>" name="rank" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Rank Site</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("rank_site"); ?>" name="rank_site" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Credits</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("credits"); ?>" name="credits" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Duckets</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("activity_points"); ?>" name="activity_points" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Diamonds</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("vip_points"); ?>" name="vip_points" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Bel-Credits</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("gotw_points"); ?>" name="gotw_points" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Event Team</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("eventteam"); ?>" name="eventteam" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Spam Team</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("spamteam"); ?>" name="spamteam" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Pixelaar</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("pixelteam"); ?>" name="pixelteam" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Radio Team</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditUser("djteam"); ?>" name="djteam" class="form-control">
								</div>
							</div>
							<button style="width: 100%;" name="update" type="submit" class="btn big green">Opslaan</button></form>
						<!--<?php
							if (User::userData('rank') > '7')
							{
								echo'<a href="gebruiker.php?user='. admin::EditUser("username") .'&delete='. admin::EditUser("id") .'">
								<button style="width: 160px;
								float: right;
								margin-right: 14px;" name="delete" type="submit" class="btn btn-danger">Gebruiker verwijderen</button>
								</a><form action="client.php" method="POST" target="_blank">
								<input type="hidden" name="sso" value='. admin::EditUser("username") .'>
								<button style="width: 140px;
								float: right;
								margin-right: 14px;" name="postsso" type="submit" class="btn btn-default">Hotel in met '.admin::EditUser("username").'</button>
								</form>';
							}
							echo'';
						?>-->
					</div>
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