<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function staffApplication()
	{
		Global $lang, $dbh;
		if (isset($_POST['addsollie']))
		{
			
			
				switch ($_POST['functie']) {
					case 1:
					$functieName = "Proef Moderator";
					break;
					case 2:
					$functieName = "EventTeam Proeflid";
					break;
					case 3:
					$functieName = "BouwTeam ProefLid";
					break;
					case 4:
					$functieName = "SpamTeam ProefLid";
					break;
					case 5:
					$functieName = "Pixel Team ProefLid";
					break;
					case 6:
					$functieName = "DJ Team ProefLid";
					break;
				}
				$username = User::userData('username');
				$AddSollie = $dbh->prepare("INSERT INTO staffapplication (
				echtenaam, 
				realname, 
				skype, 
				age, 
				functie, 
				number, 
				experience, 
				quarrel, 
				serious,
				improve,
				) VALUES (
				:echtenaam, 
				:realname, 
				:skype, 
				:age, 
				:functie, 
				:number, 
				:experience, 
				:quarrel, 
				:serious,
				:improve,
				)");
				$AddSollie->bindParam(':echtenaam', $echtenaam);
				$AddSollie->bindParam(':realname', $_POST['realname']);
				$AddSollie->bindParam(':skype', $_POST['skype']);
				$AddSollie->bindParam(':age', $_POST['age']);
				$AddSollie->bindParam(':functie', $functie);
				$AddSollie->bindParam(':number', $_POST['number']);
				$AddSollie->bindParam(':experience', $_POST['experience']);
				$AddSollie->bindParam(':quarrel', $_POST['quarrel']);
				$AddSollie->bindParam(':serious', $_POST['serious']);
				$AddSollie->bindParam(':improve', $_POST['improve']);
				$AddSollie->execute();
				return html::errorSucces($lang["Ssend"]);
			}
		
	
	}
?>