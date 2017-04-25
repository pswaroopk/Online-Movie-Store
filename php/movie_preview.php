<?php
/**
 * Created by PhpStorm.
 * User: asrirang
 * Date: 4/11/17
 * Time: 8:34 PM
 */

$movie_name = $_GET['name'];

$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "SELECT * FROM movies where Name ='".$movie_name."'" ;
$result=mysqli_query($sql_connect,$query);

while($row=$result->fetch_assoc())

{
    $table_data[]= array("id"=>$row['Id'],"category" =>$row['Category'],"name"=>$row['Name'],"year"=>$row['Year'],"img"=>$row['Img_url'],"cost"=>$row['Cost'],"desc"=>$row['Description']);
}

//echo json_encode($table_data);
$movie_category = $table_data[0]['category'];
$movie_price = $table_data[0]['cost'];
$movie_year = $table_data[0]['year'];
$movie_desc = $table_data[0]['desc'];
$movie_img = $table_data[0]['img'];
//echo $movie_category;

//error_log(print_r($movie_desc, TRUE));


$query1 = "SELECT * FROM movies where Category ='".$movie_category."' and Name != '".$movie_name."'" ;
$result1=mysqli_query($sql_connect,$query1);
while($row=$result1->fetch_assoc())

{
    $table_data1[]= array("id"=>$row['Id'],"category" =>$row['Category'],"name"=>$row['Name'],"year"=>$row['Year'],"img"=>$row['Img_url'],"cost"=>$row['Cost'],"desc"=>$row['Description']);
}

?>



<!DOCTYPE HTML>
<head>
    <title>Movies Store Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript" src="../js/movie_ajax.js"></script>
    <script type="text/javascript" src = "../js/index.js" ></script>
