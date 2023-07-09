@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 354px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('subcategory.list') }}">Phụ mục/</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật phụ mục của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('subcategory.update', $sub_category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên phụ mục</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $sub_category->name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="select" name="category" id="category" class="form-control" required>
                                        <option>Choose Category</option>
                                        @foreach ($category as $_category)
                                            <option value="{{ $_category->id }}"
                                                @if ($sub_category->category_id == $_category->id) selected @endif>{{ $_category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Trạng thái</label>
                                    <select class="select" name="status" id="status" class="form-control" required>
                                        <option value="1" @if ($sub_category->status == 1) selected @endif>Active
                                        </option>
                                        <option value="0" @if ($sub_category->status == 0) selected @endif>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Hình ảnh phụ mục:</label>
                                    <img src="{{ asset($sub_category->image) }}" alt="{{ $sub_category->name }}">
                                    <input type="file" name="image" id="image" class="form-control" 
                                        accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT </button>
                                <a href="https://dreamspos.dreamguystech.com/laravel/template/public/subcategorylist"
                                    class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
