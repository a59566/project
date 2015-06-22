<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>專輯刪除</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_album_delete.css" rel="stylesheet" type="text/css" />
	
	<?php
		
		session_start();
		
		if(@$_SESSION["user"] != "user")
			echo "非管理者帳號無法使用本頁面!";
		else
		{
			$link = mysqli_connect("localhost","root","123456","group_12")
			or die("無法開啟MySQL資料庫連結!<br/>");
			$msg="";
			$msg2="";
			
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
			
			if(isset($_POST["delete_submit"]))
			{
				$album_name = $_POST["album_name"];
				
				$sql_song = "DELETE FROM `song` WHERE `ablum`=\"$album_name\"";
				$sql_detail = "DELETE FROM `album_detail` WHERE `album_name`=\"$album_name\"";
				
				if( $result_song = mysqli_query($link, $sql_song) ) // 送出查詢的SQL指令
					$msg= "<br><span style='color:#0000FF'>song資料庫 專輯<red>".$album_name."</red>刪除成功!</span>";
				else
					$msg= "<br><span style='color:#FF0000'>song資料刪除失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
				
				if( $result_detail = mysqli_query($link, $sql_detail) ) // 送出查詢的SQL指令
					$msg2= "<br><span style='color:#0000FF'>album_detail資料庫 專輯<red>".$album_name."</red>刪除成功!</span>";
				else
					$msg2= "<br><span style='color:#FF0000'>album_detail資料刪除失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
			}
		
			mysqli_close($link); // 關閉資料庫連結
		
		
		
		
	?>
</head>
<body>
	<header>
	<?php
		
		if(isset($_SESSION["user"]))
		{
			
			$member = $_SESSION["user"];
			
			//管理者按鈕
			if($_SESSION["user"]=="user")
				$login_btn="<a href=\"DATA_UPDATE.php\" class=\"no_underline_light\">管理者</a>";
				
			//普通使用者按鈕
			else
				$login_btn="<a href=\"Logout.php\" class=\"no_underline_light\">登出</a>";
		}
			//未登入按鈕
		else
		{
			$url = $_SERVER['PHP_SELF'];
			$login_btn = "<a href=\"Login.php?url=$url\" class=\"no_underline_light\">會員登入</a>";
		}
			
			
			
			
	?>
	
		<div id="header_background">
			<div id="header_box">
				<a href="index.php"><div id="header_mark"></div></a>
				<div id="header_searchbar">
					<form action="search.php" name="searchform" method="GET" >						
						<input id="search_text" value="" name="search_text" size="50" type="text">						
						<input id="search_btn" value="" type="submit">						
					</form>
				</div>
                <div id="header_btn">
				<div id="login_btn">
				<?=$login_btn?></div>
				<div id="cart_btn">
				<a href="shoppingcart.php" class="no_underline_light">購物車</a></div>
				</div> 	
			</div>
			<div id="header_navi_background">
				<ul id="navi_ul">
					<li><a href="hires.php" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="anime.php" class="no_underline_bold">動畫</a></li>
					<li><a href="cpop.php" class="no_underline_bold">華語</a></li>
					<li><a href="jkpop.php" class="no_underline_bold">日韓</a></li>
					<li><a href="apop.php" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="classical.php" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	<div id="album_delete_container">
		<h1>專輯刪除</h1>
		<form id="delete_form" action="<?=$_SERVER['PHP_SELF']?>" method='POST'>
			<h2>請輸入想要刪除的專輯</h2>
			<input type="text" size="40" name="album_name">
			<input id="delete_btn" type="submit" name="delete_submit" value="確認刪除">
			
		</form>
	<?=$msg?>
	<?=$msg2?>	
	</div>
	
	<?php }?>
	
</body>
</html>


