@extends('layout')
    @section('content')
      <section class="pt-5 pb-5 homepage-search-block position-relative">
         <div class="banner-overlay"></div>
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-md-8">
                  <div class="homepage-search-title">
                     <h1 class="mb-2 font-weight-normal"><span class="font-weight-bold">رستوران مورد علاقه خود را پیدا کنید!</h1></span>
                     <h5 class="mb-5 text-secondary font-weight-normal">از بین صد ها شعبه ، رستوران مد نظر خودتان را به راحتی پیدا و رزرو کنید</h5>
                  </div>
                  <div class="homepage-search-form">
                     <form class="form-noborder">
                        <div class="form-row">
                           <div class="col-lg-7 col-md-7 col-sm-12 form-group">

                              <select name="resturans_search" id="resturans-search" class="resturans-search">
                                 <option value="">a</option>
                                 <option value="">b</option>
                                 <option value="">c</option>
                                 <option value="">d</option>
                              </select>

                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                              <a href="listing.html" class="btn btn-primary btn-block btn-lg btn-gradient">جستوجو</a>
                              <!--<button type="submit" class="btn btn-primary btn-block btn-lg btn-gradient">Search</button>-->
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="owl-carousel owl-carousel-category owl-theme">
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/chicken.jpg') }}" alt="">
                              <h6>مرغ</h6>
                              <p>156</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/Chow-Mein.jpg') }}" alt="">
                              <h6>چینی</h6>
                              <p>120</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/dessert.jpg') }}" alt="">
                              <h6>دسر</h6>
                              <p>130</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/french.jpg') }}" alt="">
                              <h6>فرانسوی</h6>
                              <p>120</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/healthy.jpg') }}" alt="">
                              <h6>سالم</h6>
                              <p>111</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/iranian.jpg') }}" alt="">
                              <h6>ایرانی</h6>
                              <p>958</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/italian.jpg') }}" alt="">
                              <h6>ایتالیایی</h6>
                              <p>56</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/mexican.jpg') }}" alt="">
                              <h6>مکزیکی</h6>
                              <p>40</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="{{ asset('/img/list/veg.jpg') }}" alt="">
                              <h6>سبزیجات</h6>
                              <p>156</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="osahan-slider pl-4 pt-3">
                     <div class="owl-carousel homepage-ad owl-theme">
                        <div class="item">
                           <a href="listing.html"><img class="img-fluid rounded" src="{{ asset('/img/slider-re-1.jpg') }}"></a>
                        </div>
                        <div class="item">
                           <a href="listing.html"><img class="img-fluid rounded" src="{{ asset('/img/slider-re-2.jpg') }}"></a>
                        </div>
                        <div class="item">
                           <a href="listing.html"><img class="img-fluid rounded" src="{{ asset('/img/slider-re-3.jpg') }}"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>




      <section class="section pt-5 pb-5 bg-white homepage-add-section">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="{{ asset('/img/1gal1.jpg') }}" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="{{ asset('/img/1gal2.jpg') }}" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="{{ asset('/img/1gal3.jpg') }}" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="{{ asset('/img/1gal4.jpg') }}" class="img-fluid rounded"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 text-center bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h5 class="m-0">برای ثبت رستوران خود در سامانه <a href="login.html">کلیک کنید</a></h5>
               </div>
            </div>
         </div>
      </section>

      @section('footer')

      <script>
         $(document).ready(function(){
            $('.resturans-search').select2({
               placeholder: 'نام رستوران را وارد کنید'
            });
         });
      </script>

      @stop

   @stop
