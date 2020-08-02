<?php
include "includes/djheader_scripts.php"
?>
<div class="container">
<div class="row">
			<div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:blue;background-image:url(/templates/david_vox/img/autodj.gif);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Regels</font></div>
						<div class="desc"><font color="white">Regels voor deze gloednieuwe website functie!</font></div>
					</div>
					<div class="png20">
	<p>Welkom bij DJ chat, dit is ontworpen en gemaakt door ZeroSix#0001. Voor fouten contacteer me op m'n discord.</p>
	<hr>
	<p>1. Je mag hier nooit in gaan spammen en dat geldt voor alle omstandigheden.</p>
	<p>2. Hier je eigen regels invullen</p>
	<p>3. Hier je eigen regels invullen</p>
	
					</div>
				</div>
			</div>
			
			<div class="col-8">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:green;background-image:url(/templates/david_vox/img/frank_1.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Chatbox</font></div>
						<div class="desc"><font color="white">DJ Communicatie</font></div>
					</div>
					<div class="png20">
				<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Gebruiker</b></td><td><b>Bericht</b></td><td><b>Datum</b></td></tr></strong></b>
								<tbody>
								<?php
									if(User::userData('djteam') > 0){
									$getArticles = $dbh->prepare("SELECT * FROM verzoek ORDER BY date DESC LIMIT 9");
									$getArticles->execute();
									while($news = $getArticles->fetch())
										echo'<tr>
										<td style="width: 20%;">'.$news["username"].'</td>
										<td style="width: 60%;">'.htmlspecialchars($news['experience']).'</td>
										<td style="width: 20%;">'. date('d-m-Y', $news['date']).'</td>
										
										
										</tr>';
									}
								?>
							</table>
					</div>
				</div>
			</div>
			
			<div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#959;background-image:url(/templates/david_vox/img/community.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Chat Balk</font></div>
						<div class="desc"><font color="white">Chatten naar de mede-Collega's ;)</font></div>
					</div>
					<div class="png20">
				<form action="" method="POST" autocomplete="off" style="margin-top: -20px;">
					<?php verzoek(); ?>
					<input type="hidden" name="username" size="400" placeholder="<?= $lang["Nyourname"] ?>" value= "<?= User::userData('username') ?>" id="username" style="width: 100%;" disabled>
					<p><label><b>Jouw mededeling of gezellig chatten.</b><br>
					<textarea name="experience" size="400" rows="5" cols="50" style="width: 100%;"> </textarea></p>
					<input type="submit" value="<?= $lang["Nsubmit"] ?>" name="addsollie" class="btn green big" style="width: 100%;">
					</form>
					</div>
				</div>
			</div>
			
        </div>
		<?php
include "includes/footer.php"
?>
</div>