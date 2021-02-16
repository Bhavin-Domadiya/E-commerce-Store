@extends('/layout/layout')
@section('header')
        <!-- slider -->
		    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css"/>
        <!-- csss -->
            <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <!-- icon -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('body')
        <!-- product page -------->
    
    
<section class="product-page">
    <div class="container">
        <div class="invisible-small">
            <div class="single-product">
                <div class="slider-page">
                    <div class="slider-for">
                        @php
                            $images = $data[0]->pimg;
                            $images = explode('|',$images);
                        @endphp  
                        @foreach ($images as $item)
                            <div class="slider-img-page">
                                <img src="/assets/images/{{$item}}" alt="shop-new"/>
                            </div>    
                        @endforeach
                        
                    </div>
                    <div class="slider-nav">
                        @foreach ($images as $item)
                        <div class="slider-img-page-1">
                            <img src="/assets/images/{{$item}}" alt="shop-new_img"/>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="single-product-rightsid">
                    <form action="add-to-cart" method="POST"> @csrf
                        <div class="single-product-price">
                            <span>${{$data[0]->pprice}}</span>
                        </div>
                        <h2 class="boder single-product-title">{{$data[0]->pname}}</h2>
                        <div class="single-product-quantity" style="margin-bottom: 28px;">
                            <label>Quantity :</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{$data[0]->pqty}}">
                            <br>
                        </div>
                        <input type="hidden" name="product_price" value="{{$data[0]->pprice}}">
                        <input type="hidden" name="product_id" value="{{$data[0]->id}}">
                        <div class="single-product-button">
                            <button class="praymari-button add-to-cart" type="submit">ADD TO CART</button>
                            <button type="submit" class="praymari-button add-to-cart buy-btn">BUY IT NOW</button>
                        </div>
                        <div class="single-product-ret">
                            <p>{{$data[0]->pdesc}}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript" src="/assets/js/slick.min.js"></script>
<script>

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


//   //Get the button
//   var mybutton = document.getElementById("myBtn");
//   // When the user scrolls down 20px from the top of the document, show the button
//   window.onscroll = function() {scrollFunction()};
//   function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//       mybutton.style.display = "block";
//     } else {
//       mybutton.style.display = "none";
//     }
//   }
//   // When the user clicks on the button, scroll to the top of the document
//   function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
//   }


  $(document).ready(function(){
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });

      $('.slider-nav').slick({
        slidesToShow:4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        centerPadding: '0',
        focusOnSelect: true
      });
  });

</script>
@endsection