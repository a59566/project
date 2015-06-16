<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Login.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
		function check()
		{
			if(document.form.user.value == "")
			{
				document.getElementById('member_error').innerHTML= '請輸入帳號!' ;
				return false;
			}
				
		}		
	</script>
	
	<?php
		session_start();	
		
		$msg="";
		
		if(isset($_POST["submit"]))
		{
			$refer = $_POST["refer"];
			
			$link = mysqli_connect("localhost","root","123456","group_12")
			or die("無法開啟MySQL資料庫連結!<br/>");
			
			mysqli_query($link,'SET CHARACTER SET utf8');
			mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
			
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$sql = "SELECT `user`,`pass` FROM `member` WHERE `user`=\"$user\"";
			
			
			if($result = mysqli_query($link, $sql)) // 送出查詢的SQL指令
			{																
				$total_records=mysqli_num_rows($result);
							
				if($total_records==0)
					$msg = "使用者帳號不存在!";
				else
				{
					while($row = mysqli_fetch_assoc($result)) 
					{				
						if($row["pass"]==$pass)
						{
							$_SESSION["user"] = $user;
							header("Location:".$refer);//temp							
						}
							
						else
						{
							$_SESSION["user"] = "";
							$msg="密碼錯誤!";
						}
							
					}
				}				
			}
			

			mysqli_close($link);
			
		}
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
				<div id="header_mark"></div>
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
	
	
        <div id="member_login">
       	  <h1>會員登入</h1>
				<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" name="form">
                	<div id="member_input">
                        <h2>帳號</h2>
                        <input name="user" id="user" type="text" size="25">
                        <h2>密碼</h2>
                        <input name="pass" type="password" size="25">
                   	  <div id="member_btn">
                        	<input id="member_login_btn" type="submit" name="submit" value="登入" onclick='return check();'>
                            
                            <a href="Regist.php" id="member_new_btn">註冊</a>
                        </div>                    
                    </div>     
					<input type="hidden" name="refer" value="<?php if(isset($_GET["url"])) echo $_GET["url"]; else echo "hires.html";?>">
				</form>
				<div id="member_error"><?=$msg?></div>
        </div>
        	
</body>
</html>