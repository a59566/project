<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>search</title>

	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Album.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
   
	
	.content{width: 355px; color: 6FF;}
	.picture{width:200px;height:200px;}
	.track_title{width:350px;height:200px;}
	.ablum{width:250px;height:200px}
	
	.genre{width:50px;height:200px}
	.price{width:30px;
	text-align: center;}
	table{margin: 50px auto;}
</style>
</head>
<script type="text/javascript">
		function check()
		{
			if(document.form1.submit.value == "")
			{
				alert ('請輸入搜索值！'); 
				return false;
			}
				
		}		
	</script>
<body>
	<header>
		<div id="header_background">
			<div id="header_box">
				<div id="header_mark"></div>
				<div id="header_searchbar">
					<form name='form1' method='GET' action="<?=$_SERVER['PHP_SELF']?>" >							
						<input id="search_text" value="" type="text" name="search_text" size="50">
						<input id="search_btn" value="搜尋" type="submit" name="submit" onclick='check();'>					
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
					<li><a href="hires.html" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="anime.html" class="no_underline_bold">動畫</a></li>
					<li><a href="cpop.html" class="no_underline_bold">華語</a></li>
					<li><a href="jkpop.html" class="no_underline_bold">日韓</a></li>
					<li><a href="apop.html" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
    <?php
//if(isset($_GET['submit']))
//{
$search=$_GET['search_text'];
//$picture=$row['img_path'];
$link = mysqli_connect("localhost","root","123456","group_12")// 建立MySQL的資料庫連結
        or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");


// 送出查詢的SQL指令
if ( $result = mysqli_query($link, "SELECT * FROM song WHERE artist LIKE '%$search%' OR track_title LIKE '%$search%' OR ablum LIKE '%$search%' OR genre LIKE '%$search%'  ") ) { 
    


	
	
	?>
	<table border="1" >
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
         <td  class="album_content"><?php echo $row["ablum"];?></td>
		 <td  class="artist"><?php echo $row["artist"];?></td>
		 <td  class="genre"><?php echo $row["genre"];?></td>
		 <td  class="price"><?php echo $row["price"];?></td>
		 </tr>
		 
        
    
	<?php
	} 
    mysqli_free_result($result); // 釋放佔用的記憶體 
} 
mysqli_close($link); // 關閉資料庫連結


//}
?>	
</table>
</body>
</html>