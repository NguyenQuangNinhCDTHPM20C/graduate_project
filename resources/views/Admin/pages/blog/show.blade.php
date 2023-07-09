@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <h6>
                    <a href="{{ route('blog.index') }}">Tin tức /</a>
                    <span>{{ $blog->title }}</span>
                </h6>
                <h4>Cập nhật bài viết của bạn</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2>{{ $blog->title }}</h2>
                        <img src="{{ asset($blog->image) }}" alt="Post Image">
                        <div>{!! $blog->content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
