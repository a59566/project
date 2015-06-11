<?php
		
		$link = mysqli_connect("localhost","root","123456","group_12")
		or die("無法開啟MySQL資料庫連結!<br/>");
		
		mysqli_query($link,'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
		
		$sql="insert into member values ('" . 
			$_POST["user"] . "','" . 
			$_POST["pass"] . "','" . 
			$_POST["email"]."')";
		
		
		if ( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
			echo "<span style='color:#0000FF'>資料新增成功!<br>影響記錄數: ". mysqli_affected_rows($link) . "筆</span>";
		else
			echo "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";

		
		mysqli_close($link);
		
		header('Location:Product_Page.html');
?>