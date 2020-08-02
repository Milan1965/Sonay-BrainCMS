<?php staffCheck(); ?>
<meta charset="utf-8">
<link type="text/css" href="/templates/fubbo/css/style.css?v=6" rel="stylesheet">
<link type="text/css" href="/templates/fubbo/css/settings.css" rel="stylesheet">

</script>
		<div id="header-content">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<a href="https://discord.gg/s55FtNa" class="btn discord big check-in-header" target="_blank">Discord <i class="fas fa-external-link-alt"></i></a>
				</div>
				<div class="col-2">
<?php
if(User::userData('rank') > 6){
  echo '<a href="/adminpan/dash" class="btn red big check-in-header">Housekeeping</a>';
}
?>
				</div>
				<div class="col-2">
<?php
if(User::userData('djteam') > 0){
  echo '<a href="/djpaneel" class="btn red big check-in-header">Radiopaneel</a>';
}
?>
				</div>
				<div class="col-6">
					<div class="hotel"></div>

					<div class="online-count-box"><b><?= Game::usersOnline() ?></b> <?= $config['hotelName'] ?>'s online</div>
					
					<a href="http://localhost/client" class="btn green big check-in-header" target="_blank">Naar <?= $config['hotelName'] ?></a>
				</div>
			</div>
		</div>
	</div>
	<div id="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<ul class="user-menu">
						<li>
							<a href="/">
								<div class="user-avatar-menu" style="background-image:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look') ?>&head_direction=2&gesture=sml)"></div><?= User::userData('username') ?><span><i class="far fa-angle-down"></i></span>
							</a>

							<ul class="user-subnavi">
								<li><a href="/profiel/<?= User::userData('username') ?>">Mijn Profiel</a></li>
								<li><a href="/instellingen">Instellingen</a></li>
								<li><a href="/uitloggen" class="logout">Afmelden</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-8">
					<ul class="navigation">
						<li>
							<a href="/community">Community<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/news/<?php
									$id = $dbh->prepare("SELECT id FROM cms_news ORDER BY id DESC LIMIT 1");
									$id->execute();
									while ($idoutput = $id->fetch())
									{
									echo''.filter($idoutput["id"]).'';
									} ?>">Laatste Nieuws</a></li>
								<li><a href="/statistieken">Statistieken</a></li>
								<li><a style="margin-top: 17px;" href="/online">Online <?= $config['hotelName'] ?>'s</a></li>
								<li><a style="margin-top: 17px;" href="/vacatures">Vacatures</a></li>
								<li><a href="https://discord.gg/s55FtNa" target="_blank">Discord <i class="fas fa-external-link-alt"></i></a></li>
								
						  </ul>
						</li>
						<li>
							<a href="#">Medewerkers<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/management">Management</a></li>
								<li><a href="/moderatie">Moderatie</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Teams<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/eventteam">Event Team</a></li>
								<li style="margin-top: 17px;"><a href="/spamteam">Spam Team</a></li>
								<li style="margin-top: 17px;"><a href="/bouwteam">Bouw Team</a></li>
								<li style="margin-top: 17px;"><a href="/palers">Palers</a></li>
								<li><a href="/pixelaars">Pixelaars</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Winkel<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/ruilwaarde">Ruilwaarde</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Radio (Soon)<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="#">Verzoeklijn</a></li>
								<li><a href="#">Rooster</a></li>
								<li><a href="#" target="_blank">Website <i class="fas fa-external-link-alt"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
<style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
