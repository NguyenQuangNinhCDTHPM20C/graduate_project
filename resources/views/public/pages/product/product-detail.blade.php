@extends('Public.layouts.app')

@section('title', 'Double-N shop')

@section('content')
<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <div class="love-this-button">
                        <form action="{{route('favorite.add')}}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                            <button type="submit"> <i class="fa-regular fa-heart"></i></button>
                        </form>
                        <!-- <a href="#" class="favorite-toggle">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa fa-heart hidden"></i>
                        </a> -->
                    </div>
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="{{asset('assets/product/' .$product->image)}}"
                            alt="$product->name">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{asset('assets/product/' .$product->image)}}"
                            alt="$product->name">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{asset('assets/product/' .$product->image)}}"
                            alt="$product->name">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="{{asset('assets/product/' .$product->image)}}"
                            alt="$product->name">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3>{{$product->name}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(99 Reviews)</small>
                </div>
                <div class="d-flex align-items-center  mt-2">

                    <h5> {{$product->discount_price}}VNĐ</h5>
                    <h6 class="text-muted ml-2">
                        <del>{{$product->selling_price}}VNĐ</del>
                    </h6>
                </div>

                <p class="mb-4">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                    clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                    Nonumy</p>
                <div class="d-flex mb-3">
                    <strong class="text-grey mr-3">Sizes:</strong>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-1" name="size">
                            <label class="custom-control-label" for="size-1">XS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-2" name="size">
                            <label class="custom-control-label" for="size-2">S</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-3" name="size">
                            <label class="custom-control-label" for="size-3">M</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-4" name="size">
                            <label class="custom-control-label" for="size-4">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-5" name="size">
                            <label class="custom-control-label" for="size-5">XL</label>
                        </div>
                    </form>
                </div>
                <div class="d-flex mb-4">
                    <strong class="text-grey mr-3">Colors:</strong>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-1" name="color">
                            <label class="custom-control-label" for="color-1">Black</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-2" name="color">
                            <label class="custom-control-label" for="color-2">White</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-3" name="color">
                            <label class="custom-control-label" for="color-3">Red</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-4" name="color">
                            <label class="custom-control-label" for="color-4">Blue</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-5" name="color">
                            <label class="custom-control-label" for="color-5">Green</label>
                        </div>
                    </form>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" name="quantity"
                                value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->discount_price }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <!-- <input type="hidden"  value="1"> -->
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                </form>
            </div>
            <div class="d-flex pt-2">
                <strong class="mr-2">Share on:</strong>
                <div class="d-inline-flex">
                    <a class="px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row px-xl-5">
    <div class="col">
        <div class="bg-light p-30">
            <div class="nav nav-tabs mb-4">
                <a class="nav-item nav-link text-tab-p-d text-tab-p-d-active" data-toggle="tab"
                    href="#tab-pane-1">Description</a>
                <a class="nav-item nav-link text-tab-p-d" data-toggle="tab" href="#tab-pane-2">Information</a>
                <a class="nav-item nav-link text-tab-p-d" data-toggle="tab" href="#tab-pane-3">Reviews
                    ({{$review_count}})</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Product Description</h4>
                    <p>{{$product->description}}</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Additional Information</h4>
                    <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam
                        invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod
                        consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam.
                        Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos
                        dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod
                        nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt
                        tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">{{$review_count}} review for "{{$product->name}}"</h4>
                            @foreach($reviews as $_review)
                            <div class="media mb-4">
                                <img src="{{asset('assets/user/'.$_review->account->photo)}}" alt="Image"
                                    class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>{{$_review->account->name}}<small> - <i>{{$_review->created_at}}</i></small>
                                    </h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>{{$_review->comment}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @if(!session()->has('account'))
                            <small style="color:red;">You need to login to review products ...*</small>
                            @else
                            <h4 class="mb-4">Leave a review</h4>
                            <img src="{{ asset('assets/user/' . (session()->has('account') ? session('account')->photo : '')) }}
" alt="{{session()->has('account') ? session('account')->name : ''}}" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <small>
                                {{session()->has('account') ? session('account')->name : ''}}
                            </small>
                            <form action="{{ route('review.add') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star" data-index="1"></i>
                                        <i class="far fa-star" data-index="2"></i>
                                        <i class="far fa-star" data-index="3"></i>
                                        <i class="far fa-star" data-index="4"></i>
                                        <i class="far fa-star" data-index="5"></i>
                                    </div>
                                </div>
                                <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" id="rating" name="rating" value="5">
                                <div class="form-group">
                                    <label for="message">Your Review *</label>
                                    <textarea id="comment" name="comment" cols="30" rows="5"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Submit" class="btn btn-primary px-3">
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Shop Detail End -->
@stop
@section('scripts')
<script>
// Lấy các phần tử cần thiết
const input = document.querySelector('.quantity input');
const btnMinus = document.querySelector('.quantity .btn-minus');
const btnPlus = document.querySelector('.quantity .btn-plus');

// Thêm sự kiện "click" cho nút "tăng"
btnPlus.addEventListener('click', () => {
    let value = parseInt(input.value);
    value += 1;
    input.value = value;
});

// Thêm sự kiện "click" cho nút "giảm"
btnMinus.addEventListener('click', () => {
    let value = parseInt(input.value);
    value -= 1;
    if (value < 1) {
        value = 1;
    }
    input.value = value;
});
//==========================
document.addEventListener('DOMContentLoaded', function() {
    var favoriteToggle = document.querySelector('.favorite-toggle');
    var heartRegular = favoriteToggle.querySelector('.fa-regular.fa-heart');
    var heartHidden = favoriteToggle.querySelector('.fa.fa-heart.hidden');

    favoriteToggle.addEventListener('click', function(event) {
        event.preventDefault();
        heartRegular.classList.toggle('hidden');
        heartHidden.classList.toggle('hidden');
    });
});
//===================
const stars = document.querySelectorAll('.text-primary i');

stars.forEach(star => {
    star.addEventListener('click', () => {
        const clickedIndex = parseInt(star.getAttribute('data-index'));
        stars.forEach(star => {
            const starIndex = parseInt(star.getAttribute('data-index'));
            if (starIndex <= clickedIndex) {
                star.classList.remove('far');
                star.classList.add('fa');
            } else {
                star.classList.remove('fa');
                star.classList.add('far');
            }
        });
    });
});
</script>
@stop