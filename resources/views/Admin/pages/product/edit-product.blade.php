@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Edit</h4>
                <h6>Update your product</h6>
            </div>
        </div>
        <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $product->name }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select" name="category" id="category" class="form-control" required>
                                    <option>Choose Category</option>
                                    @foreach($category as $_category)
                                    <option value="{{ $_category->id }}" @if($product->category_id == $_category->id)
                                        selected @endif>{{ $_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select class="select" name="sub_category" id="sub_category" class="form-control"
                                    required>
                                    <option>Choose Sub Category</option>
                                    @foreach($sub_category as $_sub_category)
                                    <option value="{{ $_sub_category->id }}" @if($product->sub_category_id ==
                                        $_sub_category->id) selected @endif>{{ $_sub_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="select" name="brand" id="brand" class="form-control" required>
                                    <option>Choose Brand</option>
                                    @foreach($brands as $_brand)
                                    <option value="{{ $_brand->id }}" @if($product->brand_id == $_brand->id) selected
                                        @endif>{{ $_brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" name="code" id="code" class="form-control"
                                    value="{{ $product->code }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" id="quantity" class="form-control"
                                    value="{{ $product->quantity }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="selling_price" id="selling_price" class="form-control"
                                    value="{{ $product->selling_price }}" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount Type</label>
                                <select class="select" name="discount_price" id="discount_price" class="form-control"
                                    required>
                                    <option value="0" @if($discount_percentage==0) selected @endif>No discount
                                    </option>
                                    <option value="10" @if($discount_percentage==10) selected @endif>10%</option>
                                    <option value="20" @if($discount_percentage==20) selected @endif>20%</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="description" class="form-control"
                                    required>{{ $product->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Tag name</label>
                                <input type="text" name="tag" id="tag" class="form-control" value="{{ $product->tag }}"
                                    required>
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
                                <label> Product Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image" id="image" class="form-control">
                                    <div class="image-uploads">
                                        <img id="preview-image" src="{{asset('images/upload.svg')}}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{route('product.list')}}" class="btn btn-cancel">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- Debugging output --}}
{{ dd($product) }}
@endsection