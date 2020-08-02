<?php
	include_once "includes/vox_header.php";
	admin::CheckRank(10);
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="content-box" style="max-height:100%;width: 950px;margin-left: 8.5%;">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/boom.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle bans die hebben plaatsgevonden</font></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
						<div class="panel-body">
							<?php admin::EditUser("username"); 
								admin::UpdateUser();
							?>
							<div class="form-group">
								<label class="control-label">Gebruikersnaam</label>
									<input type="text" value="<?php echo admin::EditUser("username"); ?>" name="naam" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label class="control-label">E-mailadres</label>
									<input type="text"  value="<?php echo admin::EditUser("mail"); ?>" name="mail" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Motto</label>
									<input type="text"  value="<?php echo admin::EditUser("motto"); ?>" name="motto" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Rank</label>
									<input type="text"  value="<?php echo admin::EditUser("rank"); ?>" name="rank" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Rank Site</label>
									<input type="text"  value="<?php echo admin::EditUser("rank_site"); ?>" name="rank_site" class="form-control">
							</div>
							<div class="form-group">
									<input type="hidden"  value="<?php echo admin::EditUser("hulptroepen"); ?>" name="hulptroepen" class="form-control">							
							</div>
							<div class="form-group">
								<label class="control-label">Credits</label>
									<input type="text"  value="<?php echo admin::EditUser("credits"); ?>" name="credits" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Duckets</label>
									<input type="text"  value="<?php echo admin::EditUser("activity_points"); ?>" name="activity_points" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Diamonds</label>
									<input type="text"  value="<?php echo admin::EditUser("vip_points"); ?>" name="vip_points" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Bel-Credits</label>
									<input type="text"  value="<?php echo admin::EditUser("gotw_points"); ?>" name="gotw_points" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Event Team</label>
									<input type="text"  value="<?php echo admin::EditUser("eventteam"); ?>" name="eventteam" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Spam Team</label>
									<input type="text"  value="<?php echo admin::EditUser("spamteam"); ?>" name="spamteam" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Bouw Team</label>
									<input type="text"  value="<?php echo admin::EditUser("bouwteam"); ?>" name="bouwteam" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Pixelaars</label>
									<input type="text"  value="<?php echo admin::EditUser("pixelteam"); ?>" name="pixelteam" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Radio Team</label>
									<input type="text"  value="<?php echo admin::EditUser("djteam"); ?>" name="djteam" class="form-control">
							</div>
							<button style="width: 100%;" name="update" type="submit" class="btn big green">Opslaan</button></form>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<?php
			include_once "includes/footer.php";
		?>																				