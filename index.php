<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Mea~Musica</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Product_Page.css" rel="stylesheet" type="text/css" />


<!-- https://github.com/Ephigenia/jquery.slideShowを参考にした -->

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
					<li><a href="jkpop.php" class="no_underline_bold">日韓</a></li>
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
			<img src="./img/jkpopco03.jpg" alt="">
			<div class="product_rank_name">35xxxv</div>
			<div class="product_rank_artist">ONE OK ROCK</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=74">			
			<div class="product_rank_num">2</div>			
			<img src="./img/hico09.jpg" alt="">
			<div class="product_rank_name">Xscape (Deluxe HD Version)</div>
			<div class="product_rank_artist">Michael Jackson</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=62">			
			<div class="product_rank_num">3</div>			
			<img src="./img/cpopco01.jpg" alt="">
			<div class="product_rank_name">新地球</div>
			<div class="product_rank_artist">林俊傑</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=5">			
			<div class="product_rank_num">4</div>			
			<img src="./img/anico04.jpg" alt="">
			<div class="product_rank_name">シュガーソングとビターステップ</div>
			<div class="product_rank_artist">UNISON SQUARE GARDEN</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=86">			
			<div class="product_rank_num">5</div>			
			<img src="./img/jkpopco06.jpg" alt="">
			<div class="product_rank_name">The Third Single Catallena</div>
			<div class="product_rank_artist">오렌지캬라멜 (Orange Caramel)</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=55">			
			<div class="product_rank_num">6</div>			
			<img src="./img/cpopco04.jpg" alt="">
			<div class="product_rank_name">我是歌手-鄧紫棋篇</div>
			<div class="product_rank_artist">鄧紫棋</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=15">			
			<div class="product_rank_num">7</div>			
			<img src="./img/apopco02.jpg" alt="">
			<div class="product_rank_name">Demi (Deluxe)</div>
			<div class="product_rank_artist">Demi Lovato</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=21">			
			<div class="product_rank_num">8</div>			
			<img src="./img/apopco06.jpg" alt="">
			<div class="product_rank_name">Globalization</div>
			<div class="product_rank_artist">Pitbull</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=30">			
			<div class="product_rank_num">9</div>			
			<img src="./img/claco04.jpg" alt="">
			<div class="product_rank_name">Beethoven - Greatest Hits</div>
			<div class="product_rank_artist">多位演出者</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=66">			
			<div class="product_rank_num">10</div>			
			<img src="./img/hico03.jpg" alt="">
			<div class="product_rank_name">IGNITE</div>
			<div class="product_rank_artist">藍井エイル</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><img src="./img/slideshow_img/cla01.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/ani02.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/apop03.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/hico04.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cpop01.jpg" alt=""></li>
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<!-- 1 -->
				<article class="product_items"><a href="Album.php?id=63" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/cpopco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">哎呦，不錯哦</div>
							<div class="item_title">周杰倫</div>
						</div>
					</a></article>
					
				<!-- 2 -->
				<article class="product_items"><a href="Album.php?id=57" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/cpopco03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">等一個人咖啡 電影原聲帶</div>
							<div class="item_title">多位演出者</div>
						</div>
					</a></article>
					
				<!-- 3 -->
				<article class="product_items"><a href="Album.php?id=7" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/anico01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">僕の言葉ではない これは僕達の言葉</div>
							<div class="item_title">UVERworld</div>
						</div>
					</a></article>
					
				<!-- 4 -->
				<article class="product_items"><a href="Album.php?id=76" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/hico12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">江蕙精選黃金典藏版1</div>
							<div class="item_title">江蕙</div>
						</div>
					</a></article>
					
				<!-- 5 -->
				<article class="product_items"><a href="Album.php?id=90" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/jkpopco10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">心のプラカード</div>
							<div class="item_title">AKB48</div>
						</div>
					</a></article>
					
				<!-- 6 -->
				<article class="product_items"><a href="Album.php?id=27" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/apopco07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Essential Michael Jackson</div>
							<div class="item_title">Michael Jackson</div>
						</div>
					</a></article>
					
				<!-- 7 -->
				<article class="product_items"><a href="Album.php?id=23" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/apopco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">V [Deluxe Edition]</div>
							<div class="item_title">Maroon 5</div>
						</div>
					</a></article>
					
				<!-- 8 -->
				<article class="product_items"><a href="Album.php?id=49" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/claco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">New Years Concert 2008</div>
							<div class="item_title">多位演出者</div>
						</div>
					</a></article>
					
				<!-- 9 -->
				<article class="product_items"><a href="Album.php?id=3" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/anico07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">未来形Answer E.P.</div>
							<div class="item_title">TRUSTRICK</div>
						</div>
					</a></article>
					
				<!-- 10 -->
				<article class="product_items"><a href="Album.php?id=67" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/hico04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">ClariS ~SINGLE BEST 1st~</div>
							<div class="item_title">ClariS</div>
						</div>
					</a></article>
					
				<!-- 11 -->
				<article class="product_items"><a href="Album.php?id=69" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/hico02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Audiophile_Classical_Sampler_Vol.1_Compilation</div>
							<div class="item_title">多位演出者</div>
						</div>
					</a></article>
					
				<!-- 12 -->
				<article class="product_items"><a href="Album.php?id=79" class="no_underline_bold">
						<div class="item_cover">
							<img src="./img/jkpopco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Bz The Best XXV 1999-2012</div>
							<div class="item_title">B'z</div>
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