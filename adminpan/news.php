<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(8);
?>
    <title><?= $config['hotelName'] ?>: Nieuws</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/informatie.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Plaats een Nieuwsartikel</font></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
						<?php admin::PostNews(); ?>
						<div class="panel-body">
							<?php admin::PostNews(); ?>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Titel</label>
								<div class="col-sm-10">
									<input type="text" value="<?php echo $_SESSION['title']; ?>" name="title" class="form-control" style="width: 100%;">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Inleiding</label>
								<div class="col-sm-10">
									<input type="text" value="<?php echo $_SESSION['slogan']; ?>" name="slogan" class="form-control" style="width: 100%;">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Afbeelding</label>
								<div class="col-sm-10">
									<?php
										echo '<select onChange="showimage()" class="form-control" name="topstory" style="    width: 100%;font-size: 14px;"';
										if ($handle = opendir(''.$_SERVER['DOCUMENT_ROOT'].'/adminpan/img/newsimages'))
										{	
											while (false !== ($file = readdir($handle)))
											{
												echo'';
												if ($file == '.' || $file == '..')
												{
													continue;
												}	
												echo '<option name="topstory" data-image="'.$config['hotelUrl'].'/adminpan/img/newsimages/' . $file . '" value="'.$config['hotelUrl'].'/adminpan/img/newsimages/' . $file . '"';
												if (isset($_POST['topstory']) && $_POST['topstory'] == $file)
												{
													echo ' selected';
												}
												echo '>' . $file . '</option>';
											}
										}
										echo '</select>';
									?>
									<style>
										.imagebox {
										width: auto;
										background-repeat: repeat-y;
										margin-right: 0.72pc;
										margin-bottom: 10px;
										}
									</style>
									<div class="imagebox">
										<img style="border-radius: 6px;"src="<?= $config['hotelUrl'];?>/adminpan/img/newsimages/choose.gif" name="topstory" border=0>
									</div>
								</div>
							</div>
							<script src="<?= $config['hotelUrl'];?>/adminpan/js/ckeditor/ckeditor.js"></script>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Inhoud</label>
								<div class="col-sm-10">
									<textarea id="editor1" name="news"  rows="15" cols="80"><?php echo $_SESSION['news']; ?></textarea>
								</div>
							</div><br><br>
							<button style="width: 100%;" name="postnews" type="submit" class="btn big green">Plaatsen</button>
						</div>
			</form>
				</div>
		</div>
			<script>
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace( 'editor1' );
			</script>
        </div>
        <div class="col-12">
			<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/boom.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Verwijder een Nieuwsartikel</font></div>
					</div>
					<div class="png20">
							<?php admin::DeleteNews(); ?>
							<table class="table table-striped table-bordered table-condensed">
									<strong>
											<tr>
												<td><b>Nieuws ID</b></td>
												<td><b>Titel</b></td>
												<td><b>Inleiding</b></td>
												<td><b>Auteur ID</b></td>
												<td><b>Datum</b></td>
											</tr>
									</strong>
								<tbody>
									<?php
									
									
									
									$getArticles = $dbh->prepare("SELECT * FROM cms_news ORDER BY id DESC");
									$getArticles->execute();
										
										while($news = $getArticles->fetch())
										{
											echo'<tr>
											<td style="width: 10%;">'.$news["id"].'</td>
											<td style="width: 30%;">'.$news["title"].'</td>
											<td style="width: 40%;">'.$news["shortstory"].'</td>
											<td style="width: 10%;">'.$news["author"].'</td>
											<td style="width: 10%;">'. date('d-m-Y', $news['date']).'</td>
											<td><a href='.$config['hotelUrl'].'/adminpan/news/delete/'.$news["id"].'><i style="padding-top: 4px; color:red;" class="fa fa-trash"></i></center></a></td>
											</tr>';
										}
									?>
									
									
									
									
								</tbody>
							</table>
					</div>
			</div>
			<script>
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace( 'editor1' );
			</script>
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