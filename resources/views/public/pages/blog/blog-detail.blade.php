@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/blog/style.css') }}">
@endsection

@section('content')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area text-center">
                            {{-- <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">Top 10 phone applications and 2017 mobile design awards
                                </li>
                            </ol> --}}

                            <span class="color-orange"><a class="bg-orange text-decoration-none" href="tech-category-01.html"
                                    title="">Technology</a></span>

                            <h3>{{ $blog->title }}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="tech-single.html" title="">{{ $blog->created_at }}</a></small>
                                <small><a href="tech-author.html" title="">by {{ $blog->author }}</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i>
                                        {{ $count_view }}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i
                                                class="fa-brands fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i
                                                class="fa-brands fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa-brands fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="{{ asset('assets/blog/' . $blog->image) }}" alt="">
                        </div><!-- end media -->

                        <div class="blog-content">
                            {!! $blog->content !!}
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span class="bg-orange">Tags</span>
                                <small><a href="#" title="">lifestyle</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i
                                                class="fa-brands fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i
                                                class="fa-brands fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa-brands fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <hr class="invis1">

                        <div class="custombox prevnextpost clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            @if ($previous_blog)
                                                <a href="{{ route('blog-detail', ['slug' => $previous_blog->slug]) }}"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between text-right">
                                                        <img src="{{ asset('assets/blog/' . $previous_blog->image) }}"
                                                            alt="{{ $previous_blog->title }}" class="float-right">
                                                        <h5 class="mb-1">{{ $previous_blog->title }}
                                                        </h5>
                                                        <small>Prev Post</small>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            @if ($next_blog)
                                                <a href="{{ route('blog-detail', ['slug' => $next_blog->slug]) }}"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="{{ asset('assets/blog/' . $next_blog->image) }}"
                                                            alt="{{ $next_blog->title }}" class="float-left">
                                                        <h5 class="mb-1">{{ $next_blog->title }}</h5>
                                                        <small>Next Post</small>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img style="max-with:100%; max-height:200px;"
                                                    src="{{ asset('assets/blog/blog2.jpg') }}" alt="">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a class="blog-a text-decoration-none" href="tech-single.html"
                                                    title="">We
                                                    are guests of ABC Design
                                                    Studio</a>
                                            </h4>
                                            <small><a href="blog-category-01.html" title="">Trends</a></small>
                                            <small><a href="blog-category-01.html" title="">21 July,
                                                    2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img style="max-with:100%; max-height:200px;"
                                                    src="{{ asset('assets/blog/blog2.jpg') }}" alt="">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a class="blog-a text-decoration-none" href="tech-single.html"
                                                    title="">Nostalgia at work with
                                                    family</a></h4>
                                            <small><a href="blog-category-01.html" title="">News</a></small>
                                            <small><a href="blog-category-01.html" title="">20 July,
                                                    2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <div class="fb-comments" data-href="http://127.0.0.1:8000/blog-detail/{{ $blog->slug }}"
                                data-width="100%" data-numposts="5">
                            </div>
                        </div><!-- end custom-box -->

                        <hr class="invis1">
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">New Blog</h2>
                            <div class="trend-videos">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img style="width:100%; max-height:150px; "
                                                src="{{ asset('assets/blog/' . $new_blog->image) }}" alt="">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h6><a class="blog-a text-decoration-none"
                                                href="{{ route('blog-detail', ['slug' => $new_blog->slug]) }}"
                                                title="">{{ $new_blog->title }}</a></h6>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            </div><!-- end videos -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach ($hot_blogs as $hot_blog)
                                        <a href="{{ route('blog-detail', ['slug' => $hot_blog->slug]) }}"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{ asset('assets/blog/' . $hot_blog->image) }}"
                                                    alt="{{ $hot_blog->title }}" class="float-left">
                                                <h5 class="mb-1">{{ $hot_blog->title }}</h5>
                                                <small>{{ $hot_blog->created_at }}</small>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Reviews</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach ($viewed_blogs as $viewed_blog)
                                        <a href="{{ route('blog-detail', ['slug' => $viewed_blog->slug]) }}"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{ asset('assets/blog/' . $viewed_blog->image) }}"
                                                    alt="{{ $viewed_blog->title }}" class="float-left">
                                                <h5 class="mb-1">{{ $viewed_blog->title }}</h5>
                                                <small>{{ $viewed_blog->created_at }}</small>
                                            </div>
                                        </a>
                                    @endforeach
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
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
