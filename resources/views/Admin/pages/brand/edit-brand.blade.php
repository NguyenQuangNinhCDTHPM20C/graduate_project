@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand Edit</h4>
                <h6>Update your brand</h6>
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
                                <label>Brand Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Brand Image</label>
                            <div class="product-img">
                                <img id="preview-image" src="{{asset('assets/brand/' .$brand->image)}}"
                                    alt="{{$brand->name}}">
                            </div>
                            <div class="image-upload">
                                <input type="file" name="image" id="image" class="form-control"
                                    onchange="previewImage(event)">
                                <div class="image-uploads">
                                    <img src="{{asset('images/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="{{route('brand.list')}}" class="btn btn-cancel">Cancel</a>
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