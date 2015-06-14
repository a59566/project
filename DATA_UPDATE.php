<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php

		$link = mysqli_connect("localhost","root","123456","group_12")
		or die("無法開啟MySQL資料庫連結!<br/>");
		$msg="";
		$cnt=0;
		
		mysqli_query($link,'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
			
			if(isset($_POST["submit"]))
			{
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
								$_POST["id"] ."')";
						}
				
						else
						{
							$sql="insert into song values ('" . 
								$_POST["track_title_{$i}"] . "','" . 
								$_POST["ablum"] . "','" . 
								$_POST["artist"]. "','" . 
								$_POST["genre"]. "','" . 
								$_POST["price"]. "','" . 
								$_POST["id"] ."')";
						}
							
						if( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
						{
							$cnt++;
							$msg= "<span style='color:#0000FF'>資料".$cnt."筆新增成功!<br>影響記錄數: ".$cnt."筆</span>";
						}
							
						else
							$msg= "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
				
						
					
						
					}
					else
						break;
				}
			}
		
			mysqli_close($link); // 關閉資料庫連結
		
		
		
		
	?>
</head>
<body>
		<form name='form' action='<?=$_SERVER['PHP_SELF']?>' method='POST' style="line-height: 28px;">
				id:
				<input type="text" name="id"><br>
				專輯名:　
				<input type='text' name='ablum'><br>
				演唱者:　
				<input type="text" name='artist'><br>
				曲風:　　
				<input type='text' name='genre'>
				價格:　
				<input type='text' name='price'><br/><br/>
				
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
	</div>
</body>
</html>


