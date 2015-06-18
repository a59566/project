<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>日韓音樂</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Product_Page.css" rel="stylesheet" type="text/css" />


<!-- https://github.com/Ephigenia/jquery.slideShowを参考しました -->

<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./js/jquery.slideshow.min.js"></script>

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
					<li style="background-color: #FFECC9;"><a href="jkpop.php" class="no_underline_bold">日韓</a></li>
					<li><a href="apop.php" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="classical.php" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	<div id="product_container">
		<div id="product_top">
			<h1>本周銷售TOP10</h1>
			<!-- 1 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=81">			
			<div class="product_rank_num">1</div>			
			<img src="img/jkpopco03.jpg" alt="">
			<div class="product_rank_name">ONE OK ROCK</div>
			<div class="product_rank_artist">35xxxv</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=86">			
			<div class="product_rank_num">2</div>			
			<img src="img/jkpopco06.jpg" alt="">
			<div class="product_rank_name">오렌지캬라멜</div>
			<div class="product_rank_artist">The Third Single Catallena</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=89">			
			<div class="product_rank_num">3</div>			
			<img src="img/jkpopco09.jpg" alt="">
			<div class="product_rank_name">いきものがかり</div>
			<div class="product_rank_artist">I</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=85">			
			<div class="product_rank_num">4</div>			
			<img src="img/jkpopco04.jpg" alt="">
			<div class="product_rank_name">GReeeeN</div>
			<div class="product_rank_artist">いままでのA面、B面ですと!?</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=83">			
			<div class="product_rank_num">5</div>			
			<img src="img/jkpopco01.jpg" alt="">
			<div class="product_rank_name">ClariS</div>
			<div class="product_rank_artist">2nd Album 「SECOND STORY」</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=84">			
			<div class="product_rank_num">6</div>			
			<img src="img/jkpopco07.jpg" alt="">
			<div class="product_rank_name">EXO</div>
			<div class="product_rank_artist">The 1st Album 'Xoxo</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=91">			
			<div class="product_rank_num">7</div>			
			<img src="img/jkpopco11.jpg" alt="">
			<div class="product_rank_name">きゃりーぱみゅぱみゅ</div>
			<div class="product_rank_artist">ぱみゅぱみゅレボリューション</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=79">			
			<div class="product_rank_num">8</div>			
			<img src="img/jkpopco02.jpg" alt="">
			<div class="product_rank_name">B'z</div>
			<div class="product_rank_artist">B'z The Best XXV 1999-2012</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=90">			
			<div class="product_rank_num">9</div>			
			<img src="img/jkpopco10.jpg" alt="">
			<div class="product_rank_name">AKB48</div>
			<div class="product_rank_artist">心のプラカード</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=82">			
			<div class="product_rank_num">10</div>			
			<img src="img/jkpopco12.jpg" alt="">
			<div class="product_rank_name">aiko</div>
			<div class="product_rank_artist">Loveletter/4月の雨</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><img src="./img/slideshow_img/jkpop01.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/jkpop02.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/jkpop03.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/jkpop04.jpg" alt=""></li>
					
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="Album.php?id=83" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">ClariS</div>
							<div class="item_title">2nd Album 「SECOND STORY」</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=79" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">B'z</div>
							<div class="item_title">B'z The Best XXV 1999-2012</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=81" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">ONE OK ROCK</div>
							<div class="item_title">35xxxv</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=85" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">GReeeeN</div>
							<div class="item_title">いままでのA面、B面ですと!?</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=87" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco05.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Perfume</div>
							<div class="item_title">Sweet Refrain</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=86" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">오렌지캬라멜</div>
							<div class="item_title">The Third Single Catallena</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=84" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">EXO</div>
							<div class="item_title">The 1st Album 'Xoxo</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=88" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Trouble Maker</div>
							<div class="item_title">Trouble Maker</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=89" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">いきものがかり</div>
							<div class="item_title">I</div>
						</div>
					</a></article>
			  <article class="product_items"><a href="Album.php?id=90" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">AKB48</div>
							<div class="item_title">心のプラカード</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=91" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">きゃりーぱみゅぱみゅ</div>
							<div class="item_title">ぱみゅぱみゅレボリューション</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=82" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/jkpopco12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">aiko</div>
							<div class="item_title">Loveletter/4月の雨</div>
						</div>
					</a></article>
				
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
	(function ($) 
	{
		$('.slideShow').slideShow
		({ 
		interval: 3, 
		start: 'random',
		});
	})(jQuery);
</script>
</body>
</html>