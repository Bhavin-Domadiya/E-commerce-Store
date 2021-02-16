@extends('/layout/layout')
@section('header')
        <!-- csss -->
		    <link rel="stylesheet" type="text/css" href="assets/css/cart.css">
        <!-- font-style -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.gstatic.com">
@endsection
@section('body')

<section class="cart-page">
    <div class="container">
        <div class="left-cart">
            <div class="cart-header">
                <h4 class="cart-header__title">Your Cart</h4>
            </div>
            @foreach ($data as $item)
                <div class="cart-list">
                    <div class="cart-row">
                        <div class="cart-main">
                            <div class="cart-img">
                                <a href="#">
                                    <img @if (strpos($item['img'], '|') !== false)
                                            src="assets/images/{{substr($item['img'], 0, strpos($item['img'], "|"))}}"
                                        @else
                                            src="assets/images/{{$item['img']}}"
                                        @endif
                                    alt="slideshow-carousel-1"/>
                                </a>
                            </div>
                            <div class="cart-text">
                                <div class="cart-right">
                                    <a href="#">{{$item['title']}}</a><br>
                                </div>
                                <div class="price-h5">
                                    <label>ITEM PRICE</label><br>
                                    <span>${{$item['price']}}</span>
                                </div>
                                <div class="remove-btn">
                                    <a href="remove_product/{{$item['cart_id']}}"><i class="fa fa-times" aria-hidden="true"><h5>REMOVE</h5></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="quality-price">
                        <div class="quality-list">
                            <label>QUANTITY</label>
                            <div class="quantity-control" data-quantity="" cart_id="{{$item['cart_id']}}">
                                <form action="/add-qty" method="POST"> @csrf
                                    <button class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                        <g>
                                            <g>
                                                <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                            </g>
                                        </g>
                                    </svg></button>
                                    <input type="number" class="quantity-input" data-quantity-target="" value="{{$item['qty']}}" step="1" min="1" max="" name="quantity" readonly>
                                    <input type="hidden" name="cart__id" value="{{$item['cart_id']}}">
                                    <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                        <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="itam-total">
                        <label>
                            ITAM TOTAL<br>
                        </label>
                        <span>
                            ${{$item['total_price']}}

                        </span>
                    </div>
                </div>
                <hr style="margin-top: 30px">
            @endforeach
            <div class="order-page">
                <h2>Order Summary</h2>
            </div>
            <div class="cart-subtotal">
                <span class="subtotal-title">SUB TOTAL</span>
                <span class="subtotal-price">${{$total_price}} USD</span>
            </div>
            <div class="btn-actions">
                <div class="btn-left">
                    <a href="checkout">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/to-top.png" alt="to-top"/></button>
@endsection
@section('script')

<script type="text/javascript" src="/assets/js/slick.min.js"></script>
@if (Session::get('outofstock'))
    <script> alert("{{Session::get('outofstock')}}") </script>
@endif
<script>

  (function () {
"use strict";
var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
return function (arg) {
if (this.length > 1) {
  this.each(function () {
    var $this = $(this);

    if (!$this.data(ident)) {
      $this.data(ident, func($this, arg));
    }
  });

  return this;
} else if (this.length === 1) {
  if (!this.data(ident)) {
    this.data(ident, func(this, arg));
  }

  return this.data(ident);
}
};
});
})();

(function () {
"use strict";
function Guantity($root) {
const element = $root;
const quantity = $root.first("data-quantity");
const quantity_target = $root.find("[data-quantity-target]");
const quantity_minus = $root.find("[data-quantity-minus]");
const quantity_plus = $root.find("[data-quantity-plus]");
var quantity_ = quantity_target.val();
$(quantity_minus).click(function () {
quantity_target.val(--quantity_);
});
$(quantity_plus).click(function () {
quantity_target.val(++quantity_);
});
}
$.fn.Guantity = jQueryPlugin("Guantity", Guantity);
$("[data-quantity]").Guantity();
})();


          $(document).ready(function(){
                  $(".toggle").click(function(){
                    $(".menu").toggle("active");
                  });
          });
          function myFunction(x) {~
            x.classList.toggle("change");
          }

          $(window).scroll(function(){
      if ($(this).scrollTop() > 50) {
         $('header').addClass('sticky-header');
      } else {
         $('header').removeClass('sticky-header');
      }
  });

          //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  $(document).ready(function(){
    $('.quantity-input').on('input',function(){
        var max_product_limit = $(this).attr('max');

    });
  });
</script>
@endsection
