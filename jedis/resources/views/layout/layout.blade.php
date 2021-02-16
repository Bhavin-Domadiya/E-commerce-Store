<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font-style -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- header -------------->
	<header>
		<div class="container">
			<div class="logo">
				<a href="/"><img src="/image/logo.png"/></a>
				<div class="detalis-login">
					@if (session('client'))
                        <!-- {{-- <select name="" id=""> -->
							<!-- <option value=""></option> -->
							<!-- <option value="">  </option> -->
						<!-- </select> --}} -->
						<ul class="user-pro">
							<li><img src="image/user1.png" style="width: 33px;">
								<ul class="show">
									<li><a href="/user-logout" title="Click to logout"> Logout {{ Session::get('client') }} </a></li>
								</ul>
							</li>
						</ul>
                    @else
                        <a href="/user-login">Log in</a>
                        <a href="/user-signup">Create Account</a>
                    @endif
				</div>
			</div>
			<div class="toggle" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<div class="menu">
				<div class="detalis-login logo-hide">
					@if (session('client'))
                        <a href="/user-logout" title="Click to logout"> Welcome {{ Session::get('client') }} </a>
                    @else
                        <a href="/user-login">Log in</a>
                        <a href="/user-signup">Create Account</a>
                    @endif
				</div>
				<ul>
					<li class="active"><a href="/">Home</a></li>
					<li><a href="/shop-page">Shop</a></li>
					<li><a href="/shop-page">Category</a>
						<!-- <ul class="show">
							<li><a href="/shop-page">Men</a></li>
							<li><a href="/shop-page">Women</a></li>
						</ul> -->
					</li>
					<li><a href="/about-us">About</a></li>
					<li><a href="/contact-us">Contact</a></li>
				</ul>
				<div class="input-search" style="display: none !important">
					<input type="search-info" name="" placeholder="Search" id="search_product">
					<a href="#"><img src="/image/serch.png" alt="serch"/></a>
				</div>
			</div>
		</div>
	</header>
    @yield('header')
</head>
<body>

    @yield('body')
	<!-- footer ------------->
	<footer>
		<div class="container">
			<div class="about info">
				<h4>About the shop</h4>
				<p>Shoe Rack is a wholesaler and retail footwear seller. It is located in an area with good human and vehicular traffic. We are famous for our quality products (for males and females, adults and children) from different brands and countries.  The one-stop footer solution. You may not have to struggle to visit each shop to make different footwear purchase.</p>
			</div>
			<div class="contect info">
				<div class="contect-details">
					<h4>help</h4>
					<ul>
						<li><a href="#">search</a></li>
						<li><a href="#">help</a></li>
						<li><a href="#">information</a></li>
						<li><a href="#">privacy policy</a></li>
						<li><a href="#">shiping details</a></li>
					</ul>
				</div>
				<div class="contect-details">
					<h4>Support</h4>
					<ul>
						<li><a href="#">contact us</a></li>
						<li><a href="#">about us</a></li>
						<li><a href="#">carres</a></li>
						<li><a href="#">refund & returns</a></li>
						<li><a href="#">deliveris</a></li>
					</ul>
				</div>
				<div class="contect-details">
					<h4>Information</h4>
					<ul>
						<li><a href="#">search tearms</a></li>
						<li><a href="#">advanced search</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">store location</a></li>
						<li><a href="#">order&returns</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottam">
				<div class="footer-image-details">
					<div class="option">
						<select class="Search-Stallions">
							<option value="Search Stallions">USD</option>
						    <option value="January">EUR</option>
							<option value="Fabruary">GBP</option>
						    <option value="April">AUD</option>
						    <option value="May">INR</option>
						    <option value="June">JPY</option>
						    <option value="Julay">CAD</option>
						    <option value="August">CNY</option>
						    <option value="August">AED</option>
						</select>
					</div>
					<ul class="payment">
						<li><a href="#"><img src="/image/visa_small.jpg" alt="visa_small"/></a></li>
						<li><a href="#"><img src="/image/master_small.jpg" alt="master_small"/></a></li>
						<li><a href="#"><img src="/image/american_small.jpg" alt="american_small"/></a></li>
						<li><a href="#"><img src="/image/diners_small.jpg" alt="diners_small"/></a></li>
						<li><a href="#"><img src="/image/discover_small.jpg" alt="discover_small"/></a></li>
					</ul>
					<div class="copy-right">
						<p>Copyright © 2020, shoe rack</p>
					</div>
				</div>
				<div class="footer-image-details images">
					<ul class="icon">
						<li><a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
						</a></li>
						<li><a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
						</a></li>
						<li><a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg>
						</a></li>
						<li><a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
						</a></li>
						<li><a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"/></svg>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="/assets/js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			var url = window.location.href;
			if(url.includes('shop-page')){
				$('.input-search').show()
			}
		});
	</script>
    @yield('script')
</body>
</html>
