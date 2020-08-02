<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(3);
?>
    <title><?= $config['hotelName'] ?>: Collega's</title>
</head>

<body>
<style>.staff-offline{text-indent:-9999px;width:0px;position:absolute;margin-top:6px;margin-left:7px;height:0px;border:5px solid #F37373;box-shadow:0px 0px 0px 1px rgba(0,0,0,0.2);border-radius:50%;}.staff-online{text-indent:-9999px;width:0px;position:absolute;margin-top:6px;margin-left:7px;height:0px;border:5px solid #73F375;box-shadow:0px 0px 0px 1px rgba(0,0,0,0.2);border-radius:50%;}</style>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/shouts.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle personeelsleden van <?= $config['hotelName'] ?>, er zijn <?php 
					$getOnline = $dbh->prepare("SELECT COUNT(*) FROM `users` WHERE online = '1' AND rank>1 ORDER BY RAND()");
$getOnline->execute();
$onlinecount = $getOnline->fetch();
echo $onlinecount[0];
						?> collega's online!</font></div>
					</div>
					<div class="png20">
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Collega</b></td><td><b>Functie</b></td><td><b>Status</b></td></tr></strong></b>
<?php
			$getRanks = $dbh->prepare("SELECT id,name,badgeid,tab_colour FROM ranks WHERE id in (11,10,9,8,7,6,5,4,3,2)  ORDER BY id DESC");
			$getRanks->execute();
			while ($Ranks = $getRanks->fetch())
			{	
				echo '
				';
				$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,functie_uitleg FROM users WHERE rank = :ranid");
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
						$functie_uitleg = filter($member['functie_uitleg']);
						if($online == 1){ $OnlineStatus = "1"; } else { $OnlineStatus = "0"; }
						echo '
										<tr>
										<td style="width: 40%;"><a href="/home/' .$username . '" style="text-decoration: none;">' .$username . '</a></td>
										<td style="height: 60px;width: 70%;">' . $functie_uitleg . '</td>
										<td style="width: 40%;"><img src="/templates/brain/style/images/icons/online/'.$OnlineStatus.'.png"></td>
										</tr>
						
					
						';
					}
				}
				else
				{
					echo '';
				}
				echo '';
			}
		?>
						</table>
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