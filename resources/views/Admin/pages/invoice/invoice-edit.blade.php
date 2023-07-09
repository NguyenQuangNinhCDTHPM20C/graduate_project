@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('invoice.list') }}">Hóa đơn /</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật trạng thái hóa đơn của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('invoice.update', $invoice->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control" value="{{ $invoice->code }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Khách hàng</label>
                                    <input type="text" name="name" class="form-control" value="{{ $invoice->name }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày đặt</label>
                                    <input type="text" name="order_date" class="form-control"
                                        value="{{ $invoice->order_date }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $invoice->address }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone_number" class="form-control"
                                        value="{{ $invoice->phone }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $invoice->email }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tổng tiền</label>
                                    <input type="text" name="total" class="form-control" value="{{ $invoice->total }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Hình thức thanh toán</label>
                                    <input type="text" name="payment_method" class="form-control"
                                        value="{{ $invoice->payment_method }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label> Trạng thái</label>
                                <select class="select" name="status" id="status" class="form-control" required>
                                    <option value="1" @if ($invoice->status == 1) selected @endif>Hoàn thành
                                    </option>
                                    <option value="0" @if ($invoice->status == 0) selected @endif>Chưa hoàn thành
                                    </option>
                                    <option value="2" @if ($invoice->status == 2) selected @endif>Thất bại
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">CẬP
                                NHẬT</button>
                            <a href="{{ route('brand.list') }}" class="btn btn-cancel">THOÁT</a>
                        </div>

                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
        function previewImage(event) {
            // Lấy đối tượng input file và đối tượng img
            var input = event.target;
            var img = document.getElementById('preview-image');

            // Tạo URL từ tệp được chọn
            var url = URL.createObjectURL(input.files[0]);

            // Gán URL cho thuộc tính src của img
            img.src = url;
        }
    </script>
@endsection
