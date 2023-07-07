<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">

        <div class="col-lg-8">
            <div class="slide">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner carousel-slide bg-radius">
                        <div class="carousel-item position-relative active" style="height: 430px">
                            <a href="#"><img class="position-absolute w-100 h-100"
                                    src="{{ asset('images/carousel-1-a.jpg') }}" style="object-fit: cover" /></a>

                        </div>
                        <div class="carousel-item position-relative" style="height: 430px">
                            <a href="#"><img class="position-absolute w-100 h-100"
                                    src="{{ asset('images/carousel-1-b.jpg') }}" style="object-fit: cover" /></a>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px">
                            <a href="#"><img class="position-absolute w-100 h-100"
                                    src="{{ asset('images/carousel-1-c.jpg') }}" style="object-fit: cover" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30 bg-radius" style="height: 200px">
                <img class="img-fluid" src="{{ asset('images/carousel-2.jpg') }}" alt="" />
                <a href="">
                    <div class="offer-text">
                    </div>
                </a>
            </div>
            <div class="product-offer mb-30 bg-radius " style="height: 200px">
                <img class="img-fluid" src="{{ asset('images/carousel-3.jpg') }}" alt="" />
                <a href="">
                    <div class="offer-text">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
