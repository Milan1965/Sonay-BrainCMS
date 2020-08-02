<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function djchat()
	{
		Global $lang, $dbh;
		if (isset($_POST['addsollie']))
		{
			
			
				$username = User::userData('username');
				$AddSollie = $dbh->prepare("INSERT INTO djchat (
				username, 
				experience,
				ip, 
				date
				) VALUES (
				:username, 
				:experience,
				:userip, 
				:time
				)");
				$AddSollie->bindParam(':username', $username);
				$AddSollie->bindParam(':experience', $_POST['experience']);
				$AddSollie->bindParam(':userip', userIp());
				$AddSollie->bindParam(':time', time());
				$AddSollie->execute();
				return html::errorSucces($lang["Dsend"]);
			}
		
	
	}