<?php
  $user_name = $_GET['username'];
  // $user_name = 'swaroop';
  include 'fetch_movies.php';
  $jdata = fetchMovies();
  error_log(print_r('', TRUE));
?>

<!DOCTYPE HTML>
<head>
    <title>Movies Store Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src = "../js/index.js" ></script>
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript">
      function loadMovies(jdata){
        console.log(jdata);
        var d2 = $('<div class="section group">');
        $("#movie-page-cart").empty();
        $(function () {
            var d1 = $('<div class="content_top">').append(
                $('<div class="heading">').append(
                    $('<h3>').text('Your Movies')
                ));
            $("#movie-page-cart").append(d1);
            $("#movie-page-cart").append(d2);
        });

        if(jdata != 0) {
            $.each(jdata, function (i, item) {
                var movie_cost = item.Cost;
                var movie_name = item.Name;
                var movie_image = "../images/" + item.Img_url;
                var mov_name = '\'' + movie_name + '\'';
                var d3 = $('<div class="grid_1_of_5 images_1_of_5">').append(
                    $('<a onclick="movie_preview(' + mov_name + ')">').append($('<img src=' + movie_image + ' alt="" />')),
                    $('<h2>').append($('<a onclick="movie_preview(' + mov_name + ')">').text(movie_name)),
                    $('<div class="price-details">').append(
                        $('<div class="price-number">').append(
                            $('<p>').append($('<span class="rupees">').text("$" + movie_cost + ".00"))),
                        $('<div class="add-cart">').append(
                            $('<h4>').append($('<a onclick="removeFromCart(' + mov_name + ')">').text("Remove Item"))),
                        $('<div class="clear">')
                    ));
                d2.append(d3);
            })
        }
        else{
            $("#movie-page-cart").append($('<p><br/>&nbsp;&nbsp;No movies found </p>'));
        }
      }

      // function removeFromCart(name){
      //   var username = '<?php echo $user_name ?>';
      //   console.log(username, name);
      //   var showCartURL = 'http://localhost/php/fetch_movies.php?action=fetch';
      //   $.ajax({
      //       async: false,
      //       url: 'http://localhost/php/update_cart.php',
      //       type: 'post',
      //       data: {user_name : username, movie_name : name, action: 'delete' },
      //       success:function(data){
      //         $.get(showCartURL, function success(response) {
      //           var jdata=$.parseJSON(response);
      //           loadMovies(jdata);
      //         });
      //       },
      //       error: function() { alert("error loading file");  }
      //   });
      // }
    </script>
</head>
<body>
<div class="header">
    <div class="headertop_desc">
        <div class="wrap">
            <div class="nav_list">
                <ul>
                    <li><a href="../index.php">Home</a></li>
<!--                    <li><a href="../contact.html">Sitemap</a></li>-->
                    <li><a href="../contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="account_desc">
                <ul>
                    <li><a href="signup_page.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
<!--                    <li><a href="../preview.html">Delivery</a></li>-->
                    <li><a href="show_cart.php">Checkout</a></li>
                    <li><a href="show_cart.php">My Account</a></li>
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
              <div class="cart">
                <p><span>Check out</span></p>
                  <a href="#"></a>
              </div>
              <div class="cart">
                <p><span>Empty Cart</span></p>
                <a href="#"></a>
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
      <div class="content" id="cont1">
        <div class="content" id="movie-page-cart">
          <script type="text/javascript">
            $(document).ready(function(){
              var data = '<?php echo $jdata ?>';
              var jdata=$.parseJSON(data);
              loadMovies(jdata);
            });

          </script>
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
