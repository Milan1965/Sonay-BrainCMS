<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(8);
?>
    <title><?= $config['hotelName'] ?>: Nieuws Bewerken</title>
<script src="<?= $config['hotelUrl'];?>/adminpan/js/ckeditor/ckeditor.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/boom.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Je bewerkt nu: <b><?php echo admin::EditNews("title"); ?></b></font></div>
					</div>
					<div class="png20">
							<?php admin::EditNews("id"); 
							admin::UpdateNews();?>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Titel</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditNews("title"); ?>" name="title" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Inleiding</label>
								<div class="col-sm-10">
									<input type="text"  value="<?php echo admin::EditNews("shortstory"); ?>" name="shortstory" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Inhoud</label>
								<div class="col-sm-10">
								<textarea id="editor1" name="longstory"  rows="15" cols="80"><?php echo admin::EditNews("longstory"); ?></textarea></div>
							</div>
							<br><br>
							<button style="width: 100%;" name="update" type="submit" class="btn big green">Bewerken</button>
				</div>
		</div>
<?php
include "includes/footer.php"
?>							
		<style>
			.imagebox {
			width: auto;
			background-repeat: repeat-y;
			border-radius: 6px;
			float: left;
			margin-right: 0.72pc;
			margin-bottom: 10px;
			webkit-box-shadow: 0 3px rgba(0,0,0,.17),inset 0px 0px 0px 1px rgba(0,0,0,0.31),inset 0 0 0 2px rgba(255,255,255,0.44)!important;
			-moz-box-shadow: 0 3px rgba(0,0,0,.17),inset 0px 0px 0px 1px rgba(0,0,0,0.31),inset 0 0 0 2px rgba(255,255,255,0.44)!important;
			box-shadow: 0 3px rgba(0,0,0,.17),inset 0px 0px 0px 1px rgba(0,0,0,0.31),inset 0 0 0 2px rgba(255,255,255,0.44)!important;
			}
		</style>
		<script>
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace( 'editor1' );
		</script>
        </div>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>