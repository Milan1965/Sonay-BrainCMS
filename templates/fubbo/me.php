<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-6">
				<div id="shadow-box" style="background-image:url(/templates/david_vox/img/lpromo_house18_gen.png);height: 95px;">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Hey, <?= User::userData('username') ?>!</font></div>
						<div class="desc"><font color="white" style="color: white">Welkom (terug) op Yabbis! Wij wensen je veel plezier in het hotel.</font></div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div id="shadow-box" style="background-color:#52be80;background-image:url(/templates/david_vox/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/hotel" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Naar <?= $config['hotelName'] ?></font></div>
						<div class="desc"><font color="white" style="color: white">en speel met alle andere <?= Game::usersOnline() ?> <?= $config['hotelName'] ?>'s!</font></div>
					</div>
					</a>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-4">
				<div id="shadow-box" style="background-color:#ffe417;height: 80px;">
					<div class="title-box png20">
					<center>
						<div class="title"><img src="/templates/david_vox/img/credits.png"></div>
						<div class="desc"><font style="color: white;font-size: 175%"><?= User::userData('credits') ?></font></div>
					</center>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="background-color:#ffbaf1;height: 80px;">
					<div class="title-box png20">
					<center>
						<div class="title"><img src="/templates/david_vox/img/duckets.png"></div>
						<div class="desc"><font style="color: white;font-size: 175%"><?= User::userData('activity_points') ?></font></div>
					</center>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="background-color:#70aee2;height: 80px;">
					<div class="title-box png20">
					<center>
						<div class="title"><img src="/templates/david_vox/img/diamonds.png"></div>
						<div class="desc"><font style="color: white;font-size: 175%"><?= User::userData('vip_points') ?></font></div>
					</center>
					</div>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-12">
				<div class="alert-shadow normal"><div class="container_24"><marquee><?php if($config['alert'] !== '') { $userPeak = $dbh->prepare("SELECT alert FROM cms_alerts"); $userPeak->execute(); while ($outputPeak = $userPeak->fetch()) { echo''.filter($outputPeak["alert"]).''; }; } else { echo 'Geen alert!'; } ?></marquee></div></div>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
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
					</a>
				</div>
			</div>
			<div class="col-4">
				<iframe src="https://discordapp.com/widget?id=684422033446273058&theme=dark" width="100%" height="250" allowtransparency="true" frameborder="0"></iframe>
			</div>
			<div class="col-7">
				<div id="content-box" >
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/community_tab.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white"><?= $config['hotelName'] ?> Community</font></div>
						<div class="desc"><font color="white">Uitgelichte <?= $config['hotelName'] ?> Hotel spelers!</font></div>
					</div>
					<div class="png20">
						<div class="campaigns">
<?php
$getUOTW = $dbh->prepare("SELECT userid2,userid3 FROM uotw");
$getUOTW->execute();
while ($outputUOTW = $getUOTW->fetch())
{
echo'
							<a href="/profiel/'.filter($outputUOTW["userid2"]).'">
								<div class="img" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.4)), url(/adminpan/img/newsimages/31.png) center center;">
								<img src="https://www.habbo.city/habbo-imaging/avatarimage?figure='.filter($outputUOTW["userid3"]).'&direction=3&head_direction=3&gesture=sml&headonly=1" style="margin-top: -7px;"></img></div>
								<div class="details">
									<div class="title nameStaff">'.filter($outputUOTW["userid2"]).'</div>
									<div class="desc"><i>Deze speler is de speler van de week</i><br>Ook speler v/d week worden? Wees actief op ons hotel!</div></div>
								</div>
							</a>';
}
?>
						<div class="campaigns">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online FROM users ORDER BY id DESC LIMIT 1");
$getMembers->bindParam(':idlast', $_SESSION['id']);
$getMembers->execute();
if ($getMembers->RowCount() > 0)
{
while ($member = $getMembers->fetch())
{
$username = filter($member['username']);
$motto = filter($member['motto']);
$look = filter($member['look']);
$lastonline = filter($member['last_online']);
$online = filter($member['online']);
if($online == 1){ $OnlineStatus = "<img src='/templates/flunno/style/images/cms/online.gif'>"; } else { $OnlineStatus = "<img src='/templates/flunno/style/images/cms/offline.png'>";}

?>
							<a href='/profiel/<?php echo $username; ?>'>
								<div class="img" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.4)), url(/adminpan/img/newsimages/31.png) center center;">
								<img src="https://www.habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=3&head_direction=3&gesture=sml&headonly=1" style="margin-top: -7px;"></img></div>
								<div class="details">
									<div class="title nameStaff"><?php echo $username; ?></div>
									<div class="desc"><i>Deze speler is de nieuwste <?= $config['hotelName'] ?></i><br>
									<b>Laatst online:</b> <?php if ($online == 1)echo "Gebruiker is online!"; ?><?php if ($online == 0)echo date("d-m-y, H:i", strtotime('-1 hour', $lastonline)); ?></div>
<?php
}
}
else
{
echo "<p style='margin-left:10px;'>Er is nog geen nieuw lid!</p>";
}
}
?>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/dj.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white"><?= $config['hotelName'] ?>Radio</font></div>
						<div class="desc"><font color="white">Luister hier naar <?= $config['hotelName'] ?>Radio!</font></div>
					</div>
					<div class="png20">
<?php
if(User::userData('radio_aan') > 0){
  echo '
<audio id="myAudio" controls autoplay style="width: 100%;">
    <source src="http://51.178.50.237/radio/8000/radio.mp3" type="audio/ogg">
</audio>
  ';
}
?>
<script>
document.getElementById("myAudio").volume = 0.2;

function myFunction() {
  var x = document.getElementById("myAudio").autoplay;
  document.getElementById("demo").innerHTML = x;
}
</script>
<center>
<p>Er zijn momenteel <b class="listner"></b> luisteraars.</p>
<p>Je hoort nu <b class="nowPlaying"></b>.</p>
<p>DJ: <b class="streamer"></b></p>
</center>
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