<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checkout</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="assets/css/checkout.css">
<div class="container">
    <div class="main">
        <!-- header -->
        <header>
            <div class="logo">
                <a href="/"><img src="image/logo.png" alt="logo_150x50" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/cart">Cart</a></li>
                    <li><a href="#" id="active">Information</a></li>
                </ul>
            </div>
        </header>

        <!-- conatct-information-section -->
        <section class="contact-information">
            <div class="form">
                <!-- <h2>Contact information</h2> -->
                <!-- <p>Already have an account? <a href="/auth/login"> log in</a></p> -->
            <!--     <div class="info-input">
                    <input class="email" type="" name="email" value="" placeholder="Email or mobile phone number">
                    <div class="cheakbox">
                        <input class="check-box" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <a href="#">Keep me up to date on news and exclusive offers</a>
                    </div>
                </div> -->

                <div class="shipping-address">
                    <h2>Shipping address</h2>
                    <div class="address-info">
                        <div class="frist-input">
                            <input class="frist" type="name" name="frist name (optional)" value=""
                                placeholder="Frist name (optional)">
                            <input class="frist1" type="name" name="frist name (optional)" value=""
                                placeholder="Last name">
                        </div>
                        <input class="address" type="address" name="address" value="" placeholder="Address">
                        <input class="address" type="address" name="address" value=""
                            placeholder="Aparment, suite, etc(optional)">
                        <input class="address" type="address" name="address" value="" placeholder="City">
                        <div class="contry-info">
                            <select class="contary" required>
                                <optgroup>
                                    <option>India</option>
                                    <option>Afghanistan</option>
                                    <option>Åland Islands</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antigua & Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Belarus</option>
                                    <option>Barbados</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bermuda</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia & Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Bouvet Island</option>
                                    <option>Brazil</option>
                                    <option>British Indian Ocean Territory</option>
                                    <option>British Virgin Islands</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde</option>
                                    <option>Caribbean Netherlands</option>
                                    <option>Cayman Islands</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>Qatar</option>
                                    <option>Réunion</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>São Tomé & Príncipe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Sint Maarten</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Georgia & South Sandwich Islands</option>
                                    <option>South Korea</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>St. Barthélemy</option>
                                    <option>St. Helena</option>
                                    <option>St. Kitts & Nevis</option>
                                    <option>St. Lucia</option>
                                    <option>St. Martin</option>
                                    <option>St. Pierre & Miquelon</option>
                                    <option>St. Vincent & Grenadines</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Svalbard & Jan Mayen</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Trinidad & Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Turks & Caicos Islands</option>
                                    <option>Tuvalu</option>
                                    <option>U.S. Outlying Islands</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Wallis & Futuna</option>
                                    <option>Western Sahara</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </optgroup>
                            </select>
                            <select class="contary">
                                <option>Gujrat</option>
                                <option>Goa</option>
                                <option>Diu</option>
                                <option>Arunachal Pradesh</option>
                                <option>Ahemdabad</option>
                                <option>Mizoram</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Delhi</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jharkhand</option>
                                <option>Jammu and Kashmir</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Ladakh</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha","OD","Orissa</option>
                            </select>
                            <input class="pin" type="pin" name="pin code" value="" placeholder="PIN code">
                            <div class="cheakbox">
                                <input class="check-box" type="checkbox" id="vehicle1" name="vehicle1" value="Bike" >
                                <a href="#">Pay On Delevery</a>
                            </div>
                            <div class="step-footer">
                                <a href="/cart">Return to cart</a>
                                <button type="button"><a href="/thankyou-page">Place Order</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-footer">
                    <p>All rights reserved Shoe-Rack</p>
                </div>
            </div>
        </section>
    </div>

    <!-- sidebar -->
    <div class="sidebar">
        <div class="order-formet">
            @foreach($data as $item)
                <div class="formal-heel">
                    <div class="formal-img">
                        <img @if (strpos($item['pimg'], '|') !== false)
                                 src="/assets/images/{{substr($item['pimg'], 0, strpos($item['pimg'], "|"))}}"
                             @else
                                 src="/assets/images/{{$item['pimg']}}"
                             @endif
                        alt="" width="150px">
                    </div>
                    <div class="number">
                        <span>{{$item['pqty']}}</span>
                    </div>
                    <div class="formal-info">
                        <div class="formal-details">
                            <p>DJ Formal Heels</p>
                        </div>
                        <div class="formal-price">
                            <span>${{$item['total_price']}}</span>
                        </div>
                    </div>
            </div>
            @endforeach
            <div class="total">
                <div class="subtotal">
                    <div class="shipping">
                        <p>${{$total_price}}</p>
                        <span>Shipping</span>
                    </div>
                    <div class="shipping-total">
                        <p>${{$total_price}}</p>
                        <span>Free</span>
                    </div>
                </div>
            </div>
            <div class="formet-total">
                <div class="format-total">
                    <p>Total</p>
                    <div class="usd-total">
                        <span>USD</span>
                        <h5>${{$total_price}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(".menu").click(function () {
        $("#active").toggleClass("active");
    });
</script>

</body>
</html>
