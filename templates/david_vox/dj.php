<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: DJs</title>
</head>

<body>

	<div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">Radio Beheerder</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE djteam = 4");
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
                    <a href='/home/<?php echo $username; ?>' class="dj-box">
                        <div class="dj-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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
                    <div id="title-headline">Hoofd DJs</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE djteam = 3");
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
                    <a href='/home/<?php echo $username; ?>' class="dj-box">
                        <div class="dj-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
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
                    <div id="title-headline">Vaste DJs</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE djteam = 2");
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
                    <a href='/home/<?php echo $username; ?>' class="dj-box">
                        <div class="dj-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
                        <div class="avatarimage" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png" style="height: 40px;">
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
echo "<p style='margin-left:10px;'>Niemand heeft deze functie. <a href='/vacatures' style='text-decoration:none;color:grey;'>Solliciteer!</a></p>";
}
}
?>
            </div>
			
			<div class="row">
                <div class="col-12">
                    <div id="title-headline">Proef DJs</div>
                </div>
            </div>
            <div class="row">
<?php
{
$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,last_online,functie_site,functie_uitleg FROM users WHERE djteam = 1");
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
                    <a href='/home/<?php echo $username; ?>' class="dj-box">
                        <div class="dj-header"><div class="header"></div><div class="overlay"><div class="work"><?php echo $functie; ?></div><div class="username"><?php echo $username; ?></div></div></div>
                        <div class="avatarimage" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png" style="height: 40px;">
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
echo "<p style='margin-left:10px;'>Niemand heeft deze functie. <a href='/vacatures' style='text-decoration:none;color:grey;'>Solliciteer!</a></p>";
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