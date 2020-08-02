
    <title><?= $config['hotelName'] ?>: Nieuws</title>
<?php 
include_once 'includes/header_scripts.php'; 
if(!isset($_GET['id']))
{
?>
</head>
<style type="text/css">
	.mainBox.newsBox a {
	color: #1c76c7;
	}
	.googlebox{
	padding: 10px;
    background-color: #969696;
    border-radius: 3px;
	}
</style>
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

<div class="center">
<?php
		include_once 'includes/alerts.php';
	?>
	<div style="margin-left: 0px;" class="columright">
		<div style = "" class="box">
			<div class="title">
				<?=  $lang["Nnews"] ?>
			</div>
			<div class="mainBox" style="float;left">
				<?php
					for ($i = 0; $i < 6; $i++)
					{
						$sectionName = "";
						$sectionCutoffMax = 0;
						$sectionCutoffMin = 0;
						switch ($i)
						{
							case 0:
							$sectionName = ''.$lang["Ntoday"].'';
							$sectionCutoffMax = time();
							$sectionCutoffMin = time() - 86400;
							break;
							case 1:
							$sectionName = ''.$lang["Nyesterday"].'';
							$sectionCutoffMax = time() - 86400;
							$sectionCutoffMin = time() - 172800;
							break;
							case 2:
							$sectionName = ''.$lang["Nthisweek"].'';
							$sectionCutoffMax = time() - 172800;
							$sectionCutoffMin = time() - 604800;
							break;
							case 3:
							$sectionName = ''.$lang["Nlastweek"].'';
							$sectionCutoffMax = time() - 604800;
							$sectionCutoffMin = time() - 1209600;
							break;
							case 4:
							$sectionName = ''.$lang["Nthismonth"].'';
							$sectionCutoffMax = time() - 1209600;
							$sectionCutoffMin = time() - 2592000;
							break;
							case 5:
							$sectionName = ''.$lang["Nlastmonth"].'';
							$sectionCutoffMax = time() - 2592000;
							$sectionCutoffMin = time() - 5184000;
							break;
						}
						$getArticles = $dbh->prepare("SELECT id,date,title FROM cms_news WHERE date >= :sectionCutoffMin AND date <= :sectionCutoffMax ORDER BY date DESC");
						$getArticles->bindParam(':sectionCutoffMin', $sectionCutoffMin);
						$getArticles->bindParam(':sectionCutoffMax', $sectionCutoffMax);
						$getArticles->execute();
						if ($getArticles->RowCount() > 0)
						{
							echo '
							<h2 style="  font-size: 100%;">' . filter($sectionName) . '</h2>
							';
							while ($a = $getArticles->fetch())
							{
								echo '<a href="/news/' . filter($a['id']) . '" class="llink active" style="">' . filter($a['title']) . '&nbsp;&raquo;</a><br>';
							}
						}
					}
				?>
			</div>
		</div>
		<style>
			.buttonlike {
			background: #1d0fda !important;
			}
			.buttonlike:hover {
			background: #150e75 !important;
			transition: all .2s ease-in;
			}
		</style>
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