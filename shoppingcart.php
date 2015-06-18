<!doctype html>
<?php
	session_start();
	$user = $_SESSION["user"];
	
	
	if(strlen($_SESSION["user"])<2)
		header("Location: Login.php");
		
	
	if(isset($_POST["submit"]))
		$display="display:none;";
	else
		$display="display:block;";
	
	if(!(isset($_COOKIE["$user"])))
		$display="display:none;";
	
?>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_ShoppingCart.css" rel="stylesheet" type="text/css" />
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
	<div id="cart" style="<?= $display?>">
		<table>		
		<thead><tr>
		<td style="border-left: none;">No</td>
		<td colspan="2">專輯</td>
		<td>價格</td>
		</tr></thead><tbody>
	<?php
		
		
		
				
		
		$n=1;
		$total=0;

		foreach ($_COOKIE["$user"] as $id) 
		{
				
			//資料庫
			$link = mysqli_connect("localhost","root","123456","group_12")
					or die("無法開啟MySQL資料庫連結!<br/>");
				mysqli_query($link,'SET CHARACTER SET utf8');
				mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
			//album_name search
			$album_name_sql = "SELECT `album_name`,`album_price`,`album_buy` FROM `album_detail` WHERE `album_no`=$id";
			
			$album_name_result = mysqli_query($link, $album_name_sql);
			
			while($row = mysqli_fetch_assoc($album_name_result))
			{
				$album_name = $row["album_name"];
				$price = $row["album_price"];
				$buy_album[] = $row["album_name"];
				$buy_link[] = $row["album_buy"];
			}
			
			$info_sql = "SELECT DISTINCT `img_path`,`ablum` FROM `song` WHERE`ablum`=\"$album_name\"";
			$result = mysqli_query($link, $info_sql);
			$total_fields = mysqli_num_fields($result);
			
			
			while($row = mysqli_fetch_assoc($result))
			{
				$img_path = $row["img_path"];
				$album = $row["ablum"];
			}
			
			
			//顏色間隔
				if(($n-1)%2==0)
					echo "<tr class=\"tr2\">";
				else
					echo "<tr>";
	?>		
				<td style="border-left: none;" class="no"><?=$n?></td>
				<td class="img"><img src="<?=$img_path?>" alt=""></td>			
				<td class="album"><?=$album?></td>
				<td class="price"><?=$price?></td>
			</tr>
	<?php
			$n++;
			$total += $price;
		}
	?>
		</tbody>
		<tfoot>
			<tr>
				<td class="total" colspan="4">總額:　<?=$total?></td>	
			</tr>
		</tfoot>
		</table>

		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<input id="download" name="submit" type="submit" value="購買"></form>
		
	</div>
	<div id="link">
		<?php
			if(isset($_POST["submit"]))
			{
				echo "<h3>謝謝光臨，以下是您的下載連結:</h3>";
				for($i=0; $i<count($buy_album); $i++)					
					echo "<a href=\"$buy_link[$i]\">$buy_album[$i]</a><br>";
				//刪除舊cookie
				if(isset($_COOKIE[$user]))
				{
					while(list($name, $value) = each($_COOKIE[$user]))
						setcookie($user."[".$name."]", "", time()-36000);					
				}
			}
		?>
			
	</div>
</body>
</html>
