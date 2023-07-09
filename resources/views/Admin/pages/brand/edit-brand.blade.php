@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('brand.list') }}">Thương hiệu /</a>
                        <span>Chỉnh sửa</span>
                    </h6>
                    <h4>Cập nhật thương hiệu của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('brand.update', $brand->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên thương hiệu</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $brand->name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Hình ảnh:</label>
                                <img src="{{ asset($brand->image) }}" alt="{{ $brand->name }}">
                                <input type="file" name="image" id="image" class="form-control" required
                                    accept="image/jpeg, image/png, image/gif, image/svg+xml">
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
