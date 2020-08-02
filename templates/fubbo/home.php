
<script src="/cdn-cgi/apps/head/j5HqDPOv6rUTYnmauNsYRJt4pF4.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-146894386-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146894386-3');
</script>
<script>
function updateContent() {
    $.get("https://<?= $config['hotelName'] ?>.nl/online_aantal", function(data) { 
        $("#online").html( data );
    });
}

setInterval(updateContent, 30000);
</script>
<meta charset="utf-8">
<meta name="description" content="<?= $config['hotelName'] ?> is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
<link rel="canonical" href="https://<?= $config['hotelName'] ?>.nl" />
<meta property="og:site_name" content="<?= $config['hotelName'] ?>.nl">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?= $config['hotelName'] ?>.nl/">
<meta property="og:title" content="<?= $config['hotelName'] ?>.nl">
<meta property="og:description" content="<?= $config['hotelName'] ?> is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!" />
<meta property="og:image" content="https://raw.githubusercontent.com/KnAWLeDGE/Foxtrot/master/discordrich_small.png" />
<meta name="twitter:title" content="<?= $config['hotelName'] ?>.nl">
<meta name="twitter:description" content="<?= $config['hotelName'] ?> is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
<meta name="twitter:image" content="https://raw.githubusercontent.com/KnAWLeDGE/Foxtrot/master/discordrich_small.png">
<meta name="twitter:site" content="@Play<?= $config['hotelName'] ?>">
<meta name="twitter:creator" content="@DavidozGames">
<meta name="author" content="David Vos" />
<meta name="copyright" content="Copyright © David Vos dwvos.nl" />
<meta name="viewport" content="initial-scale=1">
<title><?= $config['hotelName'] ?>: Me</title>
 
			<link type="text/css" href="/templates/fubbo/css/style.css?1595705648" rel="stylesheet">
			<link type="text/css" href="/templates/fubbo/css/settings.css" rel="stylesheet">
			<script type="text/javascript" src="/Assets/js/global/jquery.min.js"></script>
			<script type="text/javascript" src="/Assets/js/global/jquery-ui.min.js"></script>
			<script type="text/javascript" src="/Assets/js/global/script.js?1595705648"></script>
			<script type="text/javascript" src="/Assets/js/global/social.js"></script>
            <?php
include "includes/header_scripts.php"
?>
    <script>
        var SimpleCMS = {
            avatar: 'https://habbo.city/habbo-imaging/avatarimage',
            maxtags: '25'
        }
    </script>
