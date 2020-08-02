<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Spam Team</title>
</head>

<body>

	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">Spam Beheerders</div>
                </div>
            </div>
            <div class="row">
<?php
$getRanks = $dbh->prepare("SELECT id,name,badgeid FROM teams WHERE id in (3)  ORDER BY id DESC");
						$getRanks->execute();
						while ($Ranks = $getRanks->fetch())
							{
								$getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE spamteam = :ranid");
								$getMembers->bindParam(':ranid', $Ranks['id']);
								$getMembers->execute();
								if ($getMembers->RowCount() > 0)
									{
										while ($member = $getMembers->fetch())
											{
												$username = filter($member['username']);
												$motto = filter($member['motto']);
												$look = filter($member['look']);
												$online = filter($member['online']);
if($online == 1){ $OnlineStatus = "<img src='/templates/flunno/style/images/cms/online.gif'>"; } else { $OnlineStatus = "<img src='/templates/flunno/style/images/cms/offline.png'>";}
?>
                <div class="col-4">
                    <a href='/profiel/<?php echo $username; ?>' class="spam-box">
                        <div class="spam-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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
			
			<div class="row">
                <div class="col-12">
                    <div id="title-headline">Spam Leden</div>
                </div>
            </div>
            <div class="row">
<?php
$getRanks = $dbh->prepare("SELECT id,name,badgeid FROM teams WHERE id in (2)  ORDER BY id DESC");
						$getRanks->execute();
						while ($Ranks = $getRanks->fetch())
							{
								$getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE spamteam = :ranid");
								$getMembers->bindParam(':ranid', $Ranks['id']);
								$getMembers->execute();
								if ($getMembers->RowCount() > 0)
									{
										while ($member = $getMembers->fetch())
											{
												$username = filter($member['username']);
												$motto = filter($member['motto']);
												$look = filter($member['look']);
												$online = filter($member['online']);
if($online == 1){ $OnlineStatus = "<img src='/templates/flunno/style/images/cms/online.gif'>"; } else { $OnlineStatus = "<img src='/templates/flunno/style/images/cms/offline.png'>";}
?>
                <div class="col-4">
                    <a href='/profiel/<?php echo $username; ?>' class="spam-box">
                        <div class="spam-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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