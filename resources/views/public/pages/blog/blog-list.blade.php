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
                        @foreach ($random_blog as $index => $random_blog)
                            <div class="carousel-item position-relative{{ $index == 0 ? ' active' : '' }}"
                                style="height: 430px">
                                <img class="position-absolute" src="{{ asset($random_blog->image) }}"
                                    style="object-fit: cover" />
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-orange"><a href="tech-category-01.html"
                                                    title="">Technology</a></span>
                                            <h2><a href="tech-single.html" title="">{{ $random_blog->title }}</a></h2>
                                            <small><a href="tech-single.html"
                                                    title="">{{ $random_blog->created_at->format('d F, Y') }}</a></small>
                                            <small><a href="tech-author.html" title="">BY
                                                    {{ $random_blog->author }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div>
                            </div>
                        @endforeach

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
                                @foreach ($blogs as $blog)
                                    <div class="blog-box row">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a class="blog-a" href="{{ route('blog-detail', ['slug' => $blog->slug]) }}"
                                                    title="">
                                                    <img src="{{ asset($blog->image) }}" alt="">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                        </div><!-- end col -->

                                        <div class="blog-meta big-meta col-md-8">
                                            <h4><a class="blog-a"
                                                    href="{{ route('blog-detail', ['slug' => $blog->slug]) }}"
                                                    title="">{{ $blog->title }}</a></h4>
                                            <div class="blog-content" style="max-height: 3em;  overflow: hidden;">
                                                {!! $blog->content !!}</div>
                                            <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                                    title="">{{ $blog->sub_category_name }}</a></small>
                                            <small><a href="{{ route('blog-detail', ['slug' => $blog->slug]) }}"
                                                    title="">{{ $blog->created_at }}</a></small>
                                            <small><a href="tech-author.html" title="">by
                                                    {{ $blog->author }}</a></small>
                                            <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                                    {{ $blog->view_count }}</a></small>

                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                    <hr class="invis">
                                @endforeach
                            </div><!-- end blog-list -->
                            {{ $blogs->onEachSide(2)->appends(Request::query())->links('pagination::bootstrap-4') }}
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            @if ($hot_blogs)
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
                                                        <small>{{ $hot_blog->created_at }}</small>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div><!-- end blog-list -->
                                </div><!-- end widget -->
                            @endif


                            @if ($viewed_blogs)
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
                                                        <small>{{ $viewed_blog->created_at }}</small>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div><!-- end blog-list -->
                                </div><!-- end widget -->
                            @endif
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    </section>
@endsection