<html>
<head>
    <title><?= $config['hotelName'] ?>: Milaan</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <link type="text/css" href="/templates/fubbo/css/profile.css?v=9" rel="stylesheet">
        <!--<div class="col-12">
			<div id="shadow-box" style="background-color:#52be80;height: 60px;">
					<div class="title-box png20">
						<center>
							<div class="desc"><font color="white" style="color: white"><b>Feit van de dag</b> Wist jij al dat Nathanmoore & Harmke ongeveer 600 hartjes per dag naar elkaar sturen?! Klef hoor!</font></div>
						</center>
					</div>
			</div>
		</div>-->
        <div class="col-6">
            <div id="shadow-box" class="profile" style="min-height: 330px;">
                <div class="bg" style="min-height: 330px;"></div>
                <div class="overlay" style="min-height: 330px;">
                    <div class="avatar-image" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look') ?>&size=l&head_direction=2&gesture=sml)"></div>

                    <div class="username">Hey, <?= User::userData('username') ?></div>
                    <div class="motto"></div>

                    <div class="last-online">
					<b><img src="/templates/fubbo/img/credits.png" width="15px"> <?= User::userData('credits') ?></b> <br>
					<b><img src="/ruilwaarde/bc.png" width="15px"><?= User::userData('activity_points') ?></b> <br>
					<b><img src="/templates/fubbo/img/diamonds.png" width="14px" title="SS Punten"> <?= User::userData('vip_points') ?></b> <br>
					<b><img src="/templates/fubbo/img/ltdpunt.png" width="14px" title="LTD Punten"> 0</b> <br>
					<b>Jouw motto: </b><?= User::userData('motto') ?></div>
                </div>
                <div style="clear:both"></div>
            </div>
				
				<!--<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#388E3C;background-image:url(/templates/fubbo/img/eventsheader.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Evenementen</font></div>
						<div class="desc2"><font color="white">Geplande evenementen in <?= $config['hotelName'] ?></font></div>
					</div>
					<div class="png20 stataantal">
                    
						<table>
							<b>	<strong>
									<tr>
										<td style="width: 10%;"><b>ID</b></td>
										<td style="width: 40%;"><b>Naam</b></td>
										<td style="width: 10%;"><b>Door</b></td>
										<td style="width: 20%;"><b>Datum</b></td>
									</tr>
								</strong>
								</b>
							<tbody class="stataantal">
										<td>1</td>
										<td style="width: 13%;">N/A</td>
										<td style="width: 25%;">N/A</td>
										<td style="width: 25%;">N/A</td>
							</tbody>
						</table>
					    					</div>
				</div>-->
				
		<div class="row">
			<div class="col-6">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/fubbo/img/comm.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Yabbis v/d Maand</font></div>
						<div class="desc2"><font color="white">Wie steelt deze maand de spotlight?</font></div>
					</div>
					<div class="png20">
                    

						<div class="row">
						    <div class="col-4" style="border-radius: 5px; width: 40%; height: 100%; background-image: url(https://i.imgur.com/MvEj60t.png),url(https://i.imgur.com/vfXIj9Z.png),linear-gradient(to bottom,#26BAFF,#26BAFF); background-repeat: no-repeat,repeat-x,no-repeat; background-size: auto,auto,100% 100%; background-position: top center,bottom,left top; line-height: 130px; text-align: center; margin: 0 auto; -webkit-transition: all 2s ease; -moz-transition: all 2s ease; -ms-transition: all 2s ease; -o-transition: all 2s ease; transition: all 2s ease; position: absolute;">
								<img style="padding-top: 10;" src="https://habbo.city/habbo-imaging/avatarimage?figure=cc-3158-110.wa-2007-0.ha-1004-1195.fa-570698-1195.sh-290-1195.hr-100-0.lg-275-89.hd-3092-24.ch-215-83&direction=2&head_direction=2&gesture=sml" onmouseover="this.src='https://habbo.city/habbo-imaging/avatarimage?figure=ea-3148-1194-110.lg-275-110.cc-3917-62.sh-3035-62.hr-841-1055.hd-190-3.ch-255-1194&direction=2&head_direction=2&gesture=sml&action=wav'" onmouseout="this.src='https://habbo.city/habbo-imaging/avatarimage?figure=ea-3148-1194-110.lg-275-110.cc-3917-62.sh-3035-62.hr-841-1055.hd-190-3.ch-255-1194&direction=2&head_direction=2&gesture=sml'">
							</div>
							<div class="col-7" style="min-height:150px;margin-left: 20px;">
								<table style="margin-left: 70px; padding-top: 6px;">
									<tr style="padding: 0;">
										<td><strong><a class="stataantal" href="/home/Reflesh" style="text-decoration:none;color:#424251;">Reflesh</a><img style="margin-left: 4px;height:12px;padding-top: 3;" src="/Assets/img/offline.png"></strong><br>
										<span class="stataantal afronden2">Gefeliciteerd </span>
										</td>
									</tr>
								</table>
							</div>
						</div>					</div>
				</div>
			</div>
			<div class="col-6">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#f39c12;background-image:url(/templates/fubbo/img/bouwen.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Bouwer v/d Week</font></div>
						<div class="desc2"><font color="white">Wie is de <?= $config['hotelName'] ?> Bouwer?</font></div>
					</div>
					<div class="png20">
                    
						<div class="row">
						    <div class="col-4" style="border-radius: 5px; width: 40%; height: 100%; background-image: url(https://i.imgur.com/MvEj60t.png),url(https://i.imgur.com/vfXIj9Z.png),linear-gradient(to bottom,#26BAFF,#26BAFF); background-repeat: no-repeat,repeat-x,no-repeat; background-size: auto,auto,100% 100%; background-position: top center,bottom,left top; line-height: 130px; text-align: center; margin: 0 auto; -webkit-transition: all 2s ease; -moz-transition: all 2s ease; -ms-transition: all 2s ease; -o-transition: all 2s ease; transition: all 2s ease; position: absolute;">
								<img style="padding-top: 10;" src="https://habbo.city/habbo-imaging/avatarimage?figure=hd-600-1.lg-6050208-110.ch-665-92.hr-3012-31.he-3218-62.cp-3120-62.ha-1002-73.sh-725-92.ea-9036-110-62.wa-9211528-93-62&direction=2&head_direction=2&gesture=sml" onmouseover="this.src='https://habbo.city/habbo-imaging/avatarimage?figure=hd-600-1.lg-6050208-110.ch-665-92.hr-3012-31.he-3218-62.cp-3120-62.ha-1002-73.sh-725-92.ea-9036-110-62.wa-9211528-93-62&direction=2&head_direction=2&gesture=sml&action=wav'" onmouseout="this.src='https://habbo.city/habbo-imaging/avatarimage?figure=hd-600-1.lg-6050208-110.ch-665-92.hr-3012-31.he-3218-62.cp-3120-62.ha-1002-73.sh-725-92.ea-9036-110-62.wa-9211528-93-62&direction=2&head_direction=2&gesture=sml'">
							</div>
							<div class="col-7" style="min-height:150px;margin-left: 20px;">
								<table style="margin-left: 70px; padding-top: 6px;">
									<tr style="padding: 0;">
										<td><strong><a class="stataantal" href="/home/Artemis" style="text-decoration:none;color:#424251;">Artemis</a><img style="margin-left: 4px;height:12px;padding-top: 3;" src="/Assets/img/offline.png"></strong><br>
										<span class="stataantal afronden2">Status under construction</span>
										</td>
									</tr>
								</table>
							</div>
						</div>					</div>
				</div>
			</div>
		</div>
				<div id="shadow-box" style="max-height:100%">
                        <div class="box">
                <a class="twitter-timeline" data-dnt="true" 
                   href="https://twitter.com/play<?= $config['hotelName'] ?>" height="400">Laden...</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </div>
            				</div>
        </div>
        <div class="col-6">
				<!--<div id="shadow-box" style="background-color:#ef5350;background-image:url(/templates/fubbo/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/game" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title2">
						<font color="white" style="color: white;font-size: 175%">
						<?= $config['hotelName'] ?> is in onderhoud</font></div>
						<div class="desc2"><font color="white" style="color: white">Momenteel staat de onderhoud-modus aan, gegevens worden niet opgeslagen.</font></div>
					</div>
					</a>
				</div>-->
				<div id="shadow-box" style="background-color:#52be80;background-image:url(/templates/fubbo/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/game" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Naar <?= $config['hotelName'] ?></font></div>
						<div class="desc"><font color="white" style="color: white">en speel met alle andere <?= Game::usersOnline() ?> <?= $config['hotelName'] ?> spelers!</font></div>
					</div>
					</a>
				</div>
				
				<div id="news-content">
                    
				<!--<a href="/news/159/competitie-rad-van-fortuin-11" style="text-decoration:none">
					<div class="news-article show" style="background-image: url('.filter($news["image"]).');">
						<div class="shadow"></div>
						<div class="news-content">
							<div class="news-title">Competitie: Rad van Fortuin #11</div>
							<div class="news-short-text">Ben jij de gelukkige?</div>
						</div>

						<div class="details-box">
							<div class="back-news stataantal"><i class="fal fa-newspaper"></i></div>
						</div>
					</div>
				</a>!-->

                <?php
					$sql = $dbh->prepare("SELECT id,title,image,shortstory FROM cms_news ORDER BY id DESC LIMIT 1");
					$sql->execute();
					while ($news = $sql->fetch())
					{
						echo'
						<a href="/news/'.filter($news["id"]).'" style="text-decoration:none">
					<div class="news-article show" style="background-image: url('.filter($news["image"]).');">
						<div class="shadow"></div>
						<div class="news-content">
							<div class="news-title">'.filter($news["title"]).'</div>
							<div class="news-short-text">'.filter($news["shortstory"]).'</div>
						</div>

						<div class="details-box">
							<div class="back-news stataantal"><i class="fal fa-newspaper"></i></div>
						</div>
					</div>
				</a>';
					}
				?>
					    

				</div>
        				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/fubbo/img/spambox.png);background-repeat: no-repeat;background-position: right;background-size: cover;height: 80px;">
						<div class="title2"><font color="white">Tag Systeem</font></div>
						<div class="desc2"><font color="white">Mijn Tags in <?= $config['hotelName'] ?></font></div>
					</div>
					<div class="png20 stataantal">
                    <div class="error TagError" style="display:none"></div>
                    <center>
                        </center>
                    <div id="addtagpart">
                        <div class="form-group">
                            <input type="text" class="tag-name form-control" name="tag">
                        </div>
                        <div class="form-group">
                            <button id="addtag" class="btn btn-success" style="width:100%">Voeg Toe</button>
                        </div><br>
                        <div class="taghelp">
                            <center>
                                <em>Dit Systeem Is Nog In Ontwikkeling!</em>
                            </center>
                        </div>
                    </div>
                </div>
					</div>
        				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/templates/fubbo/img/disco.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Nodig vrienden uit</font></div>
						<div class="desc2"><font color="white">Nodig jouw vrienden uit naar <?= $config['hotelName'] ?>!</font></div>
					</div>
					<div class="png20 stataantal">
					<img style="float:right;" src="/Assets/img/habbo_friends.png"/>
                    <p class="refer-text">
                        Iedereen wil het natuurlijk gezellig op <?= $config['hotelName'] ?> hebben. En met veel online en al je vrienden
                        in het hotel gaat dat zeker lukken! <br/><br/>
                        Nodig daarom je vrienden uit en ontvang coole cadeau's <br>
                    </p>
                    <a href="/verdienen">
                        <button style="font-size:15px;width:100%" class="btn big green">Meer informatie!</button>
                    </a>
					</div>
				</div>
        </div>
        </div>

<div class="row">
		

    <script type="text/javascript" src="/Assets/js/global/script.js?1595705648"></script>
    <script type="text/javascript" src="/Assets/js/loaders/me.js"></script>
			<div class="col-12">
				<div id="footer-content">
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/regels">Regels</a></li>
						<li><a href="/av">Voorwaarden</a></li>
                        <li><a href="/moderatie">Medewerkers</a></li>
                        <li><a href="/vacatures">Vacatures</a></li>
                        <li><a href="/status">Server Status</a></li>
						<li><a href="https://discord.gg/fxuh7jF">Discord</a></li>
                    </ul>
			<p><?= $config['hotelName'] ?> &copy; 2019 - 2020. Alle rechten voorbehouden.<br />Gemaakt met <b>❤️</b> door Sonay & <a href="/home/David" style="text-decoration:none;color:grey;">David</a> met <b>VoxCMSv2</b>.</p>
                </div>
            </div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script type="text/javascript" src="/radio/htmlplayer.js"></script>
<script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script></div>
    </div>
    </body>
</html>