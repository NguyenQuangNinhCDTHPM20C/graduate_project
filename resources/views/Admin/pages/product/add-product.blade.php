@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h6>
                        <a href="{{ route('product.list') }}">Sản phẩm /</a>
                        <span>Thêm</span>
                    </h6>
                    <h4>Thêm sản phẩm của bạn</h4>
                </div>
            </div>
            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="select" name="category" id="category" class="form-control" required>
                                        @foreach ($category as $_category)
                                            <option value="{{ $_category->id }}">{{ $_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phụ mục</label>
                                    <select class="select" name="sub_category" id="sub_category" class="form-control"
                                        required>
                                        @foreach ($sub_category as $_sub_category)
                                            <option value="{{ $_sub_category->id }}">{{ $_sub_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thương hiệu</label>
                                    <select class="select" name="brand" id="brand" class="form-control" required>
                                        @foreach ($brands as $_brand)
                                            <option value="{{ $_brand->id }}">{{ $_brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" name="code" id="code" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="selling_price" id="selling_price" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Loại giảm giá</label>
                                    <select class="select" name="discount_price" id="discount_price" class="form-control"
                                        required>
                                        <option value="0">Không giảm</option>
                                        <option value="10">10%</option>
                                        <option value="20">20%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" id="description" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Hình ảnh sản phẩm:</label>
                                    <div>
                                        <div id="preview-images" class="image-preview"></div>
                                    </div>
                                    <input type="file" name="images[]" id="image" class="form-control" multiple
                                        required accept="image/jpeg, image/png, image/gif, image/svg+xml">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Loại sản phẩm</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="is_laptop" name="is_laptop"
                                            value="Bike">
                                        <label class="form-check-label" for="is_laptop"> Là Laptop</label><br>
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
                        <div class="laptop-fields">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Hãng CPU</label>
                                        <input type="text" name="cpu_brand" id="cpu_brand" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Loại CPU</label>
                                        <input type="text" name="cpu_series" id="cpu_series" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Model CPU</label>
                                        <input type="text" name="cpu_model" id="cpu_model" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tần số cơ bản CPU</label>
                                        <input type="text" name="cpu_base_clock" id="cpu_base_clock"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Dung lượng bộ nhớ cache CPU</label>
                                        <input type="text" name="cpu_cache" id="cpu_cache" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tần số tối đa CPU</label>
                                        <input type="text" name="cpu_max_clock" id="cpu_max_clock"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Số lõi CPU</label>
                                        <input type="text" name="cpu_cores" id="cpu_cores" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Số luồng CPU</label>
                                        <input type="text" name="cpu_threads" id="cpu_threads" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Dung lượng RAM</label>
                                        <input type="text" name="ram_size" id="ram_size" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tiêu chuẩn RAM</label>
                                        <input type="text" name="ram_standard" id="ram_standard" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tốc độ RAM</label>
                                        <input type="text" name="ram_speed" id="ram_speed" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Dung lượng lưu trữ</label>
                                        <input type="text" name="storage_capacity" id="storage_capacity"
                                            class="form-control" required>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Loại socket RAM</label>
                                        <input type="text" name="ram_socket_type" id="ram_socket_type"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Loại lưu trữ</label>
                                        <input type="text" name="storage_type" id="storage_type" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Kích thước màn hình</label>
                                        <input type="text" name="display_size" id="display_size" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Độ phân giải màn hình</label>
                                        <input type="text" name="display_resolution" id="display_resolution"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Công nghệ màn hình</label>
                                        <input type="text" name="display_technology" id="display_technology"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tốc độ làm mới màn hình</label>
                                        <input type="text" name="refresh_rate" id="refresh_rate" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Dung lượng VRAM card đồ họa</label>
                                        <input type="text" name="graphics_vram" id="graphics_vram"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Card đồ họa tích hợp</label>
                                        <input type="text" name="onboard_graphics" id="onboard_graphics"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Card đồ họa rời</label>
                                        <input type="text" name="dedicated_graphics" id="dedicated_graphics"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Kết nối mạng không dây</label>
                                        <input type="text" name="wireless_connectivity" id="wireless_connectivity"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Hệ điều hành</label>
                                        <input type="text" name="operating_system" id="operating_system"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Kích thước</label>
                                        <input type="text" name="dimensions" id="dimensions" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Trọng lượng</label>
                                        <input type="text" name="weight" id="weight" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Dung lượng pin</label>
                                        <input type="text" name="battery_capacity" id="battery_capacity"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">THÊM</button>
                            <a href="{{ route('product.list') }}" class="btn btn-cancel">THOÁT</a>
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
        function deleteImage(element) {
            element.parentNode.remove();
            updateImageInput();
        }

        function previewImages(input) {
            var previewContainer = document.getElementById('preview-images');
            previewContainer.innerHTML = '';

            if (input.files) {
                var filesAmount = input.files.length;

                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    var file = input.files[i];

                    reader.onload = (function(file, index) {
                        return function(event) {
                            var imageContainer = document.createElement('div');
                            imageContainer.classList.add('preview-image');

                            var image = document.createElement('img');
                            image.src = event.target.result;

                            var imageCaption = document.createElement('p');
                            imageCaption.innerText = 'Hình chính';

                            var radioButtonContainer = document.createElement('div');
                            radioButtonContainer.classList.add('radio-button-container');

                            var radioButton = document.createElement('input');
                            radioButton.type = 'radio';
                            radioButton.name =
                                'featured_image'; // Loại bỏ chỉ mục để tất cả các radio button có cùng tên
                            radioButton.value = index;

                            if (index === 0) {
                                radioButton.checked = true;
                            }

                            radioButton.addEventListener('change', function() {
                                handleRadioButtonChange(this);
                            });

                            radioButtonContainer.appendChild(radioButton);
                            radioButtonContainer.appendChild(imageCaption);

                            var deleteButton = document.createElement('button');
                            deleteButton.classList.add('delete-button');
                            deleteButton.setAttribute('data-index', index);
                            deleteButton.innerHTML = '<i class="fas fa-times-circle"></i>';
                            deleteButton.addEventListener('click', function() {
                                deleteImage(this);
                            });

                            imageContainer.appendChild(image);
                            imageContainer.appendChild(radioButtonContainer);
                            imageContainer.appendChild(deleteButton);

                            previewContainer.appendChild(imageContainer);

                            imageFiles.push(file);
                            updateImageInput();
                        };
                    })(file, i);

                    reader.readAsDataURL(file);
                }
            }

            // Tự động chọn radio button đầu tiên khi có hình ảnh được tải lên
            if (selectedRadioButtonIndex === 0) {
                var firstRadioButton = previewContainer.querySelector(
                    'input[type="radio"][name="featured_image"]:first-of-type');
                if (firstRadioButton) {
                    firstRadioButton.checked = true;
                }
            }
        }

        // Lưu trạng thái của radio button được chọn
        var selectedRadioButton = null;
        var selectedRadioButtonIndex = 0;

        // Xử lý sự kiện khi radio button được thay đổi
        function handleRadioButtonChange(radio) {
            if (selectedRadioButton !== null) {
                selectedRadioButton.checked = false;
            }
            selectedRadioButton = radio;
            selectedRadioButtonIndex = parseInt(radio.value);
        }

        // Cập nhật giá trị trong thẻ input file
        function updateImageInput() {
            var imageInput = document.getElementById('image');
            var imageFiles = document.querySelectorAll('.preview-image img');
            var imageValues = Array.from(imageFiles).map(function(file) {
                return file.src;
            });
            imageInput.value = imageValues.join(',');
        }

        document.getElementById('image').addEventListener('change', function() {
            previewImages(this);
        });

        //Load các thẻ nhập cho laptops
        document.addEventListener('DOMContentLoaded', function() {
            var checkbox = document.getElementById('is_laptop');
            var laptopFields = document.querySelector('.laptop-fields');

            function toggleLaptopFields() {
                if (checkbox.checked) {
                    laptopFields.style.display = 'block';
                    laptopFields.querySelectorAll('input').forEach(function(input) {
                        input.required = true;
                    });
                } else {
                    laptopFields.style.display = 'none';
                    laptopFields.querySelectorAll('input').forEach(function(input) {
                        input.required = false;
                    });
                }
            }

            toggleLaptopFields();
            checkbox.addEventListener('change', toggleLaptopFields);
        });
    </script>

@endsection
