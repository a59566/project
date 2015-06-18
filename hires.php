<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Hi-Res</title>
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
					<li style="background-color: #FFECC9;"><a href="hires.php" class="no_underline_bold">Hi-Res</a></li>
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
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=74">			
			<div class="product_rank_num">1</div>			
			<img src="img/hico09.jpg" alt="">
			<div class="product_rank_name">Michael Jackson</div>
			<div class="product_rank_artist">Xscape (Deluxe HD Version)</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=66">			
			<div class="product_rank_num">2</div>			
			<img src="img/hico03.jpg" alt="">
			<div class="product_rank_name">藍井エイル</div>
			<div class="product_rank_artist">IGNITE</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=67">			
			<div class="product_rank_num">3</div>			
			<img src="img/hico04.jpg" alt="">
			<div class="product_rank_name">ClariS</div>
			<div class="product_rank_artist">ClariS ~SINGLE BEST 1st~(Hi-Res Version)</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=76">			
			<div class="product_rank_num">4</div>			
			<img src="img/hico12.jpg" alt="">
			<div class="product_rank_name">江蕙</div>
			<div class="product_rank_artist">江蕙精選黃金典藏版1 XRCD</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=75">			
			<div class="product_rank_num">5</div>			
			<img src="img/hico10.jpg" alt="">
			<div class="product_rank_name">澤野弘之</div>
			<div class="product_rank_artist">アルドノア･ゼロ オリジナル・サウンドトラック</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=68">			
			<div class="product_rank_num">6</div>			
			<img src="img/hico01.jpg" alt="">
			<div class="product_rank_name">多位演出者</div>
			<div class="product_rank_artist">24-bits of Christmas 2014</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=73">			
			<div class="product_rank_num">7</div>			
			<img src="img/hico06.jpg" alt="">
			<div class="product_rank_name">Kalafina</div>
			<div class="product_rank_artist">THE BEST "Red"</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=72">			
			<div class="product_rank_num">8</div>			
			<img src="img/hico05.jpg" alt="">
			<div class="product_rank_name">Kalafina</div>
			<div class="product_rank_artist"><strong>THE BEST "Blue"</strong></div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=69">			
			<div class="product_rank_num">9</div>			
			<img src="img/hico02.jpg" alt="">
			<div class="product_rank_name">多位演出者</div>
			<div class="product_rank_artist">Audiophile Classical Sampler Vol.1 (Compilation)</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=71">			
			<div class="product_rank_num">10</div>			
			<img src="img/hico07.jpg" alt="">
			<div class="product_rank_name">
			<div class="item_artist">fripSide</div>
			</div>
			<div class="product_rank_artist">
			<div class="item_title">infinite synthesis 2</div>
			</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><img src="./img/slideshow_img/hi01.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/hi02.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/hico03.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/hico04.jpg" alt=""></li>
					
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="Album.php?id=68" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">24-bits of Christmas 2014</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=69" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">Audiophile Classical Sampler Vol.1 (Compilation)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=66" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">藍井エイル</div>
							<div class="item_title">IGNITE</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=67" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">ClariS</div>
							<div class="item_title">ClariS ~SINGLE BEST 1st~(Hi-Res Version)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=72" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico05.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Kalafina</div>
							<div class="item_title">THE BEST "Blue"</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=73" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Kalafina</div>
							<div class="item_title">THE BEST "Red"</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=71" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">fripSide</div>
							<div class="item_title">infinite synthesis 2</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=70" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">ELISA</div>
							<div class="item_title">EONIAN -イオニアン-</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=74" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Michael Jackson</div>
							<div class="item_title">Xscape (Deluxe HD Version)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=75" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">澤野弘之</div>
							<div class="item_title">アルドノア･ゼロ オリジナル・サウンドトラック</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=78" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">澤野弘之</div>
							<div class="item_title">機動戦士ガンダムUC オリジナルサウンドトラック 1</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=76" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/hico12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">江蕙</div>
							<div class="item_title">江蕙精選黃金典藏版1 XRCD</div>
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