</head>
<body>
<div class="header">
    <div class="headertop_desc">
        <div class="wrap">
            <div class="nav_list">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="account_desc">
                <ul>
                    <li id="add-movie"><a href="../admin.html">Add-a-movie</a></li>
                    <li id="register1"><a href="signup_page.php">Register</a></li>
                    <li id="login1"><a href="login.php">Login</a></li>
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
            <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents : function() {
                        var obj = this;

                        obj.dd.on('click', function(event){
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });
            </script>
            <div class="clear"></div>
        </div>
    </div>
</div>




<div class="main">
    <div class="wrap">
        <div class="content_top">
            <div class="heading">
                <h3>Movie Description</h3>
            </div>
        </div>
        <div class="section group">
            <div class="cont-desc span_1_of_2">
                <div class="product-details">
                    <div class="grid images_3_of_2">
                        <img src="/images/<?php echo $movie_img ?>" alt="" />
                    </div>
                    <div class="desc span_3_of_2">
                        <h2><?php echo $movie_name ?> </h2>
                        <p><?php echo $movie_desc ?></p>
                        <div class="price">
                            <p>Price: <span>$<?php echo $movie_price ?>.00</span></p>
                        </div>
                        <div class="available">
                            <ul>
                                <li><span>Year:</span> &nbsp; <?php echo $movie_year ?></li>
                                <li><span>Units in Stock:</span>&nbsp; 566</li>
                            </ul>
                        </div>
                        <div class="share-desc">
                            <!--                            <div class="share">-->
                            <!--                                <p>Number of units :</p><input class="text_box" type="text">-->
                            <!--                            </div>-->
                            <div class="button" style="float: left"><span><a href=# onclick="addToCart('<?php echo $movie_name ?>')">Add to Cart</a></span></div>
                            <div class="clear"></div>
                        </div>
                        <div class="wish-list">
                            <ul>
                                <li class="wish"><a href="#">Add to Wishlist</a></li>
                                <li class="compare"><a href="#">Add to Compare</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="product_desc">
                    <h2>Details :</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
            <div class="rightsidebar span_3_of_1 sidebar">
                <h2>Specials</h2>
                <div class="special_movies">
                    <div class="movie_poster">
                        <a onclick="movie_preview('<?php echo $table_data1[0]['name'] ?>')"><img src="../images/<?php echo $table_data1[0]['img'] ?> " alt="" /></a>
                    </div>
                    <div class="movie_desc">
                        <h3><a onclick="movie_preview('<?php echo $table_data1[0]['name'] ?>')"><?php echo $table_data1[0]['name'] ?> </a></h3>
                        <p>$<?php echo $table_data1[0]['cost'].".00" ?> </p>
                        <span><a href=# onclick="addToCart('<?php echo $table_data1[0]['name'] ?>')">Add to Cart</a></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php if ($table_data1[1]['name']!=''): ?>
                <div class="special_movies">
                    <div class="movie_poster">
                        <a onclick="movie_preview('<?php echo $table_data1[1]['name'] ?>')"><img src="../images/<?php echo $table_data1[1]['img'] ?> " alt="" /></a>
                    </div>
                    <div class="movie_desc">
                        <h3><a onclick="movie_preview('<?php echo $table_data1[1]['name'] ?>')"><?php echo $table_data1[1]['name'] ?> </a></h3>
                        <p>$<?php echo $table_data1[1]['cost'].".00" ?> </p>
                        <span><a href=# onclick="addToCart('<?php echo $table_data1[1]['name'] ?>')">Add to Cart</a></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php endif ?>
                <?php if ($table_data1[2]['name']!=''): ?>
                <div class="special_movies">
                    <div class="movie_poster">
                        <a onclick="movie_preview('<?php echo $table_data1[2]['name'] ?>')"><img src="../images/<?php echo $table_data1[2]['img'] ?> " alt="" /></a>
                    </div>
                    <div class="movie_desc">
                        <h3><a onclick="movie_preview('<?php echo $table_data1[2]['name'] ?>')"><?php echo $table_data1[2]['name'] ?> </a></h3>
                        <p>$<?php echo $table_data1[2]['cost'].".00" ?> </p>
                        <span><a href=# onclick="addToCart('<?php echo $table_data1[2]['name'] ?>')">Add to Cart</a></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php endif ?>
                <?php if ($table_data1[3]['name']!=''): ?>
                <div class="special_movies">
                    <div class="movie_poster">
                        <a onclick="movie_preview('<?php echo $table_data1[3]['name'] ?>')"><img src="../images/<?php echo $table_data1[3]['img'] ?> " alt="" /></a>
                    </div>
                    <div class="movie_desc">
                        <h3><a onclick="movie_preview('<?php echo $table_data1[3]['name'] ?>')"><?php echo $table_data1[3]['name'] ?> </a></h3>
                        <p>$<?php echo $table_data1[3]['cost'].".00" ?> </p>
                        <span><a href=# onclick="addToCart('<?php echo $table_data1[3]['name'] ?>')">Add to Cart</a></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php endif ?>
                <?php if ($table_data1[4]['name']!=''): ?>
                    <div class="special_movies">
                        <div class="movie_poster">
                            <a onclick="movie_preview('<?php echo $table_data1[4]['name'] ?>')"><img src="../images/<?php echo $table_data1[4]['img'] ?> " alt="" /></a>
                        </div>
                        <div class="movie_desc">
                            <h3><a onclick="movie_preview('<?php echo $table_data1[4]['name'] ?>')"><?php echo $table_data1[4]['name'] ?> </a></h3>
                            <p>$<?php echo $table_data1[4]['cost'].".00" ?> </p>
                            <span><a href=# onclick="addToCart('<?php echo $table_data1[4]['name'] ?>')">Add to Cart</a></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endif ?>
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
                    <li><a href="../contact.html">Contact Us</a></li>
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
                    <li><a href="../contact.html">Help</a></li>
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
                        <li><a href="#" target="_blank"><img src="../images/facebook.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="../images/twitter.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="../images/skype.png" alt="" /> </a></li>
                        <li><a href="#" target="_blank"> <img src="../images/linkedin.png" alt="" /></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">Akshay - w3layouts</a> </p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>
