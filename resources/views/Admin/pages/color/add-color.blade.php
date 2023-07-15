@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 354px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('subcategory.list') }}">Màu/</a>
                        <span>Thêm</span>
                    </h6>
                    <h4>Thêm màu sản phẩm của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('color.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên màu</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">THÊM</button>
                                <a href="{{ route('subcategory.list') }}"
                                    class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
