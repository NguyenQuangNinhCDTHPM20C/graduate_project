@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 354px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('discountcode.list') }}">Mã giảm giá/</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật mã giảm giá của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('discountcode.update', $discount_code->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Mã giảm</label>
                                    <input type="text" name="code" id="code" class="form-control"
                                        value="{{ $discount_code->code }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tỉ lệ %</label>
                                    <input type="text" name="discountamount" id="discountamount" class="form-control"
                                        value="{{ $discount_code->discount_amount }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button href="javascript:void(0);" class="btn btn-submit me-2">CẬP NHẬT </button>
                                <a href="{{ route('discountcode.list') }}"
                                    class="btn btn-cancel">THOÁT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
