<!DOCTYPE html>
<html>
<header>
    @include('Layouts.Frontend.NHeader')
</header>

<body>
    <div class="header" id="home">
        @include('Layouts.Frontend.Topheader')
    </div>
    <!-- Navbar -->
    <div class="ban-top">
        @include('Layouts.Frontend.Navbar')
    </div>
    <!-- // Navbar -->

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">

        <div class="container">
            <!---728x90--->

            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <ul class="slides">
                            <li data-thumb="images/d2.jpg">
                                <div class="thumb-image"> <img src="images/d2.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/d1.jpg">
                                <div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/d3.jpg">
                                <div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>Big Wing Sneakers (Navy)</h3>
                <p><span class="item_price">$650</span> <del>- $900</del></p>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked="">
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="description">
                    <h5>Check delivery, payment options and charges at your location</h5>
                    <form action="#" method="post">
                        <input type="text" value="Enter pincode" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                        <input type="submit" value="Check">
                    </form>
                </div>
                <div class="color-quality">
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">5 Qty</option>
                            <option value="null">6 Qty</option>
                            <option value="null">7 Qty</option>
                            <option value="null">10 Qty</option>
                        </select>
                    </div>
                </div>
                <div class="occasional">
                    <h5>Types :</h5>
                    <div class="colr ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Wing Sneakers">
                                <input type="hidden" name="amount" value="650.00">
                                <input type="hidden" name="discount_amount" value="1.00">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="submit" name="submit" value="Add to cart" class="button">
                            </fieldset>
                        </form>
                    </div>

                </div>

                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Share On : </li>
                    <li><a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>

            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                @include('Frontend.Reply')
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals ">
                <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
                    @include('Frontend.Featured')
                <div class="clearfix"> </div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>
    <!--//single_page-->


    <!--/grids-->
    <div class="coupons">
        @include('Frontend.Home.Support')
    </div>
    <!--grids-->

    <!-- Footer -->
    @include('Layouts.Frontend.Footer')
    <!-- // Footer -->

</body>

</html>


@endsection
