@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add</h4>
                    <h6>Create new product</h6>
                </div>
            </div>
            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select" name="category" id="category" class="form-control" required>
                                        @foreach ($category as $_category)
                                            <option>{{ $_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="select" name="sub_category" id="sub_category" class="form-control"
                                        required>
                                        @foreach ($sub_category as $_sub_category)
                                            <option>{{ $_sub_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="select" name="brand" id="brand" class="form-control" required>
                                        @foreach ($brands as $_brand)
                                            <option>{{ $_brand->name }}</option>
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
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="selling_price" id="selling_price" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Discount Type</label>
                                    <select class="select" name="discount_price" id="discount_price" class="form-control"
                                        required>
                                        <option value="0">No discount</option>
                                        <option value="10">10%</option>
                                        <option value="20">20%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="description" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tag name</label>
                                    <input type="text" name="tag" id="tag" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Status</label>
                                    <select class="select" name="status" id="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <div>
                                        <div id="preview-images" class="image-preview"></div>
                                    </div>
                                    <input type="file" name="images[]" id="image" class="form-control" multiple
                                        required accept="image/jpeg, image/png, image/gif, image/svg+xml">

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <p class="row">
                                        <input type="checkbox" id="test1" />
                                        <label for="test1">Is Laptop</label>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('product.list') }}" class="btn btn-cancel">Cancel</a>
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
        // JavaScript code
        // Xóa hình ảnh khi nhấn nút xóa
        function deleteImage(element) {
            element.parentNode.remove(); // Xóa phần tử cha của nút xóa (tức là div chứa hình ảnh)
            updateImageInput(); // Cập nhật giá trị trong thẻ input file
        }

        // Hiển thị hình ảnh được chọn khi thay đổi input file
        // Hiển thị hình ảnh được chọn khi thay đổi input file
        function previewImages(input) {
            var previewContainer = document.getElementById('preview-images');
            previewContainer.innerHTML = '';

            if (input.files) {
                var filesAmount = input.files.length;

                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    var file = input.files[i]; // Lấy tệp tin từ input

                    reader.onload = (function(file, index) {
                        return function(event) {
                            var imageContainer = document.createElement('div');
                            imageContainer.classList.add('preview-image');

                            var image = document.createElement('img');
                            image.src = event.target.result;

                            var imageCaption = document.createElement('p');
                            imageCaption.innerText = 'Is Featured';

                            var radioButtonContainer = document.createElement('div');
                            radioButtonContainer.classList.add('radio-button-container');

                            var radioButton = document.createElement('input');
                            radioButton.type = 'radio';
                            radioButton.name = 'featured_image_' +
                                index; // Sử dụng tên duy nhất cho mỗi radio button
                            radioButton.value = index; // Giá trị của radio button là chỉ mục của hình ảnh

                            radioButtonContainer.appendChild(radioButton);
                            radioButtonContainer.appendChild(imageCaption);

                            var deleteButton = document.createElement('button');
                            deleteButton.classList.add('delete-button');
                            deleteButton.setAttribute('data-index',
                                index); // Lưu chỉ mục của hình ảnh vào thuộc tính data-index
                            deleteButton.innerHTML = '<i class="fas fa-times-circle"></i>';
                            deleteButton.addEventListener('click', function() {
                                deleteImage(this);
                            });

                            imageContainer.appendChild(image);
                            imageContainer.appendChild(radioButtonContainer);
                            imageContainer.appendChild(deleteButton);

                            previewContainer.appendChild(imageContainer);

                            imageFiles.push(file); // Thêm tệp tin vào mảng tệp tin
                            updateImageInput(); // Cập nhật giá trị trong thẻ input file
                        };
                    })(file, i);

                    reader.readAsDataURL(file);
                }
            }
        }


        // Cập nhật giá trị trong thẻ input file
        function updateImageInput() {
            var imageInput = document.getElementById('image');
            var imageFiles = document.querySelectorAll('.preview-image img');
            var imageValues = Array.from(imageFiles).map(function(file) {
                return file.src;
            });
            imageInput.value = imageValues.join(','); // Cập nhật giá trị trong thẻ input file
        }

        // Sự kiện thay đổi input file
        document.getElementById('image').addEventListener('change', function() {
            previewImages(this);
        });
    </script>

@endsection
