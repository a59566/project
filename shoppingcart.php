<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>shoppingcart</title>
</head>
<body>
	<?php
	
	
	while(list($name, $value) = each($_COOKIE[0]))
	{
		if($name == "id")
			$item_arry["id"] = $value;
		
			//temp
			echo $item_arry["id"];
		
		for($i=0; $i<count($_COOKIE[0]); $i++)
			if($name == "item_$i")
			{
				$item_arry["item_$i"] = $value;
				
				//temp
				echo $value;
			}
			
	}
	
	/*
	while(list($arr, $value) = each($_COOKIE))
	{
		if(isset($_cookie[$arr]) && is_array($_COOKIE[$arr]))
		{
			while(list($name, $value) = each($_COOKIE[$arr]))
			{
				if($name == "id")
					$item_arry["id"] = $value;
				
					//temp
					echo $item_arry["id"];
				
				for($i=0; $i<count($_COOKIE[$arr]); $i++)
					if($name == "item_$i")
					{
						$item_arry["item_$i"] = $value;
						
						//temp
						echo $value;
					}
					
			}
			
		}		
	}
	*/
	
	?>
</body>
</html>
