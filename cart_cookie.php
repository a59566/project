<?php
	session_start();
		
		if(strlen($_SESSION["user"])<2)
			header("Location: Login.php");
		
		else if(isset($_SESSION["user"]))
		{
			$user = $_SESSION["user"];
			$item = $_SESSION["item"];
			
			
			
			//新增cookie
			setcookie($user."[$item]", $item, time()+36000);
			
			header("Location:".$_SERVER["HTTP_REFERER"]);
		}
		
		
	
	

?>