<?php
{% load static %}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecommers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{% static 'css/open-iconic-bootstrap.min.css' %}">
    <link rel="stylesheet" href="{% static 'css/animate.css' %}">
    
    <link rel="stylesheet" href="{% static 'css/owl.carousel.min.css' %}">
    <link rel="stylesheet" href="{% static 'css/owl.theme.default.min.css' %}">
    <link rel="stylesheet" href="{% static 'css/magnific-popup.css' %}">

    <link rel="stylesheet" href="{% static 'css/aos.css' %}">

    <link rel="stylesheet" href="{% static 'css/ionicons.min.css' %}">

    <link rel="stylesheet" href="{% static 'css/bootstrap-datepicker.css' %}">
    <link rel="stylesheet" href="{% static 'css/jquery.timepicker.css' %}">

    
    <link rel="stylesheet" href="{% static 'css/flaticon.css' %}">
    <link rel="stylesheet" href="{% static 'css/icomoon.css' %}">
    <link rel="stylesheet" href="{% static 'css/style.css' %}">
  </head>
  <body class="goto-here">
    <script>
      document.onkeydown = function(e) {
        if(event.keyCode == 123) {
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
          return false;
        }
      }
      document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Bhanu's Ecommers/a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/shop">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="{% url 'cart' '-' user.id 0 %}">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="/Team" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="{% url 'cart' '-' user.id 0 %}" class="nav-link"><span class="icon-shopping_cart"></span>[{{co}}]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('/static/images/logo2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
                        <li><a href="/shop">All</a></li>
    					<li><a href="/Vegetables">Vegetables</a></li>
    					<li><a href="/AttaFloursSooji" >AttaFloursSooji</a></li>
    					<li><a href="/DalsPulses" >JDalsPulses</a></li>
                        <li><a href="/Rice" >Rice</a></li>
                        <li><a href="/DailyBakery" class="active">DailyBakery</a></li>
                        <li><a href="/Staples">Staples</a></li>
                        <li><a href="/SnacksBranuedFoods">SnacksBranuedFoods</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row" id="vegetables">
				{% for i in DailyBakery %}
				{% if i.offer_box == 0 %}
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="{{i.img.url}}" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
              <h3><a href="#">{{i.name}}</a></h3>
              <div class="d-flex">
                <div class="pricing">
                  <p class="price"><span>₹{{i.price}}</span></p>
                </div>
              </div>
              <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                    <span><i class="ion-ios-menu"></i></span>
                  </a>
                  <a href="{% url 'cart' i.id user.id 3 %}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                    <span><i class="ion-ios-cart"></i></span>
                  </a>
                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                    <span><i class="ion-ios-heart"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
				{% endif %}
				{% endfor %}
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with Colorlib by Bhanu</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{% static 'js/jquery.min.js' %}"></script>
  <script src="{% static 'js/jquery-migrate-3.0.1.min.js' %}"></script>
  <script src="{% static 'js/popper.min.js' %}"></script>
  <script src="{% static 'js/bootstrap.min.js' %}"></script>
  <script src="{% static 'js/jquery.easing.1.3.js' %}"></script>
  <script src="{% static 'js/jquery.waypoints.min.js' %}"></script>
  <script src="{% static 'js/jquery.stellar.min.js' %}"></script>
  <script src="{% static 'js/owl.carousel.min.js' %}"></script>
  <script src="{% static 'js/jquery.magnific-popup.min.js' %}"></script>
  <script src="{% static 'js/aos.js' %}"></script>
  <script src="{% static 'js/jquery.animateNumber.min.js' %}"></script>
  <script src="{% static 'js/bootstrap-datepicker.js' %}"></script>
  <script src="{% static 'js/scrollax.min.js' %}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{% static 'js/google-map.js' %}"></script>
  <script src="{% static 'js/main.js' %}"></script>
    
  </body>
</html>
?>