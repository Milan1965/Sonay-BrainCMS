    <title><?= $config['hotelName'] ?>: Nieuws</title>
<?php 
include_once 'includes/header_scripts.php'; 
if(!isset($_GET['id']))
{
?>
</head>

<body>


<div class="container">
	<div class="row">
        <div class="col-4">
            <div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Nieuwsarchief</div>
                </div>
                <div class="png20">
                    <ul class="news-list">

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

		<div class="col-8">
            <div id="shadow-box">
                <div class="title-box png20" style="background-color:#d32f2f;background-image:url(https://www.habbo.city/habbo-imaging/avatarimage?figure=&action=sit,wav&direction=4&head_direction=3&img_format=png&gesture=spk&headonly=0&size=b);background-repeat: no-repeat;background-position: right;height: 80px;">
                    <div class="title"><font color="white"></font></div>
                    <div class="desc"><font color="white">Auteur: <a href="/home/David"><font color="white"></font></a></font></div>
                </div>
                <div class="png20">
                    
                </div>
            </div>
</div>
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

?>