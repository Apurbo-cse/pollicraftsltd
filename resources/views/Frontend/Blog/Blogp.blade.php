@extends('Layouts.master')
@section('title', 'Home')

@section('content')

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('Blog/css/style.css')}}" rel="stylesheet">

</head>

<body>


    <!-- site wrapper -->
    <div class="container">

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/editor-lg.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item"><a href="#"><img src="{{asset('blog/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                            <li class="list-inline-item">29 March 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3"><a href="/blogs/details">15 Unheard Ways To
                                                Achieve Greater Walker</a></h5>
                                        <p class="excerpt mb-0">A wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/editor-sm-1.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="/blogs/details">3 Easy Ways To Make
                                                    Your iPhone Faster</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/editor-sm-2.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="/blogs/details">An Incredibly Easy
                                                    Method That Works For All</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/editor-sm-3.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="/blogs/details">10 Ways To
                                                    Immediately Start Selling Furniture</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/editor-sm-4.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="/blogs/details">15 Unheard Ways To
                                                    Achieve Greater Walker</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- horizontal ads -->
                        <div class="ads-horizontal text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#">
                                <img src="{{asset('blog/images/ads/ad-750.png')}}" alt="Advertisement" />
                            </a>
                        </div>

                        <div class="padding-30 rounded bordered">

                            <div class="row">

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/latest-sm-1.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item"><a href="#"><img src="{{asset('blog/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Trending</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="/blogs/details">The Next 60 Things To
                                                    Immediately Do About Building</a></h5>
                                            <p class="excerpt mb-0">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="/blogs/details"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/latest-sm-2.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item"><a href="#"><img src="{{asset('blog/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Lifestyle</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="/blogs/details">Master The Art Of Nature
                                                    With These 7 Tips</a></h5>
                                            <p class="excerpt mb-0">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="/blogs/details"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/latest-sm-3.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item"><a href="#"><img src="{{asset('blog/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Fashion</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="/blogs/details">Facts About Business That
                                                    Will Help You Success</a></h5>
                                            <p class="excerpt mb-0">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="/blogs/details"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="/blogs/details">
                                                <div class="inner">
                                                    <img src="{{asset('blog/images/posts/latest-sm-4.jpg')}}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item"><a href="#"><img src="{{asset('blog/images/other/author-sm.png')}}" class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Politic</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="/blogs/details">Your Light Is About To
                                                    Stop Being Relevant</a></h5>
                                            <p class="excerpt mb-0">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="/blogs/details"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- load more button -->
                            <div class="text-center">
                                <button class="btn btn-simple">Load More</button>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <!-- sidebar -->
                        @include('Frontend.Blog.BlogSide')
                        <!-- sidebar -->
                    </div>

                </div>

            </div>
        </section>

    </div>

</body>

</html>

@endsection