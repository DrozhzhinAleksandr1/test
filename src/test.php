<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>

	<link rel="stylesheet" type="text/css" href="css/start.css"/>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/dist/css/bootstrap-grid.min.css"/>
	<link rel="stylesheet" type="text/css" href="libs/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>	
	<div class="wrapper">
		<div class="header clearfix">
			<div class="header__logo"></div>
			<div class="header__hamburger">
				<div class="header__hamburgerLine header__hamburgerLine_first"></div>
				<div class="header__hamburgerLine"></div>
				<div class="header__hamburgerLine"></div>
			</div>
			<div class="wrapperMenu hidden" data-close-menu>
				<div class="menu">				
					<button type="button" class="btnClose btn btnClose_menu" data-close-menu></button>
					<ul class="menu__ul">
						<li class="menu__li" tabindex="1">
							Episodes
							<menu-ul2></menu-ul2>
						</li>
						<li class="menu__li" tabindex="2">
							Characters
							<menu-ul2></menu-ul2>
						</li>
						<li class="menu__li" tabindex="3">
							Park
							<menu-ul2></menu-ul2>
						</li>
						<li class="menu__li" tabindex="4">
							Gallery
							<menu-ul2></menu-ul2>
						</li>
						<li class="menu__li" tabindex="5">
							Actors
							<menu-ul2></menu-ul2>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="content">
			<h1 class="content__title">Image Gallery</h1>
			<div class="containerWithImg container-fluid">
				<container-with-img :arr="arrImg"></container-with-img>		
			</div>
			<div class="wrapperSlider hidden" data-close>
				<slider :arr="arrImg"></slider>
				<button type="button" class="btnClose btn" data-close></button>
				<button type="button" class="slick-prev btnLeft btn"></button>
				<button type="button" class="slick-next btnRight btn"></button>
			</div>
		</div>
		<div class="footer">
			<p class="footer__text">IMB</p>
		</div>
		
	</div>

	<script type="text/x-template" id="menu-ul2-template">
		<ul class="menu__ul2">
			<li class="menu__li2">
				<a href="javascript:void(0);">
					Dolores
				</a>
			</li>
			<li class="menu__li2">
				<a href="javascript:void(0);">
					Maeve
				</a>
			</li>
			<li class="menu__li2">
				<a href="javascript:void(0);">
					Bernard
				</a>
			</li>
			<li class="menu__li2">
				<a href="javascript:void(0);">
					Ford
				</a>
			</li>
			<li class="menu__li2">
				<a href="javascript:void(0);">
					Man in Black
				</a>
			</li>
		</ul>
	</script>

	<script type="text/x-template" id="container-with-img-template">
  		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"
			 v-for="elem in arr" >
				<img :src="'img/' + elem" class="containerWithImg__img" alt="img">
			</div>
		</div>
	</script>

	<script type="text/x-template" id="slider-template">
  		<div class="slider">
			<div class="slide" v-for="elem in arr" :style="{ backgroundImage: 'url( img/' + elem + ')', }"></div>
		</div>
	</script>



	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/vue/dist/vue.min.js"></script>
	<script src="js/test.js"></script>

</body>
</html>