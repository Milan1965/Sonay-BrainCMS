<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(6);
?>
    <title><?= $config['hotelName'] ?>: Woordfilter</title>
</head>
<style>
.form-control-edit {
	width: 33%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-control-edit2 {
	width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>
<body>
	<div class="container">
		<div class="row">
        <div class="col-6">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/filter.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle woorden</font></div>
					</div>
					<div class="png20">
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>ID</b></td><td><b>Woord</b></td><td><b>Vervanging</b></td><td><b>Toegevoegd door</b></td></strong></b>
									<tbody>
										<?php
											if ($config['hotelEmu'] == 'arcturus')
											{
												$getArticles = $dbh->prepare("SELECT * FROM wordfilter");
												$getArticles->execute();
												while($news = $getArticles->fetch())
												{
													echo'<tr>
													<td style="width: 13%;">'.$news["key"].'</td>
													<td style="width: 7%;">'.$news["replacement"].'</td>
													';
												}	
											}
											else
											
											{
												$getArticles = $dbh->prepare("SELECT * FROM wordfilter");
												$getArticles->execute();
												while($news = $getArticles->fetch())
												{
													echo'<tr>
													<td style="width: 10%;">'.$news["id"].'</td>
													<td style="width: 10%;">'.$news["word"].'</td>
													<td style="width: 10%;">'.$news["replacement"].'</td>
													<td style="width: 10%;">'.$news["addedby"].'</td>
													';
												}
											}
										?>
									</tbody>
								</table>
								</form>
				</div>
				</div>
        </div>
        <div class="col-3">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Een woord toevoegen</font></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
							<?php
			if (isset($_POST['update'])) 
			{		
					$upateUser = $dbh->prepare("INSERT INTO wordfilter (word,replacement,strict,addedby,bannable) VALUES (:word, :filterwoord, '1', :addedby, '1');");
					$upateUser->bindParam(':word', $_POST['insert1']); 
					$upateUser->bindParam(':filterwoord', $_POST['insert2']); 
					$upateUser->bindParam(':addedby', $_POST['insert3']); 
					$upateUser->execute(); 
					Admin::succeed("Succesvol geadd!");
			}
							?>
							<div class="form-group">
								<div class="col-sm-14">
									Woord
									<input type="text" placeholder="Woord" value="" name="insert1" class="form-control-edit">
									Vervanging
									<input type="text" placeholder="Naar" value="*gefilterd*" name="insert2" class="form-control-edit">
									Toegevoegd door
									<input type="text" placeholder="Toegevoegd door" value="<?= User::userData('username') ?>" name="insert3" class="form-control-edit">
								</div>
							</div>
							<button style="width: 100%;" name="update" type="submit" class="btn big green">Toevoegen</button>
							</form>
				</div>
				</div>
        </div>
        <div class="col-3">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Een woord verwijderen</font></div>
					</div>
					<div class="png20">
				<?php
                if(User::userData('rank') > 10){
                  echo '
						<div class="col-md-12">
				<section class="panel">
					<header class="panel-heading">
						Woord<br>
						<form name="mygallery" action="" method="POST">
						</header>
						<div class="panel-body">';
                }

                ?>
							<?php
			if (isset($_POST['update2'])) 
			{		
					$upateUser = $dbh->prepare("DELETE FROM wordfilter WHERE id=:id;");
					$upateUser->bindParam(':id', $_POST['insert1']); 
					$upateUser->execute(); 
					Admin::succeed("Succesvol verwijdert!");
			}
							?><?php
                if(User::userData('rank') > 9){
                  echo '
							<div class="form-group">
								<div style="text-align: center;" class="col-sm-14">
									<input type="text" placeholder="ID" value="" name="insert1" class="form-control-edit2">
								</div>
							</div>
							<button style="width: 100%;" name="update2" type="submit" class="btn big green">Verwijderen</button></form>
					</div>
				</div>';
                }

                ?>
				</div>
				</div>
        </div>
<?php
include "includes/footer.php"
?>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>