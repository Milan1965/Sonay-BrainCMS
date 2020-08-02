

<?php
include "includes/header_scripts.php"
?>
<html>
<head>
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>

<body>

	<div class="container">
		<div class="row">
        <link type="text/css" href="/templates/david_vox/css/profile.css?v=9" rel="stylesheet">
        <!--<div class="col-12">
			<div id="shadow-box" style="background-color:#52be80;height: 60px;">
					<div class="title-box png20">
						<center>
							<div class="desc"><font color="white" style="color: white"><b>Feit van de dag</b> Wist jij al dat Nathanmoore & Harmke ongeveer 600 hartjes per dag naar elkaar sturen?! Klef hoor!</font></div>
						</center>
					</div>
			</div>
		</div>-->
        <div class="col-6">
            <div id="shadow-box" class="profile" style="min-height: 330px;">
                <div class="bg" style="min-height: 330px;"></div>
                <div class="overlay" style="min-height: 330px;">
                    <div class="avatar-image" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look') ?>&size=l&head_direction=2&gesture=sml)"></div>

                    <div class="username">Hey, <?= User::userData('username') ?>!</div>
                    <div class="motto"></div>

                    <div class="last-online">
					<b><img src="/templates/david_vox/img/credits.png" width="15px"> <?= User::userData('credits') ?></b> <br>
					<b><img src="/templates/david_vox/img/duckets.png" width="15px"> 100</b> <br>
					<b><img src="/templates/david_vox/img/diamonds.png" width="14px" title="SS Punten"> 0</b> <br>
					<b>Jouw motto: </b><?= User::userData('motto') ?> </div>
                </div>
                <div style="clear:both"></div>
            </div>
			<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/templates/david_vox/img/disco.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Nodig vrienden uit</font></div>
						<div class="desc2"><font color="white">Nodig jouw vrienden uit naar <?= $config['hotelName'] ?>!</font></div>
					</div>
					<div class="png20 stataantal">
					<img style="float:right;" src="/Assets/img/habbo_friends.png"/>
                    <p class="refer-text">
                        Iedereen wil het natuurlijk gezellig op <?= $config['hotelName'] ?> hebben. En met veel online en al je vrienden
                        in het hotel gaat dat zeker lukken! <br/><br/>
                        Nodig daarom je vrienden uit en ontvang coole cadeau's <br>
                    </p>
                    <a href="/verdienen">
                        <button style="font-size:15px;width:100%" class="btn big green">Meer informatie!</button>
                    </a>
					</div>
				</div>
				
		
				
        </div>
        <div class="col-6">
				
				<div id="shadow-box" style="background-color:#52be80;background-image:url(/templates/david_vox/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/game" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Naar <?= $config['hotelName'] ?></font></div>
						<div class="desc"><font color="white" style="color: white">en speel met alle andere 27 <?= $config['hotelName'] ?>ters!</font></div>
					</div>
					</a>
				</div>

				<div class="col-13">

				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:red;background-image:url(/templates/david_vox/img/gegevens.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Sanctie Status</font></div>
						<div class="desc"><font color="white">Jouw opgelopen waarschuwingen.</font></div>
					</div>
					<div class="png20">
					<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Moderator</b></td><td><b>Punishment</b></td><td><b>Reden</b></td></tr></strong></b>
								<tbody>
								
								<?php
									
									$getArticles = $dbh->prepare("SELECT * FROM waarschuwingen ORDER BY date DESC LIMIT 1");
									$getArticles->execute();
									while($news = $getArticles->fetch())
										echo'<tr>
										<td style="width: 32%;">'.$news["username"].'</td>
										<td style="width: 42%;">'.htmlspecialchars($news['experience']).'</td>
										<td style="width: 10%;">'.htmlspecialchars($news['reason']).'</td>
										
										</tr>';
									
								?>
								
							</table>
							<center><h2>Onder development fase</h2></center>
					</div>
				</div>
					
				</div>
				
				<div id="news-content">
                    
				<?php
$sql = $dbh->prepare("SELECT id,title,image,shortstory,author FROM cms_news ORDER BY id DESC LIMIT 1");
$sql->execute();
$newsAuthorQ = $dbh->prepare("SELECT username,look FROM users WHERE id = :newsid");
$newsAuthorQ->bindParam(':newsid', $news2['author']);
$newsAuthorQ->execute();
$newsAuthor = $newsAuthorQ->fetch();
while ($news = $sql->fetch())
{
echo'
				<a href="/news/'.filter($news["id"]).'" style="text-decoration:none">
					<div class="news-article show" style="background: url('. $news['image'] .')">
						<div class="shadow"></div>
						<div class="news-content">
							<div class="news-title">' .filter($news["title"]).'</div>
							<div class="news-short-text">' .filter($news["shortstory"]).'</div>
						</div>

						<div class="details-box">
							<div class="back-news"><i class="fal fa-newspaper"></i></div>
						</div>
';

}
?>
	

				</div>
				
				</div>
        				
        				
        </div>
        </div>

		<?php
include "includes/footer.php"
?>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script type="text/javascript" src="/radio/htmlplayer.js"></script>
<script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script></div>
    </div>
    </body>
</html>