@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Blog</h4>
                    <h6>Create the new blog</h6>
                </div>
            </div>
            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Title" />
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="author">Author:</label>
                                        <input type="text" name="author" id="author">
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="content">Content:</label>
                                        <textarea name="content" id="content"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary form-control">Tạo bài blog</button>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
