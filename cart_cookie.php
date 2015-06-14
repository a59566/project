<?php
	session_start();
	
	if(isset($_SESSION["id"]))
	{
		$id = $_SESSION["id"];
		$item_arry = $_SESSION["item_arry"];
		
		//刪除舊cookie
		if(isset($_COOKIE[$id]))
		{
			while(list($name, $value) = each($_COOKIE[$id]))
				setcookie($id."[".$name."]", "", time()-3600);
			
		}
		
		//新增cookie
		setcookie($id."[id]", $id, time()+3600);
		for($i=0; $i<count($item_arry); $i++)
		{
			$item_index = $item_arry[$i];
			setcookie($id."[item_$i]", $item_index, time()+3600);
		}
		header("Location: shoppingcart.php");
	}

?>