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
	      <a class="navbar-brand" href="/">Bhanu's Ecommers</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop/">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart/">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
			  <li class="nav-item"><a href="Team/" class="nav-link">Contact</a></li>
			  {% if user.is_authenticated %}
					<li class="nav-item"><a href="Logout" class="nav-link">Logout</a></li>
					<li class="nav-item"><a href="#" class="nav-link">{{user.first_name}}</a></li>
               {% else %}
					   <li class="nav-item"><a href="Login" class="nav-link">Login</a></li>
					   <li class="nav-item"><a href="Signup" class="nav-link">Signup</a></li>
				{% endif %}
			  <li class="nav-item cta cta-colored"><a href="{% url 'cart' '-' user.id 0 %}" class="nav-link"><span class="icon-shopping_cart"></span>[{{co}}]</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(static/images/logo2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">We serve grocerys &amp; stapies</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#Main" class="btn btn-primary">View Details(Click to scroll down)</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(static/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#Main" class="btn btn-primary">View Details(Click to scroll down)</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
	</section>
	
    <section class="ftco-section" id="Main">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over ₹1500</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(static/images/category.jpg);">
									<div class="text text-center">
										<h2>Vegetables</h2>
										<p>Protect the health of every home</p>
										<p><a href="Vegetables/" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(static/images/atta.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="AttaFloursSooji/" >Atta, Flours & Sooji</a></h2>
									</div>
								</div>
								
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(static/images/pulses.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="DalsPulses/">Dals & Pulses</a></h2>
									</div>
								</div><br>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(static/images/rice.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="Rice/">Rice</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(static/images/bread.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="DailyBakery/">Daily & Bakery</a></h2>
							</div>		
						</div>

						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(static/images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="Staples/">Staples</a></h2>
							</div>
						</div>
						<br>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(static/images/snacks.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="SnacksBranuedFoods/">Snacks & Branued Foods</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products with Discounts</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
		</div>
		
    	<div class="container">
    		<div class="row">
				{% for ats in Atta_Flours_Sooji %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 1 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 1 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 1 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in DalsPulse %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 2 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 2 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 2 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in DailyBakery %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 3 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 3 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 3 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in Staples %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 4 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 4 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 4 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in SnacksBreanuedFoods %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 5 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 5 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 5 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in Vegetables %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 6 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 6 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 6 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
				{% for ats in Rice %}
				{% if ats.offer_box == 1 %}
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
						<a href="{% url 'Product_details' ats.id user.id 7 %}" class="img-prod"><img class="img-fluid" src="{{ats.img.url}}" alt="Imge error">
    						<span class="status">{{ats.offer_persentage}}%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ats.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{ats.price}}</span><span class="price-sale">₹{{ats.price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{% url 'Product_details' ats.id user.id 7 %}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{% url 'cart' ats.id user.id 7 %}" class="buy-now d-flex justify-content-center align-items-center mx-1"  method="POST">
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
		</div>
    </section>
		
		

    
    <hr>

		

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
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><h5>???????</h5></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <a href="https://colorlib.com" target="_blank">Colorlib</a> by Bhanu
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