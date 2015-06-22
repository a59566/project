<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>登出</title>
</head>
<body>
	<?php
		session_start();
		$user=$_SESSION["user"];
		session_destroy();
		header("Location:index.php");
		//刪除舊cookie
		if(isset($_COOKIE[$user]))
		{
			while(list($name, $value) = each($_COOKIE[$user]))
				setcookie($user."[".$name."]", "", time()-36000);					
		}
	?>
</body>
</html>