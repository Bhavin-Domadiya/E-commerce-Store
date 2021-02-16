@extends('/layout/layout')
@section('header')
     <title> Jedis </title>
	<!-- slider -->
		<link rel="stylesheet" type="text/css" href="/assets/css/slick.css"/>
	<!-- csss -->
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
@endsection

@section('body')

<!-- banner ------------->
	<h1>hiii</h1>
	<section class="banner">
		<div class="cheking">
			<div class="slider-img" style="background-image: url(image/slider1_2000x.jpg);background-repeat: no-repeat;background-size: cover;">
				<div class="container">
					<div class="heading">
						<h2>Designed in a silhouette & inspired by Art-Deco style.</h2>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>
				</div>
			</div>
			<div class="slider-img" style="background-image: url(image/slider2_2000x.jpg);background-repeat: no-repeat;background-size: cover;">
				<div class="container">
					<div class="heading">
						<h2>Be in fashion wear trendy shoes every day</h2>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>
				</div>
			</div>
			<div class="slider-img" style="background-image: url(image/slider3_2000x.jpg );background-repeat: no-repeat;background-size: cover;">
				<div class="container">
					<div class="heading right">
						<h2>We hunt for the best shoe collection for shoe-lovers</h2>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/to-top.png" alt="to-top"/></button>

	


<!-- line bar --------->
	<section class="line-bar" style="background: #f8f8f8;">
		<div class="container">
			<div class="deliveris-details">
				<div class="deliveris-info">
					<div class="deliveris-info-img">
						<img src="image/icon-2_40x40.png" alt="icon-2_40x40"/>
					</div>
					<div class="deliveris-info-contact">
						<h2>Call Us Anytime</h2>
						<p>+ (0401) 5444 66678</p>
					</div>
				</div>
				<div class="deliveris-info">
					<div class="deliveris-info-img">
						<img src="image/icon-1_f0d0592c-1e53-455e-b008-ef5a052c860d_40x40.png" alt="icon-1_f0d0592c-1e53-455e-b008-ef5a052c860d_40x40"/>
					</div>
					<div class="deliveris-info-contact">
						<h2>Free Shipping</h2>
						<p>When you spend $100+</p>
					</div>
				</div>
				<div class="deliveris-info">
					<div class="deliveris-info-img">
						<img src="image/icon-4_40x40.png" alt="icon-4_40x40">
					</div>
					<div class="deliveris-info-contact">
						<h2>Free Returns</h2>
						<p>30-days free return policy</p>
					</div>
				</div>
				<div class="deliveris-info">
					<div class="deliveris-info-img">
						<img src="image/icon-3_40x40.png" alt="icon-3_40x40">
					</div>
					<div class="deliveris-info-contact">
						<h2>Secured Payments</h2>
						<p>Major credit cards accepted</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- offer section -->
	<section class="offer section">
		<div class="container">
			<div class="sort-desc">
				<p>Our goal is to improve the quality of every product that we make. We believe that manufacturing is a sacred process. We focus on making every day essentials out of luxury materials. We push the envelope from our studio in Copenhagen.</p>
			</div>
			<div class="shoping-details">
				<div class="mens" style="background-image: url(image/img-1.jpg);background-size: cover;">
					<div class="featured-content">
						<h5>Men's</h5>
						<h4>Fashion Shoe
							<span>10% Off</span>
						</h4>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>	
				</div>				
				<div class="mens" style="background-image: url(image/jadis-01.jpg);background-size: cover;">
					<div class="featured-content right">
						<h5>Women's</h5>
						<h4>Style Sandals
							<span>25% Off</span>
						</h4>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>	
				</div>
			</div>
			<div class="shoping-details last">
				<div class="mens" style="background-image: url(image/img-3.jpg);background-size: cover;">
					<div class="featured-content collections">
						<h5>Sports Shoe</h5>
						<h4>Winter collections
							<span>Flat 50% Off</span>
						</h4>
						<a class="praymari-button" href="shop-page">Shop now</a>
					</div>	
				</div>		
			</div>
		</div>
	</section>



<!-- branded sendale ------------>
	<section class="branded sendale" style="background-image:url(image/bgimg1.jpg);background-size: cover; background-attachment:fixed; ">
		<div class="container">
			<div class="branded-product">
				<h5>Women's Day Special Offer</h5>
				<h2>All Branded Sandals are Flat <span>50%</span> Discount</h2>
				<a class="praymari-button" href="shop-page">Shop now</a>
			</div>
		</div>
	</section>

<!-- slider 2 -->
	<section class="testimonial" >
		<div class="container">
			<div class="heading-box"></div>
			<div class="heading-text">
				<div class="slider">
					<p>"The quality is great and the expertise is far above other stores. I love it and wish every one should try it.</p>
					<p class="slider-text">Joanna</p>
				</div>
				<div class="slider">
					<p>We were very happy with the the collection and its quality. What a brilliant website, business and service."</p>
					<p class="slider-text">Stefanny</p>
				</div>
				<div class="slider">
					<p>"The quality is great and the expertise is far above other stores. I love it and wish every one should try it.</p>
					<p class="slider-text">Leonardo</p>
				</div>
			</div>
		</div>
	</section>
<!-- the fall collecton -->
<!-- 	<section class="fall-collecton">
		<div class="container" style="background: #f8f8f8;">
			<div class="full-wrap">
				<div class="fall-collecton-headimg">
					<h5>The Fall Collection</h5>
					<p>Our new fall favourites are inspired by the color palettes of falling leaves.</p>
					<a href="shop-page.html">Shop the Collection →</a>
				</div>
				<div class="all-product">
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-100_large.jpg" alt="shop-new-100_large"/></a>
						<a href="#">Mochi Formal</a>
						<span>$530.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-99_large.jpg" alt="shop-new-99_large"/></a>
						<a href="#">Metro Sports</a>
						<span>$789.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-75_large.jpg" alt="shop-new-75_large"/></a>
						<a href="#">Moccasins Sport</a>
						<span>$540.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-67_large.jpg" alt="shop-new-67_large"/></a>
						<a href="#">Polka Sport</a>
						<span>$560.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-101_large.jpg" alt="shop-new-101_large"/></a>
						<a href="#">Trendy Casual</a>
						<span>$530.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-69_large.jpg" alt="shop-new-69_large"/></a>
						<a href="#">Belg Formal Shoe</a>
						<span>$320.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-70_large.jpg" alt="shop-new-70_large"/></a>
						<a href="#">Stilettos</a>
						<span>$529.00</span>
					</div>
					<div class="products-details">
						<a href="product-page.html"><img src="image/shop-new-74_large.jpg" alt="shop-new-74_large"/></a>
						<a href="#">Dura Shoe</a>
						<span>$320.00</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->

<!-- all branded --------->
	<section class="branded sendale" style="background-image:url(image/img-4.jpg);background-size: cover; background-attachment:fixed; ">
		<div class="container">
			<div class="branded-product all-branded">
				<h5>Black Friday Offer</h5>
				<h2>All Branded Men's Shoes are Flat <span>50%</span></h2>
				<a class="praymari-button" href="shop-page">Shop now</a>
			</div>
		</div>
	</section>

<!-- slider -------------->
	<section class="slider">
		<div class="container">
			<div class="slider-image">
				<div class="slider-box">
					<a href="#"><img src="image/logo-1_200x150.png" alt="logo-1_200x150"/></a>	
					<a href="#"><img src="image/logo-2_200x150.png" alt="logo-2_200x150"/></a>
					<a href="#"><img src="image/logo-3_200x150.png" alt="logo-3_200x150"/></a>
					<a href="#"><img src="image/logo-4_200x150.png" alt="logo-4_200x150"/></a>
					<a href="#"><img src="image/logo-5_200x150.png" alt="download-20"/></a>
					<a href="#"><img src="image/logo-6_200x150.png" alt="logo-6_200x150"/></a>
					<a href="#"><img src="image/logo-1_200x150.png" alt="logo-1_200x150"/></a>	
					<a href="#"><img src="image/logo-2_200x150.png" alt="logo-2_200x150"/></a>
					<a href="#"><img src="image/logo-3_200x150.png" alt="logo-3_200x150"/></a>
					<a href="#"><img src="image/logo-4_200x150.png" alt="logo-4_200x150"/></a>
				</div>
			</div>
		</div>
	</section>


@endsection

@section('script')
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<script type="text/javascript">
		 	
	    $(document).ready(function(){
	      $('.cheking').slick({
				dots: false,
				infinite: true,
				speed: 500,
				fade: true,
				autoplay: true,
				adaptiveHeight: true,
				cssEase: 'linear'
			});

	      $('.slider-box').slick({
			  slidesToShow: 6,
			  arrow:false,
			  slidesToScroll: 3,
			   	responsive: [
				    {
				      breakpoint: 1024,
				      settings: {
				        slidesToShow: 5,
				        slidesToScroll: 3,
				        infinite: true,
				        dots: false
				      }
				    },
				    {
				      breakpoint: 600,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				  ]
				});

	    });

	    $('.heading-text').slick({
		  dots: false,
		  infinite: true,
		  arrows: false,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear'
		});

	   

	    $(window).scroll(function(){
		    if ($(this).scrollTop() > 50) {
		       $('header').addClass('sticky-header');	
		    } else {
		       $('header').removeClass('sticky-header');
		    }
		});



		$(document).ready(function(){
			$(".toggle").click(function(){
			  $(".menu").toggle("active");
			});
		});
		function myFunction(x) {
		  x.classList.toggle("change");
		}


		

		var mybutton = document.getElementById("myBtn");

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    mybutton.style.display = "block";
		  } else {
		    mybutton.style.display = "none";
		  }
		}


		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>

@endsection