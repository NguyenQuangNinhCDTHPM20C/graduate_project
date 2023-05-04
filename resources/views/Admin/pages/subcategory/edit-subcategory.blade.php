@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper" style="min-height: 354px;">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Edit Sub Category</h4>
                <h6>Create new product Category</h6>
            </div>
        </div>
        <form method="post" action="{{ route('subcategory.update', $sub_category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>SubCategory Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $sub_category->name }}" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="select" name="category" id="category" class="form-control" required>
                                    <option>Choose Category</option>
                                    @foreach($category as $_category)
                                    <option value="{{ $_category->id }}" @if($sub_category->category_id ==
                                        $_category->id)
                                        selected @endif>{{ $_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label> Status</label>
                                <select class="select" name="status" id="status" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="javascript:void(0);" class="btn btn-submit me-2">Submit</button>
                            <a href="https://dreamspos.dreamguystech.com/laravel/template/public/subcategorylist"
                                class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection