<div id="NabBar">        

        <ul>
            <li >
                <a href="/me"><?= User::userData('username') ?></a>
                <ul>
                    <li><a href="/home/<?= User::userData('username') ?>">Mijn Pagina</a></li>
                    <li><a href="/settingsemail">Instellingen</a></li>
                    <li><a href="/logout">Uitloggen</a></li>
                </ul>
            </li>
			
			            <li >
                <a href="/regels">Gemeenschap</a>
                <ul>
                    <li><a href="/regels">Regels</a></li>
					<li><a href="/stats">Statistieken</a></li>
                    <li><a href="/news/<?php
					$id = $dbh->prepare("SELECT id FROM cms_news ORDER BY id DESC LIMIT 1");
					$id->execute();
					while ($idoutput = $id->fetch())
					{
					echo''.filter($idoutput["id"]).'';
					} ?>">Nieuwsartikel</a></li>
                </ul>
            </li>

            <li>
               <a href="/medewerkers">Management</a>
                <ul>
				   <li><a href="/medewerkers">Management</a></li>
                   <li><a href="/moderatie">Moderators</a></li>
                </ul>
            </li>

            <li>
                <a href="/eventteam">Teams</a>
                <ul>
					<li><a href="/eventteam">EventTeam</a></li>
					<li><a href="/spamteam">SpamTeam</a></li>
                    <li><a href="/bouwteam">BouwTeam</a></li>
					<li><a href="/pixelaar">PixelTeam</a></li>
					<li><a href="/dj">DeejayTeam</a></li>
                </ul>
            </li>
			
			<li>
                <a href="/solliciteren">Extra</a>
                <ul>
					<li><a href="/solliciteren">Solliciteren</a></li>
					<li><a href="/online">Online Gebruikers</a></li>
					
                </ul>
            </li>

			    <?php
                if(User::userData('rank') > 6){
                  echo '<li><a href="/adminpan/dash">Housekeeping</a></li>';
                }

                ?>
        </ul>

    </div>