<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>歐美音樂</title>
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
	<div id="product_container">
		<div id="product_top">
			<h1>本周銷售TOP10</h1>
			<!-- 1 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=15">			
			<div class="product_rank_num">1</div>			
			<img src="img/apopco02.jpg" alt="Album.php?id=15">
			<div class="product_rank_name">Demi Lovato</div>
			<div class="product_rank_artist">Demi (Deluxe)</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=21">			
			<div class="product_rank_num">2</div>			
			<img src="img/apopco06.jpg" alt="Album.php?id=21">
			<div class="product_rank_name">Pitbull</div>
			<div class="product_rank_artist">Globalization</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=19">			
			<div class="product_rank_num">3</div>			
			<img src="img/apopco04.jpg" alt="Album.php?id=19">
			<div class="product_rank_name">Carly Rae Jepsen</div>
			<div class="product_rank_artist">Kiss (Deluxe Edition)</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=24">			
			<div class="product_rank_num">4</div>			
			<img src="img/apopco08.jpg" alt="Album.php?id=24">
			<div class="product_rank_name">David Guetta</div>
			<div class="product_rank_artist">One More Love</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=23">			
			<div class="product_rank_num">5</div>			
			<img src="img/apopco11.jpg" alt="">
			<div class="product_rank_name">Maroon 5</div>
			<div class="product_rank_artist">V [Deluxe Edition]</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=25">			
			<div class="product_rank_num">6</div>			
			<img src="img/apopco12.jpg" alt="">
			<div class="product_rank_name">Rita Ora</div>
			<div class="product_rank_artist">Ora (Deluxe)</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=22">			
			<div class="product_rank_num">7</div>			
			<img src="img/apopco09.jpg" alt="Album.php?id=22">
			<div class="product_rank_name">John Newman</div>
			<div class="product_rank_artist">Tribute</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=20">			
			<div class="product_rank_num">8</div>			
			<img src="img/apopco03.jpg" alt="">
			<div class="product_rank_name">Fall Out Boy</div>
			<div class="product_rank_artist">American Beauty/American Psycho</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=14">			
			<div class="product_rank_num">9</div>			
			<img src="img/apopco10.jpg" alt="">
			<div class="product_rank_name">Justin Timberlake</div>
			<div class="product_rank_artist">The 20/20 Experience</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=16">			
			<div class="product_rank_num">10</div>			
			<img src="img/apopco01.jpg" alt="">
			<div class="product_rank_name">Alex Goot</div>
			<div class="product_rank_artist">Alex Goot & Friends</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><a href=""><img src="./img/slideshow_img/apop01.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/apop02.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/apop03.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/apop04.jpg" alt=""></a></li>
					
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="Album.php?id=16" class="no_underline_bold">
						<div class="item_cover">
						
							<img src="img/apopco01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Alex Goot</div>
							<div class="item_title">Alex Goot & Friends</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=15" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Demi Lovato</div>
							<div class="item_title">Demi (Deluxe)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=20" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Fall Out Boy</div>
							<div class="item_title">American Beauty/American Psycho</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=19" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Carly Rae Jepsen</div>
							<div class="item_title">Kiss (Deluxe Edition)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=26" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco05.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">The Script</div>
							<div class="item_title">#3</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=21" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Pitbull</div>
							<div class="item_title">Globalization</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=27" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Michael Jackson</div>
							<div class="item_title">Essential Michael Jackson</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=24" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">David Guetta</div>
							<div class="item_title">One More Love</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=22" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">John Newman</div>
							<div class="item_title">Tribute</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=14" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Justin Timberlake</div>
							<div class="item_title">The 20/20 Experience</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=23" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Maroon 5</div>
							<div class="item_title">V [Deluxe Edition]</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=25" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/apopco12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Rita Ora</div>
							<div class="item_title">Ora (Deluxe)</div>
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