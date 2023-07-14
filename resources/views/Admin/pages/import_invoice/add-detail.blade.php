@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper" style="min-height: 347px;">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm hóa đơn mua hàng</h4>
                </div>
            </div>
            <div class="card" data-select2-id="16">
                <div class="card-body" data-select2-id="15">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mã đơn hàng</label>
                                <input type="text" name="code" placeholder="Vui lòng nhập mã đơn hàng" required>
                                <input type="hidden" name="account_id"
                                    value="{{ session()->has('account') ? session('account')->id : '' }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12" data-select2-id="14">
                            <div class="form-group" data-select2-id="13">
                                <label>Nhà cung cấp</label>
                                <input type="text" name="supplier" placeholder="Vui lòng nhập tên nhà cung cấp" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Ngày nhập</label>
                                <div class="input-groupicon">
                                    <input type="text" placeholder="DD-MM-YYYY" class="datetimepicker">
                                    <div class="addonset">
                                        <img src="{{ asset('images/calendars.svg') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label> Trạng thái</label>
                                <select class="select" name="status" id="status" class="form-control" required>
                                    <option value="1">Còn bán</option>
                                    <option value="0">Hết bán</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-submit me-2" id="addProductBtn">Thêm sản phẩm</a>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table" id="productTable">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá mua</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="productRow">
                                    <td colspan="2" class="productimgname" style="width: 50%;">
                                        <select class="select form-control" name="product_id[]" required
                                            style="width: 100%;">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="quantity[]" placeholder="Số lượng"
                                            required>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="price[]" placeholder="Giá tiền"
                                            required>
                                    </td>
                                    <td>
                                        <a class="delete-set"><img src="{{ asset('images/delete.svg') }}"
                                                alt="svg"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 mb-3">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">THÊM</a>
                    <a href="{{ route('import-invoice.list') }}" class="btn btn-cancel">THOÁT</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // Thêm hàng nhập liệu
            $('#addProductBtn').click(function() {
                var newRow = $('.productRow').first().clone(); // Sao chép hàng gốc
                newRow.find('input, select').val(''); // Xóa giá trị nhập liệu của hàng mới

                $('#productTable tbody').append(newRow); // Thêm hàng mới vào bảng

                // Khởi tạo lại Select2 cho các thẻ select trong hàng mới
                newRow.find('select').select2();
            });

            // Xóa hàng nhập liệu
            $(document).on('click', '.delete-set', function() {
                var rowCount = $('#productTable tbody tr').length; // Số dòng trong bảng
                if (rowCount > 1) { // Kiểm tra nếu số dòng lớn hơn 1
                    $(this).closest('tr').remove(); // Xóa hàng chứa nút xóa được nhấn
                } else {
                    alert("Không thể xóa dòng cuối cùng");
                }
            });

            // Khởi tạo Select2 cho hàng đầu tiên khi tải trang
            $('.productRow').first().find('select').select2();
        });
    </script>
@endsection
