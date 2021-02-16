@extends('/layout/layout')
@section('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
<!-- csss -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

@endsection
@section('body')
<!-- --------- shop peg-------------- -->
  <section class="shop-peg">
        <div class="container">
            <div class="collections-shop">
                    <div class="row all-products">
                        @foreach ($pgdata as $item)
                        <div class="col-6 products">
                            <div class="products-img">
                                <a href="product-page/{{$item->id}}">
                                    <img @if (strpos($item->pimg, '|') !== false)
                                            src="assets/images/{{substr($item->pimg, 0, strpos($item->pimg, "|"))}}"
                                        @else
                                            src="assets/images/{{$item->pimg}}"
                                        @endif
                                    alt="shop-new-88_large">
                                </a>
                            </div>
                            <div class="products-details">
                                <a href="product-page/{{$item->id}}"> {{$item->pname}} </a>
                                <span>$ {{$item->pprice}}</span>
                            </div>
                        </div>
                        @endforeach
                        <?php echo $pgdata->render(); ?>
                        <!-- {{ $pgdata->links() }} -->
                        <!-- {{ $pgdata->onEachSide(5)->links() }} -->

                    </div>
                   <!--  <div class="nav-pegination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><b></b></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><b class="embed"></b></a></li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/to-top.png" alt="to-top"/></button>
@endsection
@section('script')
<script  type="text/javascript" src="assets/js/slick.min.js"></script>
  <script>
    $(document).ready(function(){
        $(".toggle").click(function(){
          $(".menu").toggle("active");
        });
    });
    function myFunction(x) {
      x.classList.toggle("change");
    }
              $(".toggle_one").click(function(){
                $(".togglemenu-one").toggleClass("active");
            });
            $(".toggle_2").click(function(){
                $(".open").toggleClass("active");
            });
            function myFunction(x) {
              x.classList.toggle("change");
            }
            $(".title_tab.one").click(function(){
                $(".boder.one").toggleClass("active");
            });
            $(".title_tab.two").click(function(){
                $(".boder.two").toggleClass("active");
            });
            $(".title_tab.three").click(function(){
                $(".boder.three").toggleClass("active");
            });
            $(".title_tab.four").click(function(){
                $(".boder.four").toggleClass("active");
            });

            $(".filter-sortby").click(function(){
                $(".dropdown-menu").toggleClass("active");
            });
            $(".boder.one").click(function(){
                $(".inner_content.one").toggleClass("active");
            });
            $(".boder.two").click(function(){
                $(".inner_content.two").toggleClass("active");
            });
            $(".boder.three").click(function(){
                $(".inner_content.three").toggleClass("active");
            });
            $(".boder.four").click(function(){
                $(".inner_content.four").toggleClass("active");
            });
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            // window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }

            // When the user clicks on the button, scroll to the top of the document
            // function topFunction() {
            //   document.body.scrollTop = 0;
            //   document.documentElement.scrollTop = 0;
            // }

             $(window).scroll(function(){
                if ($(this).scrollTop() > 50) {
                   $('header').addClass('sticky-header');   
                } else {
                   $('header').removeClass('sticky-header');
                }
            });
</script>
<script>
      // =================================================== For the Search the Data ===================================================
      function find_data() {
            $('#search_product').keyup(function(){
                var ip_val = $(this).val();
                var filter = $('#search_product').val().toUpperCase();
                
                $(".products").each(function(e){
                    var val = $(this).find("a").text();
                    console.log(val);
                    if(val){
                        if (val.toUpperCase().indexOf(filter) > -1) {
                            $(this).show();
                        }else{
                            $(this).hide();
                        }
                    }
                });
            });
        }
        find_data();
</script>
@endsection
