     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
         <div class="d-flex px-xl-5 pt-5">
             <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                 <h5 class="text-secondary text-uppercase mb-4">
                     Kết nối với chúng tôi
                 </h5>
                 <p class="mb-2">
                     <i class="fa fa-map-marker-alt text-primary mr-3"></i>{{ $settings->address }}
                 </p>
                 <p class="mb-2">
                     <i class="fa fa-envelope text-primary mr-3"></i>{{ $settings->email }}
                 </p>
                 <p class="mb-0">
                     <i class="fa fa-phone-alt text-primary mr-3"></i>{{ $settings->phone_number }}
                 </p>
             </div>
             <div class="col-lg-8 col-md-12">
                 <div class="row">
                     <div class="col-md-4 mb-5">
                         <h5 class="text-secondary text-uppercase mb-4">
                             Thông tin cần biết
                         </h5>
                         <div class="d-flex flex-column justify-content-start">
                             <a class="text-secondary mb-2" href="{{ route('account.order') }}">Tra cứu
                                 đơn hàng</a>
                             <a class="text-secondary mb-2" href="{{ route('blogs') }}">Tin
                                 tức</a>
                             <a class="text-secondary mb-2" href="{{ route('contact') }}">Liên
                                 hệ</a>
                             <a class="text-secondary mb-2"
                                 href="{{ route('product-type', ['type' => 'laptop']) }}">Laptop</a>
                             <a class="text-secondary" href="{{ route('product-type', ['type' => 'accessory']) }}">Phụ
                                 kiện</a>
                         </div>
                     </div>
                     <div class="col-md-4 mb-5">
                         <h5 class="text-secondary text-uppercase mb-4">
                             Tài khoản
                         </h5>
                         <div class="d-flex flex-column justify-content-start">
                             <a class="text-secondary mb-2" href="{{ route('public.login') }}">Đăng nhập</a>
                             <a class="text-secondary mb-2" href="{{ route('account.infor') }}">Thông tin tài khoản</a>
                             <a class="text-secondary mb-2" href="{{ route('account.favorite') }}">Sản phẩm yêu
                                 thích</a>
                         </div>
                     </div>
                     <div class="col-md-4 mb-5">
                         <h5 class="text-secondary text-uppercase mb-4">
                             Bảng tin
                         </h5>
                         <p>
                             Nhận thông tin cập nhật bằng cách đăng ký bản tin của chúng tôi
                         </p>
                         <form action="">
                             <div class="input-group input-send-gp">
                                 <input type="text" class="form-control input-send" placeholder="Địa chỉ email" />
                                 <button class="btn btn-primary bg-number-right text-white">
                                     <i class="fas fa-paper-plane"></i>
                                 </button>

                             </div>
                         </form>
                         <h6 class="text-secondary text-uppercase mt-4 mb-3">
                             Theo dõi chúng tôi
                         </h6>
                         <div class="d-flex">
                             <a class=" btn-square mr-2 btn-link twitter" href="#"><i
                                     class="fab fa-twitter"></i></a>
                             <a class="btn-square mr-2 btn-link facebook" href="{{ $settings->link_facebook }}"><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class=" btn-square mr-2 btn-link instagram" href="#"><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="border-top mx-xl-5 py-4 text-center" style="border-color: rgba(256, 256, 256, 0.1) !important">
             <div class="col-md-12 px-xl-0">
                 <p class="mb-md-0 text-center text-secondary">
                     &copy; <a class="text-primary" href="#"></a>2023.Chịu trách nhiệm nội dung:
                     <a class="text-primary" href="https://htmlcodex.com">Thanh Nhã - Quang Ninh</a>
                 </p>
             </div>
         </div>
     </div>
     <!-- Footer End -->

     <!-- Back to Top -->
     <a href="#" class="btn back-to-top"><i class="fa fa-angle-up"></i></a>
