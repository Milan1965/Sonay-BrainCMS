<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function djSolli()
	{
		Global $lang, $dbh;
		if (isset($_POST['addsollie']))
		{				
			
			
				$username = User::userData('username');
				$AddSollie = $dbh->prepare("INSERT INTO djsolli (
				username, 
				realname, 
				discord, 
				age, 
				ervaring, 
				jou,  
				ip, 
				date
				) VALUES (
				:username, 
				:realname, 
				:discord, 
				:age, 
				:ervaring, 
				:jou,
				:userip, 
				:time
				)");
				$AddSollie->bindParam(':username', $username);
				$AddSollie->bindParam(':realname', $_POST['realname']);
				$AddSollie->bindParam(':discord', $_POST['discord']);
				$AddSollie->bindParam(':age', $_POST['age']);
				$AddSollie->bindParam(':ervaring', $_POST['ervaring']);
				$AddSollie->bindParam(':jou', $_POST['jou']);
				$AddSollie->bindParam(':userip', userIp());
				$AddSollie->bindParam(':time', time());
				$AddSollie->execute();
				return html::errorSucces($lang["Ssend"]);
			}
		
	
	}