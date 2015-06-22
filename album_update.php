<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>專輯新增</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_album_update.css" rel="stylesheet" type="text/css" />
	
	<?php
		
		session_start();
		
		if(@$_SESSION["user"] != "user")
			echo "非管理者帳號無法使用本頁面!";
		else
		{
			$link = mysqli_connect("localhost","root","123456","group_12")
			or die("無法開啟MySQL資料庫連結!<br/>");
			$msg="";
			$msg_2="";
			$msg_3="";
			$cnt=0;
			
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
			
			if(isset($_POST["submit"]))
			{
				//封面上傳
				if(file_exists("img/".$_FILES['cover']['name']))
					$msg_3="<br><span style='color:#FF0000'>已有相同檔名之封面，或沒有選擇封面，請重新檢查後上傳</span>";
				else
				{
					move_uploaded_file($_FILES['cover']['tmp_name'],"img/" . $_FILES['cover']['name']);
					$img_path = "img/". $_FILES['cover']['name'];
					
					
					//song
					for($i=1;$i<=15;$i++)
					{
						if(strlen($_POST["track_title_{$i}"])>=1)
						{
							if(strlen($_POST["artist_{$i}"])>=1)
							{
								$sql="insert into song values ('" . 
									$_POST["track_title_{$i}"] . "','" . 
									$_POST["ablum"] . "','" . 
									$_POST["artist_{$i}"]. "','" . 
									$_POST["genre"]. "','" . 
									$_POST["price"]. "','" . 
									$img_path ."')";
							}
					
							else
							{
								$sql="insert into song values ('" . 
									$_POST["track_title_{$i}"] . "','" . 
									$_POST["ablum"] . "','" . 
									$_POST["artist"]. "','" . 
									$_POST["genre"]. "','" . 
									$_POST["price"]. "','" . 
									$img_path ."')";
							}
								
							if( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
							{
								$cnt++;
								$msg= "<span style='color:#0000FF'>song資料".$cnt."筆新增成功!<br>影響記錄數: ".$cnt."筆</span>";
							}
								
							else
								$msg= "<span style='color:#FF0000'>song資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
					
							
						
							
						}
						else
							break;
					}
					
					//album_detail
					$sql_2="insert into album_detail values ('" . 
									$_POST["id"] . "','" . 
									$_POST["ablum"] . "','" . 
									$_POST["sicyou"]. "','" . 
									$_POST["download"]. "','" . 
									$_POST["album_price"]."')";
					if( $result_2 = mysqli_query($link, $sql_2) ) // 送出查詢的SQL指令
						$msg_2= "<br><span style='color:#0000FF'>album_detail資料1筆新增成功!<br>影響記錄數: 1 筆</span>";		
					else
						$msg_2= "<br><span style='color:#FF0000'>album_detail資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
				}
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
	<div id="album_update_container">
		<h1>專輯新增</h1>
		<form id="update_form" name='form' action='<?=$_SERVER['PHP_SELF']?>' method='POST' style="line-height: 28px;"  enctype='multipart/form-data'>
				
				專輯名:　
				<input type='text' name='ablum'>　　　專輯ID:　<input type="text" name='id'>
				<br>				
				演唱者:　
				<input type="text" name='artist'>　　　試聽:　　<input type="text" name='sicyou'>
				<br>
				曲風:　　
				<input type='text' name='genre'>　　　下載:　　<input type='text' name='download'>
				<br>
				單曲價:　
				<input type='text' name='price'>　　　專輯價:　<input type='text' name='album_price'>
				<br>
				封面:　　<input type="file" name="cover">　
				<br><br>
				
				
			曲目01:　<input type='text' name='track_title_1' size="25">　
			個別演唱者:　<input type='text' name='artist_1' size="25">
			<br/>
			曲目02:　<input type='text' name='track_title_2' size="25">　
			個別演唱者:　<input type='text' name='artist_2' size="25">
			<br/>
			曲目03:　<input type='text' name='track_title_3' size="25">　
			個別演唱者:　<input type='text' name='artist_3' size="25">
			<br/>
			曲目04:　<input type='text' name='track_title_4' size="25">　
			個別演唱者:　<input type='text' name='artist_4' size="25">
			<br/>
			曲目05:　<input type='text' name='track_title_5' size="25">　
			個別演唱者:　<input type='text' name='artist_5' size="25">
			<br/>
			曲目06:　<input type='text' name='track_title_6' size="25">　
			個別演唱者:　<input type='text' name='artist_6' size="25">
			<br/>
			曲目07:　<input type='text' name='track_title_7' size="25">　
			個別演唱者:　<input type='text' name='artist_7' size="25">
			<br/>
			曲目08:　<input type='text' name='track_title_8' size="25">　
			個別演唱者:　<input type='text' name='artist_8' size="25">
			<br/>
			曲目09:　<input type='text' name='track_title_9' size="25">　
			個別演唱者:　<input type='text' name='artist_9' size="25">
			<br/>
			曲目10:　<input type='text' name='track_title_10' size="25">　
			個別演唱者:　<input type='text' name='artist_10' size="25">
			<br/>
			曲目11:　<input type='text' name='track_title_11' size="25">　
			個別演唱者:　<input type='text' name='artist_11' size="25">
			<br/>
			曲目12:　<input type='text' name='track_title_12' size="25">　
			個別演唱者:　<input type='text' name='artist_12' size="25">
			<br/>
			曲目13:　<input type='text' name='track_title_13' size="25">　
			個別演唱者:　<input type='text' name='artist_13' size="25">
			<br/>
			曲目14:　<input type='text' name='track_title_14' size="25">　
			個別演唱者:　<input type='text' name='artist_14' size="25">
			<br/>
			曲目15:　<input type='text' name='track_title_15' size="25">　
			個別演唱者:　<input type='text' name='artist_15' size="25">
			<br/><br/>　
			<input class="btn" type='submit' value='資料新增' name="submit">　　　　
			<a class="btn" href="Logout.php">登出</a><br/>			

		</form>
		<?=$msg ?>
		<?=$msg_2?>
		<?=$msg_3?>
	</div>
	<?php }?>
	
</body>
</html>


