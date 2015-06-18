<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>登出</title>
</head>
<body>
	<?php
		session_start();		
		session_destroy();
		header("Location:index.php");
		
	?>
</body>
</html>