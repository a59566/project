<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>search</title>

	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
   
	#msg{width: 300px; height: 50px; text-align:center; margin: 50px auto; font-size:20px; color:red;}
	.picture{width:150px;height:150px;}
	.title{width:350px;height:150px;}
	.album{width:250px;height:150px}
	.artist{width: 100px; height: 50px}
	.genre{width:50px;height:150px}
	
	#title_picture{width:150px;height:30px;}
	#title_title{width:350px;height:30px;}
	#title_album{width:250px;height:30px}
	#title_artist{width: 100px; height: 30px}
	#title_genre{width:50px;height:30px}
	
	
	thead{text-align: center;}
	table{margin: 50px auto;  border-collapse: inherit;  border-spacing: 0;}
	img{max-height:150px; max-width:150px;}
	
</style>
</head>

<body>
	<header>
	<?php
		session_start();
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
    <?php

	if($_GET['search_text']=="")
		echo "<div id=\"msg\">請輸入搜索條件!</div>";
	else{
		$search=$_GET['search_text'];

		$link = mysqli_connect("localhost","root","123456","group_12")// 建立MySQL的資料庫連結
        or die("無法開啟MySQL資料庫連結!<br>");

		// 送出編碼的MySQL指令
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");


		// 送出查詢的SQL指令
		if ( $result = mysqli_query($link, "SELECT * FROM song WHERE artist LIKE '%$search%' OR track_title LIKE '%$search%' OR ablum LIKE '%$search%' OR genre LIKE '%$search%'  ") ) 
		{ 
			$total_records=mysqli_num_rows($result);
			if($total_records == 0)
				echo "<div id=\"msg\">未找到符合的搜尋結果!!</div>";
			else{
			
			
			?>
	<table border="1" >
	<thead>
	<tr>
		<td id="title_picture">專輯封面</td>
		<td id="title_title">歌曲名稱</td>
		<td id="title_album">專輯</td>
		<td id="title_artist">演唱者</td>
		<td id="title_genre">類型</td>
	</tr>
	</thead>
	<?php while( $row = mysqli_fetch_assoc($result) ){ 

			 $album_no_sql = "SELECT `album_no` FROM `album_detail` WHERE `album_name`='$row[ablum]'";
			$album_no_result = mysqli_query($link, $album_no_sql);
			while($row2 = mysqli_fetch_assoc($album_no_result))
			{
				$album_no = $row2["album_no"];
			}
	
?>
	
		<tr align="center">
         
         <td class="picture" ><a href='Album.php?id=<?=$album_no?>'><?php echo "<img src='$row[img_path]'/>";?></td>
         <td class="title" ><?php echo $row["track_title"];?></td>
         <td class="album"><?php echo $row["ablum"];?></td>
		 <td class="artist"><?php echo $row["artist"];?></td>
		 <td class="genre"><?php echo $row["genre"];?></td>
		 </tr>
		 
        
    
	<?php
	} 
		mysqli_free_result($result); // 釋放佔用的記憶體 
		mysqli_close($link); // 關閉資料庫連結
	} 
	}
	}
	

?>	
</table>
</body>
</html>