@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Category list</h4>
                    <h6>View/Search product Category</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('category.add') }}" class="btn btn-added">
                        <img src="{{ asset('images/plus.svg') }}" class="me-1" alt="img">Add Category
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('images/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('images/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('images/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('images/pdf.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('images/excel.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('images/printer.svg') }}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Choose Category</option>
                                            @foreach ($category as $_category)
                                                <option>{{ $_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="{{ asset('images/search-whites.svg') }}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Category name</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $_category)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>

                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="{{ asset('assets/category/' . $_category->image) }}"
                                                    alt="{{ $_category->name }}">
                                            </a>
                                            <a href="javascript:void(0);">{{ $_category->name }}</a>
                                        </td>
                                        <td>{{ $_category->type }}</td>
                                        <td>{{ $_category->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a class="me-3"
                                                href="{{ route('category.edit', ['slug' => $_category->slug]) }}">
                                                <img src="{{ asset('images/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="confirm-text"
                                                onclick="$.fn.showConfirmationDeleteAlert('category_delete_{{ $_category->id }}')">
                                                <img src="{{ asset('images/delete.svg') }}" alt="img">
                                            </a>
                                            <form id="category_delete_{{ $_category->id }}"
                                                action="{{ route('category.delete', ['id' => $_category->id]) }}"
                                                method="POST" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                {{ $category->links() }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
