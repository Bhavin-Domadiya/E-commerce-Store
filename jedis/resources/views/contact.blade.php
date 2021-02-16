@extends('/layout/layout')
@section('header')
    <!-- slider -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- csss -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('body')
    <!-- map-section ----------------->
	<section class="mep">	
		<div class="container">
			<div class="map">
				<iframe width="960" height="578" style="border:0;overflow:hidden;" src="https://maps.google.co.in/?ie=UTF8&amp;t=m&amp;ll=-37.823006,144.977388&amp;spn=0.02034,0.042915&amp;z=14&amp;output=embed"></iframe>
			</div>
		</div>
	</section>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/to-top.png" alt="to-top"/></button>

	
<!-- contact-section ----------------->
	<section class="contact">
		<div class="container">
			<div class="grid-item">
				<div class="contact-icon">
					<div class="phone-icon">
						<a href="#" class="fa fa-phone"></a>
					</div>
					<div class="phone-info">
						<a href="#"><h4>PHONE</h4></a>
						<p><b style="font-weight: 700;">Toll-Free:</b> 0803-080-3081</p>
						<p><b style="font-weight: 700;">Fax:</b> 0803-080-3082</p>
					</div>
				</div>

				<div class="contact-icon">
					<div class="phone-icon">
						<a href="#" class="fa fa-envelope"></a>
					</div>
					<div class="phone-info">
						<a href="#"><h4>EMAIL</h4></a>
						<p><a href="#">jadis@gmail.com</a><a href="#">support@jadis.com</a></p>
					</div>
				</div>

				<div class="contact-icon">
					<div class="phone-icon">
						<a href="#" class="fa fa-location-arrow"></a>
					</div>
					<div class="phone-info">
						<a href="#"><h4>ADDRESS</h4></a>
						<p>No: 58 A, East Madison Street,</p>
						<p> Baltimore, MD, USA 4508</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- contact-form -->
	<section class="contact-form">
		<div class="container">
			<div class="cnt-form">
				<h3>Contact Form</h3>
				<div class="form">
					<form method="POST" action="contact_data">
						@csrf
						<input type="text" name="name" value="" placeholder="Name" class="name">
						<input type="text" name="email" value="" placeholder="Email" class="name">
						<input type="text" name="subject" value="" placeholder="Subject" class="name">
						<textarea name="message" placeholder="Message" class="textarea"></textarea>
						<button type="submit" class="form-button" name="submit">Send</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('header').addClass('sticky-header');	
        } else {
            $('header').removeClass('sticky-header');
        }
    });
</script>
@endsection