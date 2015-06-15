<?php
	session_start();
	
	if(isset($_SESSION["user"]))
	{
		$user = $_SESSION["user"];
		$item = $_SESSION["item"];
		
		
		
		//新增cookie
		setcookie($user."[$item]", $item, time()+3600);
		
		header("Location: shoppingcart.php");
	}

?>