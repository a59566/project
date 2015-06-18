<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>華語音樂</title>
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
					<li style="background-color: #FFECC9;"><a href="cpop.php" class="no_underline_bold">華語</a></li>
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
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=62">			
			<div class="product_rank_num">1</div>			
			<img src="img/cpopco01.jpg" alt="">
			<div class="product_rank_name">林俊傑</div>
			<div class="product_rank_artist">新地球</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=55">			
			<div class="product_rank_num">2</div>			
			<img src="img/cpopco04.jpg" alt="">
			<div class="product_rank_name">鄧紫棋</div>
			<div class="product_rank_artist">我是歌手-鄧紫棋篇</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=60">			
			<div class="product_rank_num">3</div>			
			<img src="img/cpopco11.jpg" alt="">
			<div class="product_rank_name">光良</div>
			<div class="product_rank_artist">那些未完成的</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=61">			
			<div class="product_rank_num">4</div>			
			<img src="img/cpopco12.jpg" alt="">
			<div class="product_rank_name">李榮浩</div>
			<div class="product_rank_artist">李榮浩同名專輯</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=54">			
			<div class="product_rank_num">5</div>			
			<img src="img/cpopco08.jpg" alt="">
			<div class="product_rank_name">八三夭</div>
			<div class="product_rank_artist">最後的831</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=58">			
			<div class="product_rank_num">6</div>			
			<img src="img/cpopco10.jpg" alt="">
			<div class="product_rank_name">嚴爵</div>
			<div class="product_rank_artist">不孤獨</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=64">			
			<div class="product_rank_num">7</div>			
			<img src="img/cpopco07.jpg" alt="">
			<div class="product_rank_name">孫燕姿</div>
			<div class="product_rank_artist">是時候</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=57">			
			<div class="product_rank_num">8</div>			
			<img src="img/cpopco03.jpg" alt="">
			<div class="product_rank_name">多位演出者</div>
			<div class="product_rank_artist">等一個人咖啡電影原聲帶</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=63">			
			<div class="product_rank_num">9</div>			
			<img src="img/cpopco02.jpg" alt="">
			<div class="product_rank_name">周杰倫</div>
			<div class="product_rank_artist">唉呦,不錯喔</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=59">			
			<div class="product_rank_num">10</div>			
			<img src="img/cpopco05.jpg" alt="">
			<div class="product_rank_name">MP魔幻力量</div>
			<div class="product_rank_artist">不按理出牌</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><img src="./img/slideshow_img/cpop01.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cpop02.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cpop03.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cpop04.jpg" alt=""></li>
					
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="Album.php?id=62" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">林俊傑</div>
							<div class="item_title">新地球</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=63" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">周杰倫</div>
							<div class="item_title">唉呦,不錯喔</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=57" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">等一個人咖啡電影原聲帶</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=55" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">鄧紫棋</div>
							<div class="item_title">我是歌手-鄧紫棋篇</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=59" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco05.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">MP魔幻力量</div>
							<div class="item_title">不按理出牌</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=65" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">MP魔幻力量</div>
							<div class="item_title">射手</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=64" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">孫燕姿</div>
							<div class="item_title">是時候</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=54" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">八三夭</div>
							<div class="item_title">最後的831</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=56" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">蕭敬騰</div>
							<div class="item_title">The Song</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=58" class="no_underline_bold">
						<div class="item_cover"><img src="img/cpopco10.jpg" alt=""></div>
						<div class="item_info">
							<div class="item_artist">嚴爵</div>
							<div class="item_title">不孤獨</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=60" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">光良</div>
							<div class="item_title">那些未完成的</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=61" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/cpopco12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">李榮浩</div>
							<div class="item_title">李榮浩同名專輯</div>
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