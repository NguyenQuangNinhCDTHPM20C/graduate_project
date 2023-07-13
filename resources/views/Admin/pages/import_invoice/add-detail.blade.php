@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('import-invoice.list') }}">Hóa đơn /</a>
                        <span>Thêm sản phẩm chi tiết cho hóa đơn</span>
                    </h6>
                    <h4>Thêm mới sản phẩm cho hóa đơn mua hàng của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('import-invoice.store_detail') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Người mua</label>
                                    <input type="text" name="name" class="form-control" required">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày đặt</label>
                                    <input type="datetime-local" name="created_at" class="form-control" id="birthdaytime"
                                        required name="birthdaytime">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone_number" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tổng tiền</label>
                                    <input type="text" name="total" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">THÊM</button>
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
