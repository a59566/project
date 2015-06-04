<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Regist</title>

	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Regist.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	
	<script type="text/javascript">
	
	var check=function()
	{
		
		$.ajax({
			url: "user_check.php",
			data: $('#user').serialize(),
			type:"POST",
			dataType:'text',

			success: function(msg)
			{
				document.getElementById('msg').innerHTML= msg.substr(1) ;
			},

			error:function(xhr, ajaxOptions, thrownError)
			{
				alert(xhr.status);
				alert(thrownError);
			}
		});
	}
		
		
		
	</script>
	
	<?php
		$link = mysqli_connect("localhost","root","123456","group_12")
		or die("無法開啟MySQL資料庫連結!<br/>");
		$msg="";
		
		mysqli_query($link,'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
		
		if(isset($_POST["submit"]))
		{
			$sql="insert into member values ('" . 
				$_POST["user"] . "','" . 
				$_POST["pass"] . "','" . 
				$_POST["email"]."')";
			
		
		
		if( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
			$msg= "<span style='color:#0000FF'>資料筆新增成功!<br>影響記錄數: 1筆</span>";	
		else
			$msg= "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";
		
		}
		mysqli_close($link); // 關閉資料庫連結
	?>
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
	
	
	<div id="member_regist">
		<h1>會員註冊</h1>
		<form name="form" action="" method="POST" id="regist_input">
			<h2>設定帳號　
				<div id="user_check" onclick="check();">check</div>
				<span id="msg"></span>
			</h2>
			<input type="text" name="user" id="user" size="25">　※英數任意混合
			<h2>設定密碼</h2>
			<input type="password" name="pass" id="pass" size="25">　※英數混合,長度6~32的字串
			<h2>確認密碼</h2>
			<input type="password" name="pass_kakuninn" id="pass_kakuninn" size="25">　※請再輸入一次密碼
			<h2>電子信箱</h2>
			<input type="email" name="email" id="email" size="25">　※請輸入有效的電子信箱
			<br><br><br>
			<input class="regist_btn" type="submit" name="submit" value="註冊">　　<input class="regist_btn" type="reset" value="清空重填">
		</form>	
	</div>
</body>
</html>