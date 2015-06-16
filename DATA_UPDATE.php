<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>資料庫新增</title>
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
			$cnt=0;
			
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
			
			if(isset($_POST["submit"]))
			{
				//song
				for($i=1;$i<=20;$i++)
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
								$_POST["img_path"] ."')";
						}
				
						else
						{
							$sql="insert into song values ('" . 
								$_POST["track_title_{$i}"] . "','" . 
								$_POST["ablum"] . "','" . 
								$_POST["artist"]. "','" . 
								$_POST["genre"]. "','" . 
								$_POST["price"]. "','" . 
								$_POST["img_path"] ."')";
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
						{
							$cnt++;
							$msg_2= "<br><span style='color:#0000FF'>album_detail資料1筆新增成功!<br>影響記錄數: 1 筆</span>";
						}
							
						else
							$msg_2= "<span style='color:#FF0000'>album_detail資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
			}
		
			mysqli_close($link); // 關閉資料庫連結
		
		
		
		
	?>
</head>
<body>
		<form name='form' action='<?=$_SERVER['PHP_SELF']?>' method='POST' style="line-height: 28px;">
				
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
				img_path:
				<input type="text" name="img_path">
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
			<br/>
			曲目16:　<input type='text' name='track_title_16' size="25">　
			個別演唱者:　<input type='text' name='artist_16' size="25">
			<br/>
			曲目17:　<input type='text' name='track_title_17' size="25">　
			個別演唱者:　<input type='text' name='artist_17' size="25">
			<br/>
			曲目18:　<input type='text' name='track_title_18' size="25">　
			個別演唱者:　<input type='text' name='artist_18' size="25">
			<br/>
			曲目19:　<input type='text' name='track_title_19' size="25">　
			個別演唱者:　<input type='text' name='artist_19' size="25">
			<br/>
			曲目20:　<input type='text' name='track_title_20' size="25">　
			個別演唱者:　<input type='text' name='artist_20' size="25">
			　　　
			<input type='submit' value='資料新增' name="submit"><br/>			

		</form>
		<?=$msg ?>
		<?=$msg_2?>
	</div>
	<?php }?>
</body>
</html>


