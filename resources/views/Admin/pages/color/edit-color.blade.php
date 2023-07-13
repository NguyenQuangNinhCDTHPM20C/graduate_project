@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 354px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('color.list') }}">Màu/</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật màu sản phẩm của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('color.update', $color->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên màu</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $color->name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT </button>
                                <a href="{{ route('color.list') }}"
                                    class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
