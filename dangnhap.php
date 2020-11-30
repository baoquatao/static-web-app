<?php
session_start();

?>
<?php 
require_once("connection.php");
if (isset($_POST["btn_submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
	    	}
			header('Location: index2.php');
		}
	}
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SHOP ONLINE  </title>
        <meta name="description" content="">
		<link rel="shortcut icon" href="images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
    <body>
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span> SĐT :</span><a href="#">(+34) 123 456 789 </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span> CÀI ĐẶT </span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">TÀI KHOẢN </a></li>
                                                    <li><a href="#">THANH TOÁN </a></li>
                                                    <li><a href="dangnhap.php">ĐĂNG NHẬP </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">VÍ  :</span>
                                            <div class="ht-currency-trigger"><span>USD $</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">VNĐ</a></li>
                                                    <li class="active"><a href="#">USD $</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">LANGUAGE :</span>
                                            <div class="ht-language-trigger"><span>VIETNAMESE</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">VIETNAMESE</a></li>
                                                    <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">ENGLISH </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">TẤT CẢ </option>                         
                                        <option value="10">Laptops</option>                         
                                        <option value="11">TIVI </option> 
                                        <option value="12">ĐIỆN THOẠI</option>     
                                        <option value="13">MÁY ẢNH </option>                          
                                        <option value="14">TAI NGHE</option>                                
                                        <option value="15">ĐỒNG HỒ </option>                           
                                        <option value="16">PHỤ KIỆN</option>
                                    </select>
                                    <input type="text" placeholder="Tìm Kiếm ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="#">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">180 $
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="index.php">Home</a>
                                            </li>
                                            <li class="megamenu-holder"><a href="#">SẢN PHẨM </a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="#">SẢN PHẨM </a>
                                                        <ul>
                                                          
                                                            <li><a href="#">Laptops</a></li>
                                                            <li><a href="#">TIVI </a></li>
                                                            <li><a href="#">ĐIỆN THOẠI</a></li>
                                                            <li><a href="#">MÁY ẢNH </a></li>
                                                            <li><a href="#">TAI NGHE </a></li>
                                                            <li><a href="#">ĐỒNG HỒ </a></li>
															<li><a href="#">PHỤ KIỆN </a></li>
														</ul>                                           	
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-holder"><a href="#">THÔNG TIN </a>
                                                <ul class="hb-dropdown">
                                                    <li class="sub-dropdown-holder"><a href="#">TIN TỨC </a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">TIN TỨC 1</a></li>
                                                            <li><a href="#">TIN TỨC 2</a></li>
                                                            <li><a href="#">TIN TỨC 3</a></li>
                                                            <li><a href="#">TIN TỨC 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">KHUYẾN MÃI </a>
													   <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">KHUYẾN MÃI 1</a></li>
                                                            <li><a href="#">KHUYẾN MÃI 2</a></li>
                                                            <li><a href="#">KHUYẾN MÃI 3</a></li>
                                                            <li><a href="#">KHUYẾN MÃI 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">SỰ KIỆN </a>
													   <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">SỰ KIỆN 1 </a></li>
                                                            <li><a href="#">SỰ KIỆN 2</a></li>
                                                            <li><a href="#">SỰ KIỆN 3</a></li>
                                                            <li><a href="#">SỰ KIỆN 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">VIDEO</a>
													   <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">VIDEO 1</a></li>
                                                            <li><a href="#">VIDEO 2</a></li>
                                                            <li><a href="#">VIDEO 3</a></li>
                                                            <li><a href="#">VIDEO 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            <li><a href="#">GIỚI THIÊU  </a></li>
                                            <li><a href="#">LIÊN LẠC </a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">ĐĂNG NHẬP </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 mb-30">
                            <!-- Login Form s-->
                            <form method="POST" action="dangnhap.php">
							<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                                <div class="login-form">
                                    <h4 class="login-title">đăng nhập</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>tài khoản </label>
                                            <input class="mb-0" type="text" name="username" >
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>mật khẩu </label>
                                            <input class="mb-0" type="password" name="password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me"> lưu </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                           <a href="dangky.php">tạo tài khoản</a>
                                        </div>
                                        <div class="col-md-12">
                                           
											<input type="submit" name="btn_submit" value="Đăng nhập">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            <div class="footer">
                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Giao hàng miễn phí</h2>
                                            <p>và đổi trả hàng miễn phí.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Thanh toán an toàn</h2>
                                            <p>Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất thế giới.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Mua sắm với sự tự tin</h2>
                                            <p> Luôn Bảo vệ  quyền lợi khách hàng từ khi nhấp chuột đến khi giao hàng..</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Trung tâm trợ giúp 24/7</h2>
                                            <p>Có một câu hỏi? Gọi cho nhân viên tư vấn hoặc trò chuyện trực tuyến.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="images/menu/logo/1.jpg" alt="Footer Logo">
                                        <p class="info">
                                           cửa hàng uy tín SHOP ONLINE
                                        </p>
                                    </div>
                                    <ul class="des">
										<li>
                                            <span>ADMIN 1 : </span>
                                          ĐÀO THÀNH TRUNG -1821050046
                                        </li>
										<li>
                                            <span>ADMIN 2 : </span>
                                          TRỊNH THIÊN BẢO -1821050426
                                        </li>
                                        <li>
                                            <span>Địa chỉ : </span>
                                           Đại học mỏ địa chất 
                                        </li>
                                        <li>
                                            <span>điện thoại : </span>
                                            <a href="#">(+34) 123 456 789 </a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="#">@gmail.com</a>
                                        </li>
										
                                    </ul>
                                </div>
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Follow Us</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class="footer-newsletter">
                                        <h4>ĐĂNG KÝ ĐỂ NHÂN THÔNG BÁO </h4>
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                           <div id="mc_embed_signup_scroll">
                                              <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="ĐIỀN EMAIL CỦA BẠN ... " />
                                                <button  class="btn" id="mc-submit">Subscribe</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Footer Payment Area -->
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="images/payment/1.png" alt="">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>
</html>