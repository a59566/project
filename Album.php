<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
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
				<a href="" class="no_underline_light">購物車</a></div>
				</div>	

			</div>
			<div id="header_navi_background">
				<ul id="navi_ul">
					<li><a href="" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="" class="no_underline_bold">動畫</a></li>
					<li><a href="" class="no_underline_bold">華語</a></li>
					<li><a href="" class="no_underline_bold">日韓</a></li>
					<li><a href="" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	
		<div id="album_left">
			<div id="album_content">
				<h1>七転八起☆至上主義！</h1>
				<img src="./img/cover/Cover.jpg" alt="">
				<div id="content_title">
					<div class="content_text">演唱者</div>
					<div class="content_text">曲風</div>
					<div class="content_text">歌曲數</div>
					<div class="content_text">音質</div>
				</div>
				<div id="content_info">
					<div class="content_text">KOTOKO</div>
					<div class="content_text">Anime</div>
					<div class="content_text">4</div>
					<div class="content_text">320kbps MP3</div>
				</div>
			</div>
			<div id="album_track">
			<table>
		<?php
			$link = mysqli_connect("localhost","root","123456","group_12")
				or die("無法開啟MySQL資料庫連結!<br/>");
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
			
			$sql = "SELECT `track_title`,`artist`,`price`FROM `song` WHERE `id`=0";
			
			$result = mysqli_query($link, $sql);
			echo "<thead><tr>
			<td style=\"border-left: none;\">No</td>
			<td>試聽</td>
			<td>歌曲名</td>
			<td>演唱者</td>
			<td>價格</td>
			<td>　</td>
			</tr></thead>";
			$total_fields = mysqli_num_fields($result);
			
			$n=1;
			$tr_n=0;
			echo "<tbody>";
			while ($row = mysqli_fetch_row($result)) 
			{
				if($tr_n%2==0)
					echo "<tr class=\"tr2\">";
				else
					echo "<tr>";
				echo "<td class=\"no\">".$n."</td>
					<td></td>";
				for ( $i = 0; $i <= $total_fields-1; $i++ )
				{
				   switch($i)
					{
						case 0:
							echo "<td class=\"title\">".$row[$i]."</td>";
							break;
						case 1:
							echo "<td class=\"artist\">".$row[$i]."</td>";
							break;					
						case 2:
							echo "<td class=\"price\">".$row[$i]."</td>";
							break;
					}
				   
				}
				echo "<td></td></tr>";
				$n++;
				$tr_n++;
			}
			echo "</tbody>";
			mysqli_free_result($result);

			mysqli_close($link);
		?>			
			<tfoot>
				<tr>
					<td colspan="6" id="table_foot">
						<input id="selected_buy" type="submit" value="購買已選擇的商品">
					</td>
				</tr>
			</tfoot>
			</table>
			</div>
		</div>

	