@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Public/blog/style.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('home') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark text-decoration-none" href="{{ route('blogs') }}">Tin tức</a>
                    <span class="breadcrumb-item active">{{ $blog->slug }}</span>
                </nav>
            </div>
        </div>
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <span class="color-orange"><a class="bg-orange text-decoration-none"
                                        href="tech-category-01.html" title="">Technology</a></span>

                                <h3>{{ $blog->title }}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html"
                                            title="">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</a></small>
                                    <small><a href="tech-author.html" title="">bởi {{ $blog->author }}</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i>
                                            {{ $count_view }}</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i
                                                    class="fa-brands fa-facebook"></i>
                                                <span class="down-mobile">Chia sẻ lên Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i
                                                    class="fa-brands fa-twitter"></i>
                                                <span class="down-mobile">Chia sẻ lên Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i
                                                    class="fa-brands fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{ asset($blog->image) }}" alt="">
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
                                                <span class="down-mobile">Chia sẻ lên Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i
                                                    class="fa-brands fa-twitter"></i>
                                                <span class="down-mobile">Chia sẻ trên Twitter</span></a></li>
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
                                                            <img src="{{ asset($previous_blog->image) }}"
                                                                alt="{{ $previous_blog->title }}" class="float-right">
                                                            <h5 class="mb-1">{{ $previous_blog->title }}
                                                            </h5>
                                                            <small>Bài viết trước</small>
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
                                                            <img src="{{ asset($next_blog->image) }}"
                                                                alt="{{ $next_blog->title }}" class="float-left">
                                                            <h5 class="mb-1">{{ $next_blog->title }}</h5>
                                                            <small>Bài viết tiếp theo</small>
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
                                <h4 class="small-title">Có thể bạn sẽ thích</h4>
                                <div class="row">
                                    @foreach ($random_blog as $random_blog)
                                        <div class="col-lg-6">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="{{ route('blog-detail', ['slug' => $random_blog->slug]) }}"
                                                        title="{{ $random_blog->title }}">
                                                        <img style="max-with:100%; max-height:200px;"
                                                            src="{{ asset($random_blog->image) }}" alt="">
                                                        <div class="hovereffect">
                                                            <span class=""></span>
                                                        </div><!-- end hover -->
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a class="blog-a text-decoration-none"
                                                            href="{{ route('blog-detail', ['slug' => $random_blog->slug]) }}"
                                                            title="{{ $random_blog->title }}">{{ $random_blog->title }}</a>
                                                    </h4>
                                                    <small><a href="blog-category-01.html"
                                                            title="">Trends</a></small>
                                                    <small><a href="blog-category-01.html"
                                                            title="">{{ \Carbon\Carbon::parse($random_blog->created_at)->format('d/m/Y') }}</a></small>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div><!-- end col -->
                                    @endforeach
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <div class="fb-comments"
                                    data-href="http://127.0.0.1:8000/blog-detail/{{ $blog->slug }}" data-width="100%"
                                    data-numposts="5">
                                </div>
                            </div><!-- end custom-box -->

                            <hr class="invis1">
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Tin tức mới nhất</h2>
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img style="width:100%; max-height:150px; "
                                                    src="{{ asset($new_blog->image) }}" alt="">
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
                                <h2 class="widget-title">Tin tức nổi bật</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach ($hot_blogs as $hot_blog)
                                            <a href="{{ route('blog-detail', ['slug' => $hot_blog->slug]) }}"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="{{ asset($hot_blog->image) }}"
                                                        alt="{{ $hot_blog->title }}" class="float-left">
                                                    <h5 class="mb-1">{{ $hot_blog->title }}</h5>
                                                    <small>{{ \Carbon\Carbon::parse($hot_blog->created_at)->format('d F,Y') }}</small>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Tin tức đã xem</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach ($viewed_blogs as $viewed_blog)
                                            <a href="{{ route('blog-detail', ['slug' => $viewed_blog->slug]) }}"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="{{ asset($viewed_blog->image) }}"
                                                        alt="{{ $viewed_blog->title }}" class="float-left">
                                                    <h5 class="mb-1">{{ $viewed_blog->title }}</h5>
                                                    <small>{{ \Carbon\Carbon::parse($viewed_blog->created_at)->locale('vi')->format('d F,Y') }}</small>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    @endsection
