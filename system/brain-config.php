<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	
	/* Database Setting */
	$db['host'] = '127.0.0.1'; //Mysql's Host
	$db['port'] = '3306'; //Mysql's port
	$db['user'] = "root"; //Mysql's user
	$db['pass'] = 'root'; //Mysql's password
	$db['db'] = "habnr"; //Mysql's database
	
	/* Emu Settings */
	$config['hotelEmu'] = 'plusemu'; // plusemu // arcturus

	/* Client Setting */
	$hotel['emuHost'] = "54.37.244.196"; //IP of VPS//IP of Proxy
	$hotel['emuPort'] = "443";  //Port of VPS//Port of Proxy
	$hotel['staffCheckClient'] = false; //Enable the staff pin in the client (true) or disable it (false)
	$hotel['staffCheckClientMinimumRank'] = 3; //Minium staff rank to get the staff pin in the client
	$hotel['homeRoom'] = '3334'; //Set the start room when you get in the hotel
	$hotel['external_Variables'] = "http://localhost/bibliotheek/gamedata/acc_head_U_excited.txt";
	$hotel['external_Variables_Override'] = "http://localhost/bibliotheek/gamedata/override/acc_head_U_angry.txt";
	$hotel['external_Texts'] = "http://localhost/bibliotheek/gamedata/acc_head_U_antenna.txt";
	$hotel['external_Texts_Override'] = "http://localhost/bibliotheek/gamedata/override/acc_head_U_happy.txt";
	$hotel['productdata'] = "http://localhost/bibliotheek/gamedata/acc_head_U_bobba.txt";
	$hotel['furnidata'] = "http://localhost/bibliotheek/gamedata/furnidata.xml";
	$hotel['figuremap'] = "http://localhost/bibliotheek/gamedata/figuremap.xml";
	$hotel['figuredata'] = "http://localhost/bibliotheek/gamedata/acc_head_U_lamee.xml";
	$hotel['swfFolder'] = "http://localhost/bibliotheek/gordon/PRODUCTION-201601012205-226667486";
	$hotel['swfFolderSwf'] = "http://localhost/bibliotheek/gordon/PRODUCTION-201601012205-226667486/yabbisclient.swf?v=945";
	$hotel['onlineCounter'] = true; // Enable the user count in the client.
	$hotel['diamonds.enabled'] = true; // Enable diamonds in the hotel.
	
	/* Website Setting */
	$config['hotelUrl'] = "http://localhost";//Address of your hotel. Does not end with a "/"
	$config['skin'] = "david_vox"; //Skin/template of your website
	$config['lang'] = "nl"; //Language of your website en/nl/es
	$config['hotelName'] = "RetroTalk"; //Name of your hotel
	$config['favicon'] = "http://localhost/favi.ico";
	$config['staffCheckHk'] = false; //Enable the staff pin in the housekeeping (true) or disable it (false)
	$config['staffCheckHkMinimumRank'] = 3; //Minium staff rank to get the staff pin in the housekeeping
	$config['maintenance'] = false; //Enable the maintenance of your website (true) or disable it (false)
	$config['maintenancekMinimumRankLogin'] = 3; //Minium staff rank to login when the website is in maintenance
	$config['groupBadgeURL'] = "http://localhost/swf/habbo-imaging/badge.php?badge=";
	$config['badgeURL'] = "http://localhost/bibliotheek/c_images/album1584/"; 
	$config['userLikeEnable'] = true; // Enable user likes 
	$config['newsCommandEnable'] = true; //Enable news commands
	$config['newsCommandFilter'] = true; //Enable wordfilter on news commands (the filter use the db tabels wordfilter and wordfilter_characters)
	$config['alertReferrer'] = false;
	$config['alert'] = ''; //Alert message. If you don't want a alert, you do leave it blank.
	$config['brainversion'] = '1.8.0'; // Please do not change.
	
	/* Hit of the week Settings */
	$config["hvdwStatus"] = true; // True of false for the hit of the week.
	$config["hvdwNumber"] = "3tmd-ClpJxA"; // Youtube code without https://www.youtube.com/watch?v= 
	
	/* Facebook Login Settings
		You need a Facebook app for this to work go to
		https://developers.facebook.com/apps/ */
	 
	$config['facebookLogin'] = true; //Enable the Facebook login (true) or disable it (false)
	$config['facebookAPPID'] = '1061492540619936';
	$config['facebookAPPSecret'] = 'e3bc5160cdd04ae9306ff9df6fde9f59';
	
	/* Email Settings */
	$email['mailServerHost'] = 'smtp.gmail.com';
	$email['mailServerPort'] = 587;
	$email['SMTPSecure'] = 'TLS';
	$email['mailUsername'] = 'gmail@gmail.com';
	$email['mailPassword'] = '*****';
	$email['mailLogo'] = 'http://localhost/templates/brain/style/images/logo/logo.png';
	$email['mailTemplate'] = '/system/app/plugins/PHPmailer/temp/resetpassword.html';
	
	/* Social settings */
	$config['facebook'] = 'https://www.facebook.com/Habbo/';
	$config['facebookEnable'] = false;
	$config['twitter'] = 'https://twitter.com/Habbo';
	$config['twitterEnable'] = false;
	
	/* Register Setting */
	$config['startMotto'] = "Nieuweling in Yabbis"; //Regsiter start motto
	$config['credits']	= "500000";
	$config['duckets']	= "250000";
	$config['diamonds']	= "10";
	$config['diamondsRef']	= "10";
	$config['registerEnable'] = true;
	
	/* Google recaptcha Site Key  
	   Go to this website to create a recaptcha Site Key: https://www.google.com/recaptcha/intro/index.html	*/
	   $config['recaptchaSiteKey'] = "6LdzewwUAAAAABkJ3vsdfCDca9qmLGDaWAHqMRtFEs2";
	$config['recaptchaSiteKeyEnable'] = false;
	
	/* Buy VIP Settings */
	$config['vipCost'] = "25";
	$config['vipRankToGet'] = "3";
	$config['vipBadge'] = "vip";
	
	
	switch($config['hotelEmu'])
	{
		case "arcturus":
		$emuUse['user_wardrobe']  = 'users_wardrobe ';
		$emuUse['ip_last'] = 'ip_current';
		$emuUse['respect'] = 'respects_received';
		$emuUse['user_stats'] = 'users_settings';
		$emuUse['user_stats_user_id'] = 'user_id';
		$emuUse['OnlineTime'] = 'online_time';
		break;
		case "plusemu":
		$emuUse['user_wardrobe']  = 'user_wardrobe ';
		$emuUse['ip_last'] = 'ip_last';
		$emuUse['respect'] = 'Respect';
		$emuUse['respectgiven'] = 'RespectGiven';
		$emuUse['user_stats'] = 'user_stats';
		$emuUse['user_one_id'] = 'user_one_id';
		$emuUse['user_two_id'] = 'user_two_id';
		$emuUse['user_stats_user_id'] = 'id';
		$emuUse['OnlineTime'] = 'OnlineTime';
		$emuUse['AchievementScore'] = 'AchievementScore';
		$emuUse['RoomVisits'] = 'RoomVisits';
		$emuUse['messenger_friendships'] = 'messenger_friendships';
		break;
		default:
		//Nothing
		break;
	}
?>
