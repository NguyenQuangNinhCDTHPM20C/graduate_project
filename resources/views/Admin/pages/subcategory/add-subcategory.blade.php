@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 354px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('subcategory.list') }}">Phụ mục/</a>
                        <span>Thêm</span>
                    </h6>
                    <h4>Thêm phụ mục của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('subcategory.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên phụ mục</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="select" name="category" id="category" class="form-control" required>
                                        @foreach ($category as $_category)
                                            <option>{{ $_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Trạng thái</label>
                                    <select class="select" name="status" id="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Hình ảnh phụ mục:</label>
                                    <input type="file" name="image" id="image" class="form-control" required
                                        accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">THÊM</button>
                                <a href="{{ route('subcategory.list') }}" class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
