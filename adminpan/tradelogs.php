<html>
<head>
<?php
	include "includes/vox_header.php";
	admin::CheckRank(5);
?>
    <title><?= $config['hotelName'] ?>: Ruillogs</title>
</head>

<body>
	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="content-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/david_vox/img/ruilen.gif);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">VoxASE</font></div>
						<div class="desc"><font color="white">Alle ruilen die hebben plaatsgevonden</font></div>
					</div>
					<div class="png20">
						<form name="mygallery" action="" method="POST">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Ruil (ID)</b></td><td><b>Gebruiker 1 </b></td><td><b>Gebruiker 1 geeft</b></td><td><b>Gebruiker 2</b></td><td><b>Gebruiker 2 geeft</b></td><td><b>Datum</b></td></tr></strong></b
								<tbody>
								<?php
									$getLogs = $dbh->prepare("SELECT logs_client_trade.*, users.username FROM logs_client_trade INNER JOIN users ON users.id = logs_client_trade.1id ORDER BY id DESC LIMIT 100");
									$getLogs->execute();
									while($log = $getLogs->fetch())
									{
										echo'<tr>
										<td>'.$log["id"].'</td>
										<td style="width: 13%;">'.$log["username"].'</td>
										<td style="width: 30%;">';
										if(!empty($log['1items'])){
											$aitems = array();
											foreach(array_diff( explode(";", $log['1items']), array('')) as $item){
												$itemLookup = $dbh->prepare("SELECT items.base_item, catalog_items.catalog_name FROM items INNER JOIN catalog_items ON catalog_items.item_id = items.base_item WHERE items.id = ?");
												$itemLookup->execute(array($item));
												$item = $itemLookup->fetch(PDO::FETCH_ASSOC);
												$id = $item['base_item'];
												if(!$item){
													$id = 'uk';
													$aitems[$id]['name'] = 'Unknown';
												}else{
													$aitems[$id]['name'] = $item['catalog_name'];
												}
												if(strlen($id) == 0)
													break;
												if($aitems[$id]){
													$aitems[$id]['count']++;
												}else{
													$aitems[$id]['count'] = 1;
												}
											}
											foreach($aitems as $base){
												echo $base['count'] . "x ". $base['name'].'<br />';
											}
										}
										echo '</td>
										<td style="width: 15%;">';
										$userLookup = $dbh->prepare("SELECT username FROM users WHERE id = ?");
										$userLookup->execute(array($log['2id']));
										$user = $userLookup->fetch(PDO::FETCH_ASSOC);
										echo $user['username'].'</td>
										<td style="width: 30%;">';
										if(!empty($log['2items'])){
											$bitems = array();
											foreach(array_diff( explode(";", $log['2items']), array('')) as $item){
												$itemLookup = $dbh->prepare("SELECT items.base_item, catalog_items.catalog_name FROM items INNER JOIN catalog_items ON catalog_items.item_id = items.base_item WHERE items.id = ?");
												$itemLookup->execute(array($item));
												$item = $itemLookup->fetch(PDO::FETCH_ASSOC);
												$id = $item['base_item'];
												if(!$item){
													$id = 'uk';
													$bitems[$id]['name'] = 'Unknown';
												}else{
													$bitems[$id]['name'] = $item['catalog_name'];
												}
												if(strlen($id) == 0)
													break;
												if($bitems[$id]){
													$bitems[$id]['count']++;
												}else{
													$bitems[$id]['count'] = 1;
												}
											}
											foreach($bitems as $base){
												echo $base['count'] . "x ". $base['name'].'<br />';
											}
										}
										echo '</td>
										<td>'. gmdate('d-m-Y, H:i ', $log['timestamp']).'</td>
										';
									}
								?>
							</tbody>
						</table>
					</div>
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