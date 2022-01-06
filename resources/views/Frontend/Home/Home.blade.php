@extends('Layouts.master')
@section('title', 'Home')

@section('content')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    @include('Layouts.Frontend.Carousel')
</div>
<!--//banner -->

<!--banner_bottom_agile_info -->
<div class="banner-bootom-w3-agileits">
    @include('Frontend.Home.Carousel')
</div>
<!--//banner_bottom_agile_info end -->

<!--/grids-->
<div class="agile_last_double_sectionw3ls">
    @include('Frontend.Home.Offer')
</div>
<!--/grids-->

<!-- /new_arrivals -->
<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <h3 class="wthree_text_info">New <span>Arrivals</span></h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li> Men's</li>
                <li> Women's</li>
                <li> Bags</li>
                <li> Footwear</li>
            </ul>

            <div class="resp-tabs-container">
                <!--tab_one-->
                <div class="tab1">
                    @include('Frontend.Home.Tabone')
                </div>
                <!--//tab_one-->

                <!--tab_two-->
                <div class="tab2">
                    @include('Frontend.Home.Tabtwo')
                </div>
                <!--//tab_two-->

                <!--tab_three-->
                <div class="tab3">
                    @include('Frontend.Home.Tabthree')
                </div>
                <!--//tab_three-->

                <!--tab_four-->
                <div class="tab4">
                    @include('Frontend.Home.Tabfour')
                </div>
                <!--//tab_four-->

            </div>
        </div>
    </div>
</div>
<!-- //new_arrivals -->

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    @include('Frontend.Home.Trending')
</div>

<!-- /we-offer -->
<div class="sale-w3ls">
    <div class="container">
        <h6>We Offer <span>discounts on</span> all products</h6>
        <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
    </div>
</div>
<!-- //we-offer -->

<!--/grids-->
<div class="coupons">
    @include('Frontend.Home.Support')
</div>
<!--grids-->

<!-- Waiting box -->
<div class="schedule-bottom">
    @include('Frontend.Home.Waiting')
</div>
<!-- //Waiting box -->

@endsection
