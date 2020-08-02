<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Community</title>
</head>

<body>

	<div class="container">
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
				<a href="/nieuws/'.filter($news["id"]).'" style="text-decoration:none">
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
				<iframe src="https://discordapp.com/widget?id=641705852843327511&theme=dark" width="100%" height="250" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div class="col-12">
				<div id="content-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/dj.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white"><?= $config['hotelName'] ?>Radio</font></div>
						<div class="desc"><font color="white">Luister hier naar <?= $config['hotelName'] ?>Radio!</font></div>
					</div>
					<div class="png20">
<?php
if(User::userData('radio_aan') > 0){
  echo '
<audio id="myAudio" controls autoplay style="width: 100%;">
    <source src="https://radio.yabbis.nl/radio/8000/radio.mp3" type="audio/ogg">
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