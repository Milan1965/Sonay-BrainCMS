<?php include('includes/header.php');?>
<title>Beast :: Kluis</title>
<link rel="stylesheet" href="{url}/assets/css/pure.css">
<div class="container clearfix">
<div class="grid_6">
<div class="box">
<h2 class="blue">Hoe werkt dit?</h2>
<div class="inner">
De {hotelname} Loterij heeft enorm veel geweldige prijzen! Maar om toegang te krijgen tot de prijs van de Loterij, moet je eerst de juiste plaatjes behalen, ga jij het raden? Maak kans op fantastische prijzen! De winnende plaatjes veranderen automatisch zelf! Elke poging kost maar liefst 100 Duckets!
De winnaar zal beloond worden met een mooie rare en al de Duckets die in de pot zitten! LET OP! Meedoen is op eigen risico, we <strong>VERGOEDEN NIKS, DUS JE KRIJGT JE DUCKETS NIET TERUG!!!</strong>
<br/><br/>
Iedere dag krijg je 1 extra kraakpoging. Met een maximum van 3. Hiervoor moet je wel inloggen!
<strong>En log uit de client anders werkt het niet!!!</strong>
</div>
</div>
<div class="box">
<h2 class="blue">{hotelname} Loterij</h2>
<div class="inner">
<div class="error">
</div>
<div class="success">
</div>
<center>
<form id="kraak" method="post" class="form-horizontal">
<
                                <?php
                                function array_random($arr, $num = 4) {
                                shuffle($arr);
                                $r = array();
                                for ($i = 0; $i < $num; $i++) {
                                    $r[] = $arr[$i];
                                }
                                return $num == 1 ? $r[0] : $r;
                                }
                                 if(isset($_POST['BuyRoll'])){
                                    $userData = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));
                                    $Purchase = '100';
                                    if($userData['gotw_points'] < $Purchase){
                                        echo "Je hebt niet genoeg Bel-Credits</br></br>";
                                    }else{
                                    mysql_query("UPDATE `users` SET gotw_points = gotw_points - $Purchase WHERE id = '".$_SESSION['user']['id']."'");
                                    $LotControl = mysql_fetch_array(mysql_query("SELECT * FROM `LotteryControls`"));
                                    if ($userData['online'] == 0){
                                    $testUsers = mysql_query("SELECT * from user_lottery WHERE user_id = '". $_SESSION['user']['id'] ."' LIMIT 1");
                                    if(mysql_num_rows($testUsers) > 0){
                                $array = array("bluedrag", "bluefan", "blueicm", "pinkdrag", "pinkfan", "pinkicm", "reddrag", "redicm", "redfan", "dino");
                                //echo implode(" ", array_random($array, 4));
                                //print_r(array_random($array, 4));
                                $first = array_random($array, 1);
                                $GrabFirst = mysql_query("SELECT FirstRare FROM LotteryControls LIMIT 1");
                                $second = array_random($array, 1);
                                $GrabSecond = mysql_query("SELECT SecondRare FROM LotteryControls LIMIT 1");
                                $third = array_random($array, 1);
                                $GrabThird = mysql_query("SELECT ThirdRare FROM LotteryControls LIMIT 1");
                                $fourth = array_random($array, 1);
                                $GrabFourth = mysql_query("SELECT FourthRare FROM LotteryControls LIMIT 1");
                                $Today = date();
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $first ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $second ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $third ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $fourth ,'.png" draggable="false">';
                                echo '</br></br>';
                                mysql_query("UPDATE user_lottery SET FirstRare='". $first ."' WHERE user_id = '". $_SESSION['user']['id'] ."'");
                                mysql_query("UPDATE user_lottery SET SecondRare='". $second ."' WHERE user_id = '". $_SESSION['user']['id'] ."'");
                                mysql_query("UPDATE user_lottery SET ThirdRare='". $third ."' WHERE user_id = '". $_SESSION['user']['id'] ."'");
                                mysql_query("UPDATE user_lottery SET FourthRare='". $fourth ."' WHERE user_id = '". $_SESSION['user']['id'] ."'");
                                if(first == GrabFirst AND second == GrabSecond AND third == GrabThird AND fourth == GrabFourth){
                                    echo("Yes!!! Gefeliciteerd {username}! :D Jij bent de beste gokker die ik ooit heb gezien! :-D</br></br>");
                                    $activitypoints = $userData['activity_points'] + $userData['lottery_prize'];
                                    mysql_query("UPDATE users SET activity_points = $activitypoints WHERE id = '".$_SESSION['user']['id']."'");
                                    $reset = $LotControl['StartPrize'];
                                    mysql_query("UPDATE users SET lottery_prize = $reset WHERE id = '".$_SESSION['user']['id']."'");
                                }else{
                                    $amount = '100';
                                    mysql_query("UPDATE `users` SET lottery_prize = lottery_prize + $amount WHERE id = '".$_SESSION['user']['id']."'");
                                    echo("Jammer {username}! Probeer opnieuw!</br></br>");
                                  
                                }
                                }else{
                                  $array = array("bluedrag", "bluefan", "blueicm", "pinkdrag", "pinkfan", "pinkicm", "reddrag", "redicm", "redfan", "dino");
                                //echo implode(" ", array_random($array, 4));
                                //print_r(array_random($array, 4));
                                $first = array_random($array, 1);
                                $second = array_random($array, 1);
                                $third = array_random($array, 1);
                                $fourth = array_random($array, 1);
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $first ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $second ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $third ,'.png" draggable="false">';
                                echo '<img src="{url}/app/tpl/skins/{skin}/images/lottery/', $fourth ,'.png" draggable="false">';
                                echo '</br></br>';
                                mysql_query("INSERT INTO user_lottery (user_id,FirstRare,SecondRare,ThirdRare,FourthRare) Values ('". $_SESSION['user']['id'] ."','". $first . "','". $second . "','". $third . "','". $fourth . "')");
                                if(first == GrabFirst AND second == GrabSecond AND third == GrabThird AND fourth == GrabFourth){
                                    echo("YOU WON</br></br>");
                                    $activitypoints = $userData['activity_points'] + $userData['lottery_prize'];
                                    mysql_query("UPDATE users SET activity_points = $activitypoints WHERE id = '".$_SESSION['user']['id']."'");
                                    $reset = $LotControl['StartPrize'];
                                    mysql_query("UPDATE users SET lottery_prize = $reset WHERE id = '".$_SESSION['user']['id']."'");
                                }else{
                                    $amount = '2000';
                                    mysql_query("UPDATE `users` SET lottery_prize = lottery_prize + $amount WHERE id = '".$_SESSION['user']['id']."'");
                                    echo("Jammer {username}! Probeer opnieuw!</br></br>");
                                }
                                }
                                }else{
                                    echo "log uit de client</br></br>";
                                }
                                }
                                }
                               
         ?>
</div>
</div>
<?php include('includes/footer.php'); ?>

</div>
<div id="profile" style="display:none;">
<div class="close" onclick="hideprofile();"></div>
</div>
<script>
	function profileshow(userid)
	{
		loadProfile(userid);
		document.getElementById('profile').style.display = '';
	}
	
	$("#profile" ).draggable({ scroll: false });
	
	function hideprofile()
	{
		document.getElementById('profile').style.display = 'none';
	}
	
	function loadProfile(userid)
	{
		$("#profile").load("scripts/profile.php?userid=" + userid);
	}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47893135-4', 'auto');
  ga('send', 'pageview');

</script>
</body>
<script type="text/javascript" src="/assets/js/home.js"></script>
<script type="text/javascript" src="/assets/js/popup.js"></script>
</html>