<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Regist</title>

	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Regist.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	
	<script type="text/javascript">
	
	var exist;
	
	var user_check = function()
	{		
		
		
		$.ajax({
			url: "user_check.php",
			data: $('#user').serialize(),
			type:"POST",
			dataType:'text',
			
			
			success: function(msg)
			{
				document.getElementById('msg').innerHTML= msg.substr(0) ;
				
				if(msg.substr(0)=="此帳號已存在!")
					exist=1;
				else
					exist=0;
				
			},

			error:function(xhr, ajaxOptions, thrownError)
			{
				alert(xhr.status);
				alert(thrownError);
			}
		});
		
	}
		
	function check() 
	{
		
		if (document.form.user.value == "")
		{
			document.getElementById('msg').innerHTML='請輸入帳號';
			document.form.user.focus();
			return false;
		}
		else if (document.form.user.value.length<2)
		{
			document.getElementById('msg').innerHTML='請輸入2個以上的字元';
			document.form.user.focus();
			return false;
		}
		else if(exist==1)
		{
			document.form.user.focus();
			return false;
		}
		else if (document.form.pass.value == "")
		{
			document.getElementById('msg').innerHTML='';			
			document.getElementById('pass_msg').innerHTML='請輸入密碼';
			document.form.pass.focus();
			return false;
		}		
		else if (document.form.pass.value != document.form.pass_kakuninn.value)
		{
			document.getElementById('msg').innerHTML='';			
			document.getElementById('pass_msg').innerHTML='';
			document.getElementById('kakuninn_msg').innerHTML='密碼確認錯誤';
			document.form.pass_kakuninn.focus();
			return false;
		}		
		else if (document.form.email.value == "")
		{
			document.getElementById('msg').innerHTML='';			
			document.getElementById('pass_msg').innerHTML='';
			document.getElementById('kakuninn_msg').innerHTML='';
			document.getElementById('email_msg').innerHTML='請輸入電子信箱';
			document.form.email.focus();
			return false;
		}
		else 
		{
			document.getElementById('msg').innerHTML='';			
			document.getElementById('pass_msg').innerHTML='';
			document.getElementById('kakuninn_msg').innerHTML='';
			document.getElementById('email_msg').innerHTML='';
			
			if (confirm('是否確定要送出？'+'\n' + 
			'帳號：' + document.form.user.value + '\n' + 
			'密碼：' + document.form.pass.value  + '\n' +
			'電子郵件：' + document.form.email.value)) 
				document.form.submit();
		}

	} 
	</script>
	
	
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
		<form name="form" action="regist_to_sql.php" method="POST" id="regist_input" >
			<h2>設定帳號
				<div id="user_check" onclick="user_check()">check</div>　
				<span id="msg"></span>
			</h2>
			<input type="text" name="user" id="user" size="25" onkeyup="user_check()">　※英數任意混合
			<h2>設定密碼  <span id="pass_msg"></span></h2>
			<input type="password" name="pass" id="pass" size="25">　※英數混合,長度6~32的字串
			<h2>確認密碼  <span id="kakuninn_msg"></span></h2>
			<input type="password" name="pass_kakuninn" id="pass_kakuninn" size="25">　※請再輸入一次密碼
			<h2>電子信箱  <span id="email_msg"></span></h2>
			<input type="email" name="email" id="email" size="25">　※請輸入有效的電子信箱
			<br><br><br>
			<input class="regist_btn" type="button" name="button" value="註冊" onclick="return check();">　　<input class="regist_btn" type="reset" value="清空重填">
		</form>	
	</div>
</body>
</html>