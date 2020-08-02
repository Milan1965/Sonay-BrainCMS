<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: <?= filter(userHome('username')); ?>'s Profiel</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <link type="text/css" href="/templates/fubbo/css/profile.css" rel="stylesheet">
        <div class="col-6">
            <div id="shadow-box" class="profile">
                <div class="bg"></div>
                <div class="overlay">
                    <div class="avatar-image" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= userHome('look') ?>&size=l&head_direction=2&gesture=sml)"></div>

                    <div class="username"><?= filter(userHome('username')); ?></div>
                    <div class="motto"><?= filter(userHome('motto')); ?></div>

                    <div class="last-online">
					<b>Laatst gezien op</b> <?php echo date("d-m-y, H:i", strtotime('+1 hour', userHome('last_online'))); ?><br>
					<b>Aangemaakt op</b> <?php echo date("d-m-y, H:i", strtotime('+1 hour', userHome('account_created'))); ?></div>
                </div>
                <div style="clear:both"></div>
            </div>

            <div id="shadow-box">
                <div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/fubbo/img/rijk.png);background-repeat: no-repeat;background-position: right;height: 80px;">
                    <div class="title"><font color="white">Statistieken</font></div>
                    <div class="desc"><font color="white">Een aantal statistieken van <?= userHome('username'); ?></font></div>
                </div>
                <div class="png20">
                    <p><?= userHome('username'); ?> heeft <img src="/templates/fubbo/img/credits.png"> <?= userHome('credits'); ?>, <img src="/templates/fubbo/img/duckets.png"> <?= userHome('activity_points'); ?>, <img src="/templates/fubbo/img/diamonds.png"> <?= userHome('vip_points'); ?>, is bevriend met maarliefst 
<b><?php 
$userId = userHome('id');
$badgeCount = $dbh->prepare("SELECT Count(id) as total FROM messenger_friendships WHERE user_one_id=".filter(userHome('id'))." OR user_two_id=".filter(userHome('id'))."");
$badgeCount->execute();
while($badgeCountOutput = $badgeCount->fetch())
{
echo"".filter($badgeCountOutput["total"])."";
}
?></b>
<?= $config['hotelName'] ?>'s en heeft al 
<b><?php 
$userId = userHome('id');
$badgeCount = $dbh->prepare("SELECT Count(id) as total FROM user_badges WHERE user_id = ".filter(userHome('id'))."");
$badgeCount->execute();
while($badgeCountOutput = $badgeCount->fetch())
{
echo"".filter($badgeCountOutput["total"])."";
}
?></b>
badges gescoord!</p>
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-6">
            <div id="shadow-box">
					<div class="title-box png20" style="background-color:#70aee2;background-image:url(/templates/fubbo/img/vrienden.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Vrienden</div>
						<div class="desc"><font color="white">Alle vrienden van <?= userHome('username'); ?></font></div>
					</div>
                <div class="png20">
<?php
$userId = userHome('id');
$sql = $dbh->prepare("SELECT * FROM messenger_friendships WHERE user_one_id=:userid OR user_two_id=:userid");
$sql->bindParam(':userid', $userId);
$sql->execute();
if (!$sql->RowCount() == 0)
{
while($news = $sql->fetch())
{
$id = (userHome('id') == $news['user_two_id'] ? $news['user_one_id'] : $news['user_two_id']);
$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
$getUser->bindParam(':id', $id);
$getUser->execute();
$getUserData = $getUser->fetch();
echo'
<a href=/profiel/'.filter($getUserData['username']).' class="friends-head" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure='.filter($getUserData['look']).'&size=b&head_direction=2&gesture=sml&headonly=1);background-position: center 1px;"><div class="username">'.filter($getUserData['username']).'</div></a>';
}
}
else
{
echo userHome('username').' heeft nog geen vrienden';
}
?>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="shadow-box">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/fubbo/img/badges.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Badges</div>
						<div class="desc"><font color="white">Alle badges van <?= userHome('username'); ?></font></div>
					</div>
                <div class="png20">
<?php
$userId = userHome('id');
$stmt = $dbh->prepare("SELECT*FROM user_badges WHERE user_id = :userid");
$stmt->bindParam(':userid', $userId);
$stmt->execute();
if (!$stmt->RowCount() == 0)
{
while($badge = $stmt->fetch())
{
echo"
<div class=\"group-badge\" style=\"background-image:url(/bibliotheek/c_images/album1584/".filter($badge["badge_id"]).".GIF)\"></div>";
}
}
else
{
echo userHome('username').' heeft nog geen badges';
}
?>
                    
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        </div>

<div class="row">
		
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