@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/Public/blog/style.css') }}">
<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- Bootstrap core CSS -->
<!-- Responsive styles for this template -->
<link href="{{ asset('css/Public/blog/responsive.css') }}" rel="stylesheet">
<!-- Version Tech CSS for this template -->
<link href="{{ asset('css/Public/blog/version/tech.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="blog">
    <section class="section first-section">
        <div class="slide">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner carousel-slide bg-radius">
                    <div class="carousel-item position-relative active" style="height: 430px">
                        <img class="position-absolute w-100 h-100" src="{{asset('images/carousel-1-a.jpg')}}"
                            style="object-fit: cover" />
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html"
                                            title="">Technology</a></span>
                                    <h2><a href="tech-single.html" title="">Say hello to real handmade office furniture!
                                            Clean &amp; beautiful design</a></h2>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px">
                        <img class="position-absolute w-100 h-100" src="{{asset('images/carousel-1-b.jpg')}}"
                            style="object-fit: cover" />
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html"
                                            title="">Technology</a></span>
                                    <h2><a href="tech-single.html" title="">Say hello to real handmade office furniture!
                                            Clean &amp; beautiful design</a></h2>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px">
                        <img class="position-absolute w-100 h-100" src="{{asset('images/carousel-1-c.jpg')}}"
                            style="object-fit: cover" />
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html"
                                            title="">Technology</a></span>
                                    <h2><a href="tech-single.html" title="">Say hello to real handmade office furniture!
                                            Clean &amp; beautiful design</a></h2>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="{{route('blog-detail')}}l" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="{{route('blog-detail')}}" title="">Top 10 phone
                                            applications and 2017 mobile design
                                            awards</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Gadgets</a></small>
                                    <small><a href="{{route('blog-detail')}}" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            1114</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">A device you can use both
                                            headphones and
                                            usb</a>
                                    </h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Technology</a></small>
                                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            4412</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Two brand new laptop models
                                            from ABC
                                            computer</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Development</a></small>
                                    <small><a href="tech-single.html" title="">20 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            2313</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="{{asset('assets/blog/banner728x90.png')}}" alt=""
                                                class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Applications for taking
                                            photos of nature in
                                            your
                                            mobile phones</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Design</a></small>
                                    <small><a href="tech-single.html" title="">19 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            4441</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Say hello to colored strap
                                            models in smart
                                            hours</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Materials</a></small>
                                    <small><a href="tech-single.html" title="">18 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            33312</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">How about evaluating your old
                                            mobile phones
                                            in
                                            different ways?</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Gadgets</a></small>
                                    <small><a href="tech-single.html" title="">17 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            4440</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Drinking coffee at the
                                            computer rests the
                                            spirit</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Technology</a></small>
                                    <small><a href="tech-single.html" title="">16 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            4412</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">If you are considering buying
                                            a new safe for
                                            your mobile phone, be sure to read this article</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Reviews</a></small>
                                    <small><a href="tech-single.html" title="">15 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            44123</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Enjoy a summer with a
                                            colorful headset</a>
                                    </h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Technology</a></small>
                                    <small><a href="tech-single.html" title="">14 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            2214</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a class="blog-a" href="tech-single.html" title="">Google has developed a brand
                                            new algorithm.
                                            Forget all your knowledge!</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                            title="">Gadgets</a></small>
                                    <small><a href="tech-single.html" title="">13 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            3331</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="{{asset('assets/blog/banner300x600.jpg')}}" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Trend Videos</h2>
                            <div class="trend-videos">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog1.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">We prepared the best 10 laptop
                                                presentations
                                                for you</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog1.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio -
                                                Vlog</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/blog/blog1.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">Both blood pressure monitor and
                                                intelligent
                                                clock</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end videos -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for..</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful..</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Reviews</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="{{asset('assets/blog/blog2.jpg')}}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">We are making homemade ravioli..</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Follow Us</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa-brands fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa-brands fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
</section>
@endsection