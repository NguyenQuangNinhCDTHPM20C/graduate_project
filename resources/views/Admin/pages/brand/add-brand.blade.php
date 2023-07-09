@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('brand.list') }}">Thương hiệu /</a>
                        <span>Thêm</span>
                    </h6>
                    <h4>Thêm thương hiệu của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên thương hiệu</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Hình ảnh</label>
                                    <input type="file" name="image" id="image" class="form-control" required
                                        accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">THÊM</button>
                                <a href="{{ route('product.list') }}" class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
