@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Người dùng</h4>
                    <h6>Quản lý người dùng của bạn</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/filter.svg"
                                        alt="img">
                                    <span><img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/closes.svg"
                                            alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset">
                                    <img src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-white.svg"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Disable</option>
                                            <option>Enable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/search-whites.svg"
                                                alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th class="text-center">Hình đại diện</th>
                                    <th class="text-center">Họ tên </th>
                                    <th class="text-center">Tên người dùng </th>
                                    <th class="text-center">Số điện thoại</th>
                                    <th class="text-center">Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td class="productimgname align-center">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="{{ asset($user->photo) }}" alt="{{ $user->name }}">
                                            </a>
                                        </td>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->username }}</td>
                                        <td class="text-center">{{ $user->phone_number }}</td>
                                        <td class="text-center"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="44302c2b29253704213c25293428216a272b29">[{{ $user->email }}]</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
