@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Tin tức</h4>
                    <h6>Quản lý tin tức của bạn</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('blog.create') }}" class="btn btn-added"><img
                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/plus.svg"
                            alt="img" class="me-1">Thêm tin tức</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/filter.svg"
                                        alt="img">
                                    <span><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/closes.svg"
                                            alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img
                                        src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Reference No">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Completed</option>
                                            <option>Paid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-whites.svg"
                                                alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>Danh mục</th>
                                    <th>Phụ mục</th>
                                    <th>Tác giả</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>{{ $blog->sub_category->name }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td class="productimgname">
                                            <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="product-img">
                                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                        </td>
                                        <td>
                                            <a class="me-3" href="{{ route('blog.show', ['slug' => $blog->slug]) }}">
                                                <img src="{{ asset('images/eye.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3" href="{{ route('blog.edit', ['slug' => $blog->slug]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('blog_delete_{{ $blog->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="blog_delete_{{ $blog->id }}"
                                                action="{{ route('blog.destroy', ['id' => $blog->id]) }}" method="POST"
                                                style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
