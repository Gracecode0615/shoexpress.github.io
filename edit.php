<?php
include 'config.php';
$id = mysqli_real_escape_string($con,$_GET['id']);
$sql = "SELECT * FROM `user` WHERE (`id`='$id')";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM `user`";
$query2 = mysqli_query($con,$sql);
$row2 = mysqli_fetch_assoc($query);

if (isset($_POST['reg'])){
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$email = mysqli_real_escape_string($con,$_POST['email']);

	$sql3 ="UPDATE `user` SET `username`='$username',`phone`='$phone',`email`='$email' WHERE (`id`='$id')";
	$query = mysqli_query($con, $sql3);
	if($query){
		session_start();
		$_SESSION['user_id']=$sql;
		header('location:admin.php');
	}else{
		echo "<div class='alert alert-danger'>error udate failed</div>".mysqli_error($con);
	}
}
?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- /index.html   11 Nov 2019 12:16:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Update-ShoeXpress</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="template-index  template-index-">
<div id="pre-loader">
    <img src="assets/images/loader.gif" alt="Loading..." />
</div>
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="currency-picker">
                        <span class="selected-currency">NG</span>
                        <ul id="currencies">
                            <li data-currency="INR" class="">INR</li>
                            <li data-currency="GBP" class="">GBP</li>
                            <li data-currency="CAD" class="">CAD</li>
                            <li data-currency="NG" class="selected">NG</li>
                            <li data-currency="AUD" class="">AUD</li>
                            <li data-currency="EUR" class="">EUR</li>
                            <li data-currency="JPY" class="">JPY</li>
                        </ul>
                    </div>
                    <div class="language-dropdown">
                        <span class="language-dd">English</span>
                        <ul id="language">
                            <li class="">German</li>
                            <li class="">French</li>
                        </ul>
                    </div>
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +234 70 38 2906 72</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Create Account</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block " style="color: #fff;">
                    <a href="index.html">
                    	<!-- <img src="assets/images/logo.svg" alt=" Multipurpose Html Template" title=" Multipurpose Html Template" /> -->
                         <h2 style="color: #fff; text-decoration: none;"><strong>Shoe</strong>Xpress</h2>
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav style="color: #fff;" class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="#">New & Featured<i class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style1">
                                    <ul class="grid mmWrapper">
                                        <li class="grid__item large-up--one-whole">
                                            <ul class="grid">
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Trending</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="index.html" class="site-nav lvl-2">Home 1 - ShoeXpress Extra</a></li>
                                                      <li class="lvl-2"><a href="home2-default.html" class="site-nav lvl-2">Home 2 - Default</a></li>
                                                     <li class="lvl-2"><a href="home4-fullwidth.html" class="site-nav lvl-2">Home 4 - Shop Sport</a></li>
                                                     <li class="lvl-2"><a href="home7-shoes.html" class="site-nav lvl-2">Home 4 - Shoes</a></li>
                                                      
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Sneakers</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="home8-jewellery.html" class="site-nav lvl-2"><strong>Shop classics Shoes</strong></a></li>
                                                        <li class="lvl-2"><a href="home9-parallax.html" class="site-nav lvl-2">Home 9 - Sneaker Hub</a></li>
                                                        <li class="lvl-2"><a href="home10-minimal.html" class="site-nav lvl-2">Home 10 - Minimal</a></li>
                                                        <li class="lvl-2"><a href="home11-grid.html" class="site-nav lvl-2">Home 11 - Grid</a></li>
                                                        <li class="lvl-2"><a href="home12-category.html" class="site-nav lvl-2">Home 12 - Category</a></li>
                                                        <li class="lvl-2"><a href="home13-auto-parts.html" class="site-nav lvl-2">Home 13 - Auto Parts</a></li>
                                                        <li class="lvl-2"><a href="home14-bags.html" class="site-nav lvl-2">Home 14 - Bags <span class="lbl nm_label1">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New sections</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="" class="site-nav lvl-2"><strong>Trending</strong></a></li>
                                                        <li class="lvl-2"><a href="home7-shoes.html" class="site-nav lvl-2">Columns with Items</a></li>
                                                        <li class="lvl-2"><a href="home6-modern.html" class="site-nav lvl-2">Text columns with images</a></li>
                                                        <li class="lvl-2"><a href="home2-default.html" class="site-nav lvl-2">Products Carousel</a></li>
                                                        <li class="lvl-2"><a href="home9-parallax.html" class="site-nav lvl-2">Parallax Banner</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New Features</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="home13-auto-parts.html" class="site-nav lvl-2">Top Information Bar <span class="lbl nm_label1">New</span></a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Age Varification <span class="lbl nm_label1">New</span></a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Footer Blocks</a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">2 New Megamenu style</a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Show Total Savings <span class="lbl nm_label3">Hot</span></a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">New Custom Icons</a></li>
                                                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Auto Currency</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="#">Shoe<i class="anm anm-angle-down-l"></i></a>
                            	<div class="megamenu style4">
                                    <ul class="grid grid--uniform mmWrapper">
                                    	<li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Shoe Pages</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2"></a>Lifestyles</li>
                                                <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">All pages</a></li>
                                                <li class="lvl-2"><a href="shop-fullwidth.html" class="site-nav lvl-2">Sneakers1</a></li>
                                                <li class="lvl-2"><a href="shop-grid-3.html" class="site-nav lvl-2">Sneakers2</a></li>
                                                <li class="lvl-2"><a href="shop-grid-4.html" class="site-nav lvl-2">Sneaker3</a></li>
                                                <li class="lvl-2"><a href="shop-grid-5.html" class="site-nav lvl-2">Sneakers4</a></li>
                                                <li class="lvl-2"><a href="shop-grid-3.html" class="site-nav lvl-2">Sneaker5</a></li>
                                                <li class="lvl-2"><a href="shop-grid-7.html" class="site-nav lvl-2">Sneaker6</a></li>
                                                <li class="lvl-2"><a href="shop-listview.html" class="site-nav lvl-2">Sneakers7</a></li>
                                            </ul>
                                      	</li>
                                      	
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3">
                                        	<a href="#"><img src="images/men1.4.jpeg" alt="" title="" /></a>
                                        </li>
                                    </ul>
                              	</div>
                            </li>
                        <li class="lvl1 parent megamenu"><a href="#">Men & Women <i class="anm anm-angle-down-l"></i></a>
                        	<div class="megamenu style2">
                                <ul class="grid mmWrapper">
                                    <li class="grid__item one-whole">
                                        <ul class="grid">
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Men & Women Page</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="product-layout-1.html" class="site-nav lvl-2">Sandals and Slides</a></li>
                                                    <li class="lvl-2"><a href="product-layout-2.html" class="site-nav lvl-2">Shoes</a></li>
                                                    <li class="lvl-2"><a href="product-layout-3.html" class="site-nav lvl-2">Sneakers1</a></li>
                                                    <li class="lvl-2"><a href="product-with-left-thumbs.html" class="site-nav lvl-2">Sneaker2</a></li>
                                                    <li class="lvl-2"><a href="product-with-right-thumbs.html" class="site-nav lvl-2">Sneaker3</a></li>
                                                    <li class="lvl-2"><a href="product-with-bottom-thumbs.html" class="site-nav lvl-2">Sneaker4</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Features</a>
                                                <ul class="subLinks">
                                                  <li class="lvl-2"><a href="short-description.html" class="site-nav lvl-2">Product description</a></li>
                                                  <li class="lvl-2"><a href="product-countdown.html" class="site-nav lvl-2">Product countdown</a></li>
                                                  <li class="lvl-2"><a href="product-video.html" class="site-nav lvl-2">Product video</a></li>
                                                  <li class="lvl-2"><a href="product-quantity-message.html" class="site-nav lvl-2">Product Quantity Message</a></li>
                                                  <li class="lvl-2"><a href="product-visitor-sold-count.html" class="site-nav lvl-2">Product Visitor/Sold Count <span class="lbl nm_label3">Hot</span></a></li>
                                                  <li class="lvl-2"><a href="product-zoom-lightbox.html" class="site-nav lvl-2">Product Zoom/Lightbox <span class="lbl nm_label1">New</span></a></li>
                                                </ul>
                                              </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Features</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="product-with-variant-image.html" class="site-nav lvl-2">Product </a></li>
                                                      <li class="lvl-2"><a href="product-with-color-swatch.html" class="site-nav lvl-2">Product with Color Swatch</a></li>
                                                      <li class="lvl-2"><a href="product-with-image-swatch.html" class="site-nav lvl-2">Product with Image Swatch</a></li>
                                                      <li class="lvl-2"><a href="product-with-dropdown.html" class="site-nav lvl-2">Product with Dropdown</a></li>
                                                      <li class="lvl-2"><a href="product-with-rounded-square.html" class="site-nav lvl-2">Product with Rounded Square</a></li>
                                                      <li class="lvl-2"><a href="swatches-style.html" class="site-nav lvl-2">Product Swatches All Style</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Features</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="product-accordion.html" class="site-nav lvl-2">Product Accordion</a></li>
                                                      <li class="lvl-2"><a href="product-pre-orders.html" class="site-nav lvl-2">Product Pre-orders <span class="lbl nm_label1">New</span></a></li>
                                                      <li class="lvl-2"><a href="product-labels-detail.html" class="site-nav lvl-2">Product Labels</a></li>
                                                      <li class="lvl-2"><a href="product-discount.html" class="site-nav lvl-2">Product Discount In %</a></li>
                                                      <li class="lvl-2"><a href="product-shipping-message.html" class="site-nav lvl-2">Product Shipping Message</a></li>
                                                      <li class="lvl-2"><a href="size-guide.html" class="site-nav lvl-2">Size Guide <span class="lbl nm_label1">New</span></a></li>
                                                    </ul>
                                                </li>
                                        </ul>
                                    </li>
                                  	<li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                </ul>
                          	</div>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                                 </ul>
                            </li>
                            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                                 </ul>
                            </li>
							<li><a href="checkout.html" class="site-nav">Checkout</a></li>
                            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-angle-right-l"></i></a>
                              <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                              </ul>
                            </li>
                            <li><a href="404.html" class="site-nav">404</a></li>
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label1">New</span> </a></li>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Blog <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                            <li><a href="blog-article.html" class="site-nav">Article</a></li>
                          </ul>
                        </li>
                        <li class="lvl1"><a href="#"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-3 col-sm-3 col-md-3 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <h2><strong>Shoe</strong>Xpress</h2>
                            <!-- <img src="assets/images/logo.svg" alt="ShoeXpress" title="ShoeXpress" /> -->
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#;" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="images/men3.3.jpeg" alt="sneakers" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sneakers</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="images/men4.3.jpeg" alt="sneakers" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">New & Featured<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="index.html" class="site-nav">Home 1 - ShoeXpress Extra/a></li>
                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Shop Sport </a></li>
                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
              <ul>
                <li ><a href="home8-jewellery.html" class="site-nav"><strong>Shop classics Shoes</strong></a></li>
                <li ><a href="home9-parallax.html" class="site-nav">Home 9 - Sneaker Hub</a></li>
                <li ><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                <li ><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                <li ><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags <span class="lbl nm_label1">New</span></a></li>
                                          
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li ><a href="" class="site-nav "><strong>Trending</strong></a></li>
                <li><a href="home7-shoes.html" class="site-nav ">Columns with Items</a></li>
                <li ><a href="home6-modern.html" class="site-nav ">Text columns with images</a></li>
                <li ><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                <li ><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
            </ul>
            </li>
            <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li ><a href="home13-auto-parts.html" class="site-nav lvl-2">Top Information Bar <span class="lbl nm_label1">New</span></a></li>
                <li ><a href="#" class="site-nav ">Age Varification <span class="lbl nm_label1">New</span></a></li>
                <li ><a href="#" class="site-nav">Footer Blocks</a></li>
                <li ><a href="#" class="site-nav ">2 New Megamenu style</a></li>
                <li ><a href="#" class="site-nav ">Show Total Savings <span class="lbl nm_label3">Hot</span></a></li>
                <li ><a href="#" class="site-nav ">New Custom Icons</a></li>
                <li ><a href="#" class="site-nav last">Auto Currency</a></li>
                                                  
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
              <ul>
                <li ><a href="shop-left-sidebar.html" class="site-nav"></a>Lifestyles</li>
                <li ><a href="shop-right-sidebar.html" class="site-nav">All pages</a></li>
                <li ><a href="shop-fullwidth.html" class="site-nav">Sneakers1</a></li>
                <li ><a href="shop-grid-3.html" class="site-nav">Sneakers2</a></li>
                <li ><a href="shop-grid-4.html" class="site-nav">Sneaker3</a></li>
                <li ><a href="shop-grid-5.html" class="site-nav">Sneakers4</a></li>
                <li ><a href="shop-grid-3.html" class="site-nav">Sneaker5</a></li>
                <li ><a href="shop-grid-7.html" class="site-nav">Sneaker6</a></li>
                <li ><a href="shop-listview.html" class="site-nav">Sneakers7</a></li>
            </ul>
            </li>
            <li><a href="#" class="site-nav">Men & women<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Load More</a></li>
                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left Thumbs</a></li>
                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right Thumbs</a></li>
                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom Thumbs</a></li>
              </ul>
            </li>
            <li><a href="short-description.html" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity Message</a></li>
                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold Count </a></li>
                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox </a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping Message</a></li>
                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
          <ul>
          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                 </ul>
            </li>
            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                 </ul>
            </li>
			<li><a href="checkout.html" class="site-nav">Checkout</a></li>
            <li><a href="checkout.html" class="site-nav">Checkout</a></li>
            <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
              </ul>
            </li>
            <li><a href="404.html" class="site-nav">404</a></li>
            <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
            <li><a href="blog-article.html" class="site-nav">Article</a></li>
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper mt-5"><h1 class="page-width">Admin Update Form</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="post" action="" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerName">Username</label>
                                    <input type="text" name="username" placeholder="" id="CustomerName" value="<?php echo $row['username'];?>" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerNumber">Phone number</label>
                                    <input type="tel" value="<?php echo $row['phone'];?>" name="phone" placeholder="" id="CustomerNumber" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="email" placeholder="" id="CustomerEmail" value="<?php echo $row['email'];?>" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                            </div>
            
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <!-- <input type="submit" class="btn mb-3" name="reg" value="Sign up"> -->
                                 <button type="submit" class="btn mb-3" id="submit"  name="reg" >Update</button>

                                <p class="mb-4">
                                    <!-- <p>This&nbsp;is&nbsp;an&nbsp;example&nbsp;of&nbsp;using&nbsp;non-breaking&nbsp;spaces.</p> -->
                                <a href="#" id="RecoverPassword">Already have an Account?</a> &nbsp; | &nbsp;
                                  <a href="login.html" id="customer_register_link">Login</a>
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="about-us.html">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="register.html">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="faqs.html">FAQ's</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faqs.html">Orders and Returns</a></li>
                                <li><a href="contact-us.html">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>alx hub</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(+234) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-3 col-lg-3 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span>ShoeXpress</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- shoexpress/login.html   11 Nov 2019 12:22:27 GMT -->
</html>