<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: <?= filter(userHome('username')); ?>'s Profiel</title>
</head>
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {
  opacity: 0.7;
}

.modal {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */
  padding-top: 100px;
  /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.9);
  /* Black w/ opacity */
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

.modal-content,
#caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {
    transform: scale(0)
  }
  to {
    transform: scale(1)
  }
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

@media only screen and (max-width: 700px) {
  .modal-content {
    width: 100%;
  }
}
</style>


<body>
<script>
// create references to the modal...
var modal = document.getElementById('myModal');
// to all images -- note I'm using a class!
var images = document.getElementsByClassName('myImages');
// the image in the modal
var modalImg = document.getElementById("img01");
// and the caption in the modal
var captionText = document.getElementById("caption");

// Go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function(evt) {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}
</script>

<div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
          </div>

	<div class="container">
		<div class="row">
        <link type="text/css" href="/templates/david_vox/css/profile.css" rel="stylesheet">
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
                <div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/rijk.png);background-repeat: no-repeat;background-position: right;height: 80px;">
                    <div class="title"><font color="white">Statistieken</font></div>
                    <div class="desc"><font color="white">Een aantal statistieken van <?= userHome('username'); ?></font></div>
                </div>
                <div class="png20">
                    <p><?= userHome('username'); ?> heeft <img src="/templates/david_vox/img/credits.png"> <?= userHome('credits'); ?>, <img src="/templates/david_vox/img/duckets.png"> <?= userHome('activity_points'); ?>, <img src="/templates/david_vox/img/diamonds.png"> <?= userHome('vip_points'); ?>, is bevriend met maarliefst 
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
					<div class="title-box png20" style="background-color:#70aee2;background-image:url(/templates/david_vox/img/vrienden.png);background-repeat: no-repeat;background-position: right;height: 80px;">
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
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/badges.png);background-repeat: no-repeat;background-position: right;height: 80px;">
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
							echo"<img alt=\"img01\" class=\"myImages\" id=\"myImg\" src=\"".$config['badgeURL']."".filter($badge["badge_id"]).".GIF\">";
						}
					}
					else
					{
						echo userHome('username').' has no badges yet';
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