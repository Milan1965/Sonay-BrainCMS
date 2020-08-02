<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(10);
?>
    <title><?= $config['hotelName'] ?>: Website Alert</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/informatie.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Hier kan je de alert op de website bewerken!</font></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
						<div class="panel-body">
							<?php
			if (isset($_POST['update'])) 
			{		
					$upateUser = $dbh->prepare("UPDATE cms_alerts SET alert=:alert");
					$upateUser->bindParam(':alert', $_POST['alertje']); 
					$upateUser->execute(); 
					Admin::succeed("Het alert is succesvol aangepast!");
			}
							?>
							<div class="form-group">
								<div class="col-sm-14">
									<input type="text"  value="<?php
					$userPeak = $dbh->prepare("SELECT alert FROM cms_alerts");
					$userPeak->execute();
					while ($outputPeak = $userPeak->fetch())
					{
					echo''.filter($outputPeak["alert"]).'';
					} ?>" name="alertje" class="form-control-edit" style="width: 100%;">
								</div><br>
							</div>
							<button style="width: 100%" name="update" type="submit" class="btn big green">Edit alert</button></form>
					</div>
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