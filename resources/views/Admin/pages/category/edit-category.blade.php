@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Category Edit</h4>
                <h6>Update your category</h6>
            </div>
        </div>
        <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $category->name }}" required>
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
                            <button href="javascript:void(0);" type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{route('category.list')}}" class="btn btn-cancel">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- Debugging output --}}
{{ dd($category) }}
@endsection