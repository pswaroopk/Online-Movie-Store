<?php
  session_start();

  $movie_name= $_REQUEST['name'];
  $sql_connect=mysqli_connect('localhost','root','root','movie_store');
  $query = "SELECT * FROM movies WHERE movie_flag=1 AND Name LIKE '%".$movie_name."%'" ;

  $result=mysqli_query($sql_connect,$query);
  $num_rows = mysqli_num_rows($result);

  while($row=$result->fetch_assoc()){
      $table_data = array("category" =>$row['Category'],"name"=>$row['Name'],"year"=>$row['Year'],"description"=>$row['Description'],"cost"=>$row['Cost']);
  }

  $name = $table_data['name'];
  $category = $table_data['category'];
  $cost = $table_data['cost'];
  $year = $table_data['year'];
  $description = $table_data['description'];
 ?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 	<title>Movies Store Website</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
 	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" />
 	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
 	<script type="text/javascript" src="../js/move-top.js"></script>
 	<script type="text/javascript" src="../js/easing.js"></script>
 	<script type="text/javascript" src="../js/index.js"></script>
 </head>

 <body>
 	<div class="header">
 		<div class="headertop_desc">
 			<div class="wrap">
 				<div class="nav_list">
 					<ul>
 						<li><a href="../index.php">Home</a></li>
 						<li><a href="contact.html">Contact</a></li>
 					</ul>
 				</div>
 				<div class="account_desc">
 					<ul>
 						<li id="add-movie"><a href="../admin.html">Add-a-movie</a></li>
 						<li id="register1"><a href="signup_page.php">Register</a></li>
 						<li id="login1"><a href="login.php">Login</a></li>
 						<li id="checkout"><a href="show_cart.php">Checkout</a></li>
 						<li id="logout"><a href=# onclick="removeUser()">Logout</a></li>
 					</ul>
 				</div>
 				<div class="clear"></div>
 			</div>
 		</div>
 		<div class="wrap">
 			<div class="header_top">
 				<div class="logo">
 					<a href="../index.php"><img src="../images/logo.png" alt="" /></a>
 				</div>
 				<div class="header_top_right">
 					<div class="cart" id="cart12">
 						<a href="show_cart.php">
 							<p><span>View Cart</span></p>
 						</a>
 					</div>
 					<div class="clear"></div>
 				</div>
 				<div class="clear"></div>
 			</div>
 		</div>
 	</div>
 	<div class="main">
 		<div class="wrap">
 			<div class="content">
 				<div class="section group">
 					<div class="col span_2_of_3">
 						<div class="contact-form">
 							<h2>Update Movies Database</h2>
 							<form method="post" name="form" action="add_movie.php" enctype="multipart/form-data">
 								<div class="form-group">
 									<span><label>Movie Name</label></span>
 									<span><input name="movieName" type="text" class="textbox" id="movieName" value = '<?php echo $name ?>'></span>
 									<span class="help-block"></span>
 								</div>
 								<div class="form-group">
 									<span><label>Category</label></span>
 									<span><input name="category" type="text" class="textbox" id="category" value = '<?php echo $category ?>'></span>
 									<span class="help-block"></span>
 								</div>
 								<div class="form-group">
 									<span><label>Image</label></span>
 									<input type="file" id="imgFile" name="image">
 									<span class="help-block"></span>
 								</div>
 								<div class="form-group">
 									<span><label>Year</label></span>
 									<span><input name="year" type="text" class="textbox" id="year" value = '<?php echo $year ?>'></span>
 									<span class="help-block"></span>
 								</div>
 								<div class="form-group">
 									<span><label>Price</label></span>
 									<span><input name="cost" type="text" class="textbox" id="cost" value = '<?php echo $cost ?>' ></span>
 									<span class="help-block"></span>
 								</div>
 								<div class="form-group">
 									<span><label>Description</label></span>
 									<span><textarea name="movie_description" id="movie_description"><?php echo $description ?></textarea></span>
 									<span class="help-block"></span>
 								</div>
 								<div>
 									<span><input type="submit" value="Submit"  class="mybutton" id="load"></span>
 								</div>
 							</form>
 						</div>
 					</div>
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
 						<li><a href="#">Site Map</a></li>
 						<li><a href="#">Search Terms</a></li>
 					</ul>
 				</div>
 				<div class="col_1_of_4 span_1_of_4">
 					<h4>My account</h4>
 					<ul>
 						<li><a href="login.php">Sign In</a></li>
 						<li><a href="show_cart.php">View Cart</a></li>
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
 								<a href="#" target="_blank"><img src="../images/facebook.png" alt="" /></a>
 							</li>
 							<li>
 								<a href="#" target="_blank"><img src="../images/twitter.png" alt="" /></a>
 							</li>
 							<li>
 								<a href="#" target="_blank"><img src="../images/skype.png" alt="" /> </a>
 							</li>
 							<li>
 								<a href="#" target="_blank"> <img src="../images/linkedin.png" alt="" /></a>
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
