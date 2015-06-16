<!DOCTYPE html>
<html lang="zh-Hant"><head>


	<meta charset="UTF-8"><title>動漫音樂</title>
	
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css">
	<link href="./css/CSS_Product_Page.css" rel="stylesheet" type="text/css">
	<!-- from https://github.com/Ephigenia/jquery.slideShow -->


<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./js/jquery.slideshow.min.js"></script></head><body>
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
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=5">			
			<div class="product_rank_num">1</div>			
			<img src="img/anico04.jpeg" alt="Album.php?id=5">
			<div class="product_rank_name">UNISON SQUARE GARDEN</div>
			<div class="product_rank_artist">シュガーソングとビターステップ</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=6">			
			<div class="product_rank_num">2</div>			
			<img src="img/anico05.jpeg" alt="Album.php?id=6">
			<div class="product_rank_name">
			  <div class="new_artist">SawanoHiroyuki[nZk]</div>
			</div>
			<div class="product_rank_artist">X.U. | scaPEGoat</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=3">			
			<div class="product_rank_num">3</div>			
			<img src="img/anico07.jpg" alt="Album.php?id=3">
			<div class="product_rank_name"><span class="new_artist">TRUSTRICK</span></div>
			<div class="product_rank_artist">未来形Answer E.P.</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=10">			
			<div class="product_rank_num">4</div>			
			<img src="img/anico11.jpg" alt="Album.php?id=10">
			<div class="product_rank_name">ClariS</div>
			<div class="product_rank_artist">CLICK</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=8">			
			<div class="product_rank_num">5</div>			
			<img src="img/anico06.jpg" alt="Album.php?id=8">
			<div class="product_rank_name"><span class="new_artist">山本和臣</span></div>
			<div class="product_rank_artist">
			<div class="new_title">TVアニメーション「トリアージX(イクス)」エンディング・テーマ ソレーユ・モア</div>
			</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=7">			
			<div class="product_rank_num">6</div>			
			<img src="img/anico01.jpg" alt="Album.php?id=7">
			<div class="product_rank_name"><span class="new_artist">UVERworld</span></div>
			<div class="product_rank_artist">僕の言葉ではない これは僕達の言葉</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=4">			
			<div class="product_rank_num">7</div>			
			<img src="img/anico08.jpg" alt="Album.php?id=4">
			<div class="product_rank_name"><span class="new_artist">GARNiDELiA</span></div>
			<div class="product_rank_artist"><span class="new_info">MIRAI</span></div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=1">			
			<div class="product_rank_num">8</div>			
			<img src="img/anico12.jpg" alt="Album.php?id=1">
			<div class="product_rank_name"><span class="new_artist">LiSA</span></div>
			<div class="product_rank_artist">crossing field</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=13">			
			<div class="product_rank_num">9</div>			
			<img src="img/anico03.jpg" alt="Album.php?id=1">
			<div class="product_rank_name"><span class="new_artist">佐々木恵梨</span></div>
			<div class="product_rank_artist">Ring of Fortune</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=2">			
			<div class="product_rank_num">10</div>			
			<img src="img/anico02.jpg" alt="Album.php?id=2">
			<div class="product_rank_name"><span class="new_artist">藍井エイル</span></div>
			<div class="product_rank_artist"><span class="new_title">ラピスラズリ</span></div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><a href=""><img src="./img/slideshow_img/ani01.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/ani02.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/ani03.jpg" alt=""></a></li>
					<li class="slide"><a href=""><img src="./img/slideshow_img/ani04.jpg" alt=""></a></li>
					
				</ul>
			</div>

			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="" class="no_underline_bold">
						<div class="item_cover">
							<a href="Album.php?id=7"><img  src="img/anico01.jpg" alt=""></a>
						</div>
						<div class="item_info">
							<div class="item_artist">UVERworld</div>
							<div class="item_title">僕の言葉ではない これは僕達の言葉</div></div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=2" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">藍井エイル</div>
							<div class="item_title">ラピスラズリ</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=13" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">佐々木恵梨</div>
							<div class="item_title">Ring of Fortune</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=5" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico04.jpeg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">UNISON SQUARE GARDEN</div>
							<div class="item_title">シュガーソングとビターステップ</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=6" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico05.jpeg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">SawanoHiroyuki[nZk]</div>
							<div class="item_title">X.U. | scaPEGoat</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=8" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">山本和臣</div>
							<div class="item_title">TVアニメーション「トリアージX(イクス)」エンディング・テーマ ソレーユ・モア</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=4" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">GARNiDELiA</div>
							<div class="item_title">MIRAI</div>
                            </div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=11" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">DIGIMON</div>
							<div class="item_title">Digimon History 1999-2006 All The Best</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=9" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">金色のガッシュベル！！ Complete Singles Collection</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=10" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico11.jpg" alt="">
						</div>
						<div class="new_info">
							<div class="item_artist">ClariS</div>
							<div class="item_title">CLICK</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=1" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">LiSA</div>
							<div class="item_title">crossing field</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=3" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/anico07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">TRUSTRICK</div>
							<div class="item_title">未来形Answer E.P.</div>
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
</body></html>