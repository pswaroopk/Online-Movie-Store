<?php
session_start();
//unset($_SESSION['username']);
//(print_r($_SESSION['username'], TRUE));
?>
<!DOCTYPE HTML>

<head>
	<title> Movies Store Website </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/front.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="js/index.js"></script>


	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
	</script>
</head>

<body>
	<div class="header">
		<div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">Home</a></li>
						<!--<li><a href="contact.html">Sitemap</a></li>-->
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="account_desc">
					<ul>
						<li id="add-movie"><a href="../admin.html">Add-a-movie</a></li>
						<li id="register1"><a href="php/signup_page.php">Register</a></li>
						<li id="login1"><a href="php/login.php">Login</a></li>
						<li id="checkout"><a href="php/show_cart.php">Checkout</a></li>
						<li id="logout"><a href=# onclick="removeUser()">Logout</a></li>
						<li id="user-list"><a id="user" href=#>Guest</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="wrap">
			<div class="header_top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="header_top_right">
					<div class="cart" id="cart12">
						<a href="php/show_cart.php">
							<p><span>View Cart</span></p>
						</a>
					</div>
					<div class="search_box">
						<form onsubmit="search(); return false;">
							<input id="search1" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
						</form>
					</div>
					<div class="clear"></div>
				</div>
				<script type="text/javascript">
					function DropDown(el) {
						this.dd = el;
						this.initEvents();
					}
					DropDown.prototype = {
						initEvents: function() {
							var obj = this;

							obj.dd.on('click', function(event) {
								$(this).toggleClass('active');
								event.stopPropagation();
							});
						}
					}

					$(function() {
						var dd = new DropDown($('#dd'));
						$(document).click(function() {
							$('.wrapper-dropdown-2').removeClass('active');
						});
					});
				</script>
				<div class="clear"></div>
			</div>
			<div class="header_bottom">
				<div class="header_bottom_left">
					<div class="categories">
						<ul id="ul_id_1">
							<h3>Categories</h3>
							<!-- <li><a href=# onclick="loadData('All')">All</a></li> -->
							<li><a href=# onclick="loadData('Hindi')">Hindi</a></li>
							<li><a href=# onclick="loadData('Telugu')">Telugu</a></li>
							<li><a href=# onclick="loadData('Tamil')">Tamil</a></li>
							<li><a href=# onclick="loadData('English')">English</a></li>
							<li><a href=# onclick="loadData('French')">French</a></li>
						</ul>
					</div>
				</div>
				<div class="header_bottom_right">
					<!------ Slider ------------>
					<div class="slider">
						<div class="slider-wrapper theme-default">
							<div id="slider" class="nivoSlider">
								<img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
								<img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
								<img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
								<img src="images/4.jpg" data-thumb="images/4.jpg" alt="" />
								<img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
							</div>
						</div>
					</div>
					<!------End Slider ------------>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!------------End Header ------------>
	<div class="main">
		<div class="wrap">
			<div class="content" id="cont1">

				<div class="content" id="movie-page">
					<div class="content_top">
						<div class="heading">
							<h3>New Products</h3>
						</div>
					</div>
					<div class="section group">
						<!-- <div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('End Game')"><img src="images/end-game.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('End Game')">End Game</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$620.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('End Game')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Sorority Wars')"><img src="images/Sorority_Wars.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Sorority Wars')">Sorority Wars</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$620.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Sorority Wars')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>

						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('New Moon')"><img src="images/New-Moon.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('New Moon')">Twilight New Moon</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$899.75</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('New Moon')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>

						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Avatar')"><img src="images/avatar_movie.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Avatar')">Avatar</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$599.00</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Avatar')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Black Swan')"><img src="images/black-swan.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Black Swan')">Black Swan</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$679.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Black Swan')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div> -->
					</div>
					<div class="content_bottom">
						<div class="heading">
							<h3>Featured Products</h3>
						</div>
					</div>
					<div class="section group">
						<!-- <div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Beauty and the beast')"><img src="images/beauty_and_the_beast.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Beauty and the beast')">Beauty and the beast</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$620.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Beauty and the beast')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>

						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Eclipse')"><img src="images/Eclipse.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Eclipse')">Eclipse</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$620.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Eclipse')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>

						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Coraline')"><img src="images/Coraline.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Coraline')">Coraline</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$899.75</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Coraline')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>

						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Unstoppable')"><img src="images/Unstoppable.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Unstoppable')">Unstoppable</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$599.00</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Unstoppable')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="grid_1_of_5 images_1_of_5">
							<a onclick="movie_preview('Priest')"><img src="images/Priest.jpg" alt="" /></a>
							<h2><a onclick="movie_preview('Priest')">Priest 3D</a></h2>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$679.87</span></p>
								</div>
								<div class="add-cart">
									<h4><a href=# onclick="addToCart('Priest')">Add to Cart</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="content" id="page1">
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h4>Information</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#l">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
					<ul>
						<li><a href="php/login.php">Sign In</a></li>
						<li><a href="php/show_cart.php">View Cart</a></li>
						<li><a href="#">My Wishlist</a></li>
						<li><a href="#">Track My Order</a></li>
						<li><a href="contact.html">Help</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
					<ul>
						<li><span>+91-123-456789</span></li>
						<li><span>+00-123-000000</span></li>
					</ul>
					<div class="social-icons">
						<h4>Follow Us</h4>
						<ul>
							<li>
								<a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a>
							</li>
							<li>
								<a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a>
							</li>
							<li>
								<a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a>
							</li>
							<li>
								<a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a>
							</li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by <a href="http://w3layouts.com">Akshay - w3layouts</a> </p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>
