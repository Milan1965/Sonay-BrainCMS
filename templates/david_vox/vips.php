<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Alle VIPs</title>
</head>

<body>

	<div class="container">
            <div class="row">
			<div class="col-12">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#8F110B;background-image:url(/templates/david_vox/img/vips.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Donatie Club</font></div>
						<div class="desc"><font color="white">Dit zijn alle VIP leden van <?= $config['hotelName'] ?></font></div>
					</div>
                <div class="png20">
                    Leden van de Donatie Club hebben extra functies, zoals leuke commands en effecten. Ook staan ze allemaal op deze pagina om te shinen! Wil jij ook hier tussen staan? Koop dan VIP via "Winkel" -> "VIP Kopen"!
                </div>
				</div>
			</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">VIP Leden</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE rank_vip = 3");
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
$functie = filter($member['functie_site']);
$functie_uitleg = filter($member['functie_uitleg']);
if($online == 1){ $OnlineStatus = "<img src='/templates/flunno/style/images/cms/online.gif'>"; } else { $OnlineStatus = "<img src='/templates/flunno/style/images/cms/offline.png'>";}
?>
                <div class="col-4">
                    <a href='/home/<?php echo $username; ?>' class="dev-box">
                        <div class="dev-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
                        <div class="avatarimage" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png" style="height: 54px">
                            <div class="motto"><?php echo $functie_uitleg; ?></div>
                            <div class="online-status"><?php echo $OnlineStatus; ?></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
<?php
}
}
else
{
echo "<p style='margin-left:10px;'>".$lang['Snostaff'];"</p>";
}
}
?>
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