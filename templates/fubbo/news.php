
    <title><?= $config['hotelName'] ?>: Nieuws</title>
<?php 
include_once 'includes/header_scripts.php'; 
if(!isset($_GET['id']))
{
?>
</head>

<body>
<?php  
}else{
if (!is_numeric($_GET['id']))
{
exit('<center><h1 style="color: #000;">Letop! Het gebruik maken van hack gerelateerde programmas wordt <b>niet</b> geaccepteerd!</h1></center>');
}
$news = $dbh->prepare("SELECT id,title,longstory,image,shortstory,author,date FROM cms_news WHERE id = :newsid");
$news->bindParam(':newsid', $_GET['id']);
$news->execute();
if ($news->RowCount() == 1)
{
?>

<div class="container">
	<div class="row">
        <div class="col-4">
            <div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Nieuwsarchief</div>
                </div>
                <div class="png20">
                    <ul class="news-list">
<?php
$getArticles = $dbh->prepare("SELECT id,date,title FROM cms_news ORDER BY date DESC");
$getArticles->execute();
if ($getArticles->RowCount() > 0)
{
while ($a = $getArticles->fetch())
{
echo '<li style="border:0px;" class="list-group-item"><a style="text-decoration:none;" href="/news/' . filter($a['id']) . '">' . filter($a['title']) . '</a></li>';
}
}
?>
                    </ul>
                </div>
            </div>
            <div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Likes</div>
                </div>
                <div class="png20">
				<?= newsLike() ?>
				Dit nieuwsartikel heeft <?= newsLikeCount() ?> likes.<br>
				<form method="post">
					<input type="submit" class="btn big green" value="<?= $lang["Nuserslikenewsbutton"] ?>" name="likenews" style="margin-top: 10px;width: 100%;">
				</form>
                </div>
            </div>
        </div>
<?php
$news2 = $news->fetch();
$newsAuthorQ = $dbh->prepare("SELECT username,look FROM users WHERE id = :newsid");
$newsAuthorQ->bindParam(':newsid', $news2['author']);
$newsAuthorQ->execute();
$newsAuthor = $newsAuthorQ->fetch();
echo'
		<div class="col-8">
            <div id="shadow-box">
                <div class="title-box png20" style="background-color:#d32f2f;background-image:url(https://www.habbo.city/habbo-imaging/avatarimage?figure='.filter($newsAuthor["look"]).'&action=sit,wav&direction=4&head_direction=3&img_format=png&gesture=spk&headonly=0&size=b);background-repeat: no-repeat;background-position: right;height: 80px;">
                    <div class="title"><font color="white">'.filter($news2["title"]).'</font></div>
                    <div class="desc"><font color="white">Auteur: <a href="/profiel/'.filter($newsAuthor["username"]).'"><font color="white">'.filter($newsAuthor["username"]).'</font></a>, geplaatst op: '.filter(gmdate("d-m-y, H:i", strtotime('+2 hours', $news2["date"]))).'</font></div>
                </div>
                <div class="png20">
                    '.html_entity_decode($news2['longstory']).'
                </div>
            </div>
</div>';
?>
</div>
</div>
<?php
include_once 'includes/footer.php';
?>
<?php
}
else
{
?>
<?php
}
}
?>