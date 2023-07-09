@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('category.list') }}">Danh mục /</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật danh mục của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $category->name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Trạng thái</label>
                                    <select class="select" name="status" id="status" class="form-control" required>
                                        <option value="1" @if ($category->status == 1) selected @endif>Active
                                        </option>
                                        <option value="0" @if ($category->status == 0) selected @endif>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="select" name="type" id="type" class="form-control" required>
                                        <option value="laptop" @if ($category->type == 'laptop') selected @endif>Laptop
                                        </option>
                                        <option value="accessory" @if ($category->type == 'accessory') selected @endif>Phụ kiện
                                        </option>
                                        <option value="blog" @if ($category->type == 'blog') selected @endif>Tin tức
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">CẬP
                                    NHẬT</button>
                                <a href="{{ route('category.list') }}" class="btn btn-cancel">THOÁT</a>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
