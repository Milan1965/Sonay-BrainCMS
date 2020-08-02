<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Management</title>
</head>

<body>
<div class="container">
	<div class="row">
                <div class="col-12">
                    <div id="title-headline">Manager</div>
                </div>
            </div>
            <div class="row">
<?php
$getRanks = $dbh->prepare("SELECT id,name,badgeid FROM ranks WHERE id in (10)  ORDER BY id DESC");
						$getRanks->execute();
						while ($Ranks = $getRanks->fetch())
							{
								$getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE rank = :ranid");
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
                    <a href='/profiel/<?php echo $username; ?>' class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work">Manager - Developer</div><div class="username"><?php echo $username; ?></div></div></div>
                        <div class="avatarimage" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png" style="height: 54px">
                            <div class="motto">Administrator</div>
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
                    <div id="title-headline">Developer</div>
                </div>
            </div>
            <div class="row">
<?php
$getRanks = $dbh->prepare("SELECT id,name,badgeid FROM ranks WHERE id in (9)  ORDER BY id DESC");
						$getRanks->execute();
						while ($Ranks = $getRanks->fetch())
							{
								$getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE rank = :ranid");
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
                    <a href='/profiel/<?php echo $username; ?>' class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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
                    <div id="title-headline">Community Manager</div>
                </div>
            </div>
            <div class="row">
<?php
$getRanks = $dbh->prepare("SELECT id,name,badgeid FROM ranks WHERE id in (8)  ORDER BY id DESC");
						$getRanks->execute();
						while ($Ranks = $getRanks->fetch())
							{
								$getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE rank = :ranid");
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
                    <a href='/profiel/<?php echo $username; ?>' class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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