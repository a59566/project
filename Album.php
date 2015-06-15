<!doctype html>
<?php
	session_start();
	
	$id = $_GET["id"];
	
	$link = mysqli_connect("localhost","root","123456","group_12")
				or die("無法開啟MySQL資料庫連結!<br/>");
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
			
			
	//album_name search
	$album_name_sql = "SELECT `album_name` FROM `album_number` WHERE `album_no`=$id";
	
	$album_name_result = mysqli_query($link, $album_name_sql);
	
	while($row = mysqli_fetch_assoc($album_name_result))
	{
		$album_name = $row["album_name"];
	}
	
	$info_sql = "SELECT * FROM `song` WHERE`ablum`=\"$album_name\"";
	$result = mysqli_query($link, $info_sql);
	
	while($row = mysqli_fetch_assoc($result))
	{
		$album = $row["ablum"];
		$artist = $row["artist"];
		$genre = $row["genre"];
		$img_path = $row["img_path"];
	}
	
	
	
	if(isset($_POST["submit"]))
	{
			
		session_start();
		
		if(strlen($_SESSION["user"])<2)
			header("Location: Login.php");
		
		else
		{
			$_SESSION["item"] = $id;
			header("Location: cart_cookie.php");
		}			
	}
	
?>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title><?=$album_name?></title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Album.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<header>
		<div id="header_background">
			<div id="header_box">
				<div id="header_mark"></div>
				<div id="header_searchbar">
					<form action="">						
						<input id="search_text" value="" type="text" name="search_text" size="50">
						<input id="search_btn" value="" type="submit">						
					</form>
				</div>
                <div id="header_btn">
				<div id="login_btn">
				<a href="Login.html" class="no_underline_light">會員登入</a></div>
				<div id="cart_btn">
				<a href="shoppingcart.php" class="no_underline_light">購物車</a></div>
				</div>	

			</div>
			<div id="header_navi_background">
				<ul id="navi_ul">
					<li><a href="hires.html" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="anime.html" class="no_underline_bold">動畫</a></li>
					<li><a href="cpop.html" class="no_underline_bold">華語</a></li>
					<li><a href="jkpop.html" class="no_underline_bold">日韓</a></li>
					<li><a href="apop.html" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="classical.html" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	
		<div id="album_left">
			<div id="album_content">
				<h1><?=$album_name?></h1>
				<img src="<?="./".$img_path?>" alt="">
				<div id="content_title">
					<div class="content_text">演唱者</div>
					<div class="content_text">曲風</div>
					<div class="content_text">歌曲數</div>
				</div>
				<div id="content_info">
					<div class="content_text"><?=$artist?></div>
					<div class="content_text"><?=$genre?></div>
					<div class="content_text">4</div><!-- temp-->
				</div>
				<a id="sicyou_btn" href="">試聽</a><!-- temp-->
				<form action="<?=$_SERVER["PHP_SELF"]?>" name="form" method="POST">
				<input id="buy_btn" type="submit" name="submit" value="購買">
				</form>							
			</div>
			
				
			<div id="album_track">
			
			<table>		
			<thead><tr>
			<td style="border-left: none;">No</td>
			<td>歌曲名</td>
			<td>演唱者</td>
			</tr></thead><tbody>
		<?php
		
			$id=10; //temp
			
			$result = mysqli_query($link, $info_sql);
			$total_fields = mysqli_num_fields($result);
			$n=1;
			
			while ($row = mysqli_fetch_row($result))
			{
				if(($n-1)%2==0)
					echo "<tr class=\"tr2\">";
				else
					echo "<tr>";
				echo "<td class=\"no\">".$n."</td>";
				for ( $i = 0; $i <= $total_fields-1; $i++ )
				{
				   switch($i)
					{
						case 0:
							echo "<td class=\"title\">".$row[$i]."</td>";
							break;
						case 2:
							echo "<td class=\"artist\">".$row[$i]."</td>";
							break;						
					}				   
				}				
				$n++;

			}
			
			mysqli_free_result($result);
			mysqli_close($link);
		?>			
			</tbody>
			</table>
			</div>
		</div>

	