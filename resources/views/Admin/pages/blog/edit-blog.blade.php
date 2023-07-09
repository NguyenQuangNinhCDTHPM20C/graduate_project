@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <h6>
                    <a href="{{ route('blog.index') }}">Tin tức /</a>
                    <span>Chi tiết</span>
                </h6>
                <h4>Chi tiết bài viết của bạn</h4>
            </div>
            <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Title" value="{{ $blog->title }}" />
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="author">Tác giả:</label>
                                        <input type="text" name="author" id="author" value="{{ $blog->author }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select class="select" name="category_id" id="category" class="form-control"
                                            required>
                                            @foreach ($category as $_category)
                                                <option value="{{ $_category->id }}"
                                                    @if ($blog->category_id == $_category->id) selected @endif>{{ $_category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Phụ mục</label>
                                        <select class="select" name="sub_category_id" id="sub_category" class="form-control"
                                            required>
                                            @foreach ($sub_category as $_sub_category)
                                                <option value="{{ $_sub_category->id }}"
                                                    @if ($blog->sub_category_id == $_sub_category->id) selected @endif>
                                                    {{ $_sub_category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="content">Nội dung:</label>
                                        <textarea name="content" id="content"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary form-control">TẠO BÀI VIẾT</button>
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
