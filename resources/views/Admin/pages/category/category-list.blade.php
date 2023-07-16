@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh mục</h4>
                    <h6>Xem và tìm kiếm danh mục ở đây</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('category.add') }}" class="btn btn-added">
                        <img src="{{ asset('images/plus.svg') }}" class="me-1" alt="img">Thêm danh mục
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('images/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('images/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('images/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Chọn danh mục</option>
                                            @foreach ($category as $_category)
                                                <option>{{ $_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="{{ asset('images/search-whites.svg') }}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th class="text-center">Tên danh mục</th>
                                    <th class="text-center">Loại</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $_category)
                                    <tr>
                                        <td class="text-center">
                                            <a
                                                href="{{ route('category.edit', ['slug' => $_category->slug]) }}">{{ $_category->name }}</a>
                                        </td>
                                        <td class="text-center">{{ $_category->type }}</td>
                                        <td class="text-center">{{ $_category->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td class="text-center">
                                            <a class="me-3"
                                                href="{{ route('category.edit', ['slug' => $_category->slug]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('category_delete_{{ $_category->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="category_delete_{{ $_category->id }}"
                                                action="{{ route('category.delete', ['id' => $_category->id]) }}"
                                                method="POST" style="display: none">
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
@endsection
