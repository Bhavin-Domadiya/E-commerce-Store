@extends('/layout/layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
@endsection
@section('body')
<section class="footwear">
    <div class="container about-page">
        <div class="product">
            <div class="accident">
                <img src="image/about-1.jpg" alt="about-1"/>
            </div>
            <div class="collections-about">
                <div class="comfortable">
                    <h2>High Quality Footwear</h2>
                    <p>The product quality is never an accident, it is a result of your sheer hard work and efficiency. All products are handcrafted in our factory with high-quality materials. We have tons of the latest collection of high-quality trendy celebrity collections you will love without any doubt. Definitely you will enjoy and shop the best formal and casual non-leather shoes and other footwear that is trendy and more comfortable. Literally, like a fairy tale, all types of shoes and sandals are total fantasy! Let your feet enjoy your walk with the latest collections. And also you will really enjoy for never ending footwear product collections</p>
                </div>
                <div class="about-ul">
                    <div class="shop">
                        <ul>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Women Shoe</li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Men Shoe</li>
                        </ul>
                    </div>
                    <div class="shop">	
                        <ul>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Casual shoe</li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Formal Shoe</li>
                        </ul>
                    </div>
                    <div class="shop">
                        <ul>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Canvas</li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i>Heels</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="image/to-top.png" alt="to-top"/></button>

<!---------styling-shoes---------->

<section class="styling-shoes">
    <div class="container about-page">
        <div class="heading-about">
            <h2>Styling Shoes</h2>
        </div>
        <div class="shoes-collection">
            <div class="celebrity">
                <div class="demos-icon">
                    <a href="#"><img src="image/icon-1_small.png" alt="icon-1_small"/></a>
                </div>
                <div class="materials">
                    <h4>Let your footwear do the talking</h4>
                    <p>Shoes really are a never-ending product. Never-ending for us and never-ending for every fashion lover. Style, the variety of models, materials, textures, footwear, statistics and  spoken yet. So we’ve gathered some very interesting facts.</p>
                </div>	
                <div class="demos-icon">
                    <a href="#"><img src="image/icon-2_small.png" alt="icon-2_small"/></a>
                </div>
                <div class="materials">
                    <h4>Vast collection of Sports shoes</h4>
                    <p>We have a vast collection of sneakers, athletic shoes, tennis shoes, gym shoes, kicks, sports shoes, and runners are shoes primarily designed for sports.or other forms of physical exercise, but which are now also widely use.</p>
                </div>
                <div class="demos-icon">
                    <a href="#"><img src="image/icon-3_small.png" alt="icon-3_small"/></a>
                </div>
                <div class="materials">
                    <h4>Uniquely designed high heel collection</h4>
                    <p>Fabulously look taller with our branded high heels collection. Each product has unique design heels to benefit you're the muscles in your legs leading to more muscle and less fat in the calves. Walk like a celebrity each day with more confidence.</p>
                </div>
                <div class="demos-icon">
                    <a href="#"><img src="image/icon-4_small.png" alt="icon-4_small"/></a>
                </div>
                <div class="materials">
                    <h4>Trendy celebrity collections</h4>
                    <p>These celebrities shoe "collectors" or hoarders with a high heel issue, take a look at these insane celebrity shoe closet and judge for yourself. We have more and more celebrity collection footwear from worldwide market. Sure, you will never get bored with our collections</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------Services---------->

<section class="services">
    <div class="container about-page">
        <div class="celebrate">
            <div class="main-title">
                <h2>Our Services</h2>
            </div>
            <div class="special-products">
                <div class="productivity">
                    <p>Jadis as a fashion brand, is breaking new ground and creating intelligent apparel that is anti-stain, anti-odour and cooler! empowers small and medium-sized businesses to reach millions of customers with a number of programmer that help boost their revenue, reach and productivity. We celebrate those special products that were made for world wide customers.</p>
                    <div class="shopping-cart">
                        <div class="unique-shop">
                            <h5><span>01.</span>Visit Store</h5>
                            <p>Offers outstanding unique shopping experience is our top priority. Visit online today enjoy collections</p>
                        </div>
                        <div class="unique-shop">
                            <h5><span>02.</span>Add To Cart</h5>
                            <p>Add your cart with trending collection stylish footwear . Start your day with new trend.</p>
                        </div>
                        <div class="unique-shop">
                            <h5><span>03.</span>Gift Cards</h5>
                            <p>Shop now and collect your exiting gifts for all occasion.Perfect gift for you and loved once</p>
                        </div>
                        <div class="unique-shop">
                            <h5><span>04.</span>Unique shop</h5>
                            <p>Relax and enjoy your collection! We believe everyone can and deserves to be beautiful</p>
                        </div>
                    </div>
                </div>
                <div class="stylish">
                    <img src="image/about-2.jpg" alt="about-2"/>
                </div>
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