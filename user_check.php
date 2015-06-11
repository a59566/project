<?php
	$user = trim($_POST['user']) ;
	
	if(strlen($user)<2)
		echo "請輸入2個以上的字元";
	
	else
	{
		$link = mysqli_connect("localhost","root","123456","group_12")
		or die("無法開啟MySQL資料庫連結!<br>");

		$sql = "SELECT * FROM member where user='$user'";

		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

		if ( $result = mysqli_query($link, $sql) ) 
		{
			if( $row = mysqli_fetch_assoc($result) ) 
				echo "此帳號已存在!";

			else
				echo "<font color='blue'>此帳號可以使用!</font>";
			
			mysqli_free_result($result);
		}

		mysqli_close($link);
	}
?>