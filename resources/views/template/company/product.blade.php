
@extends("template.company.app")


@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>اخبار</h2>
                        <ul>
                            <li><a href="{{route("front.website")}}">صفحه اصلی</a></li>
                            <li>وبلاگ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Main Content -->
        <main class="main-content">

            <!-- Product Details Area -->
            <div class="tm-section product-details-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widgets sidebar-widgets3 sticky-sidebar">

                                <!-- Single Widget -->
                                <div class="single-widget widget-categories">
                                    <h5 class="widget-title">دسته بندی ها</h5>
                                    <ul>
                                        <li><a href="#">وسایل ورزشی <span>25</span></a></li>
                                        <li><a href="#">وسایل الکترونیکی <span>34</span></a></li>
                                        <li><a href="#">سلامت و زیبایی <span>12</span></a></li>
                                        <li><a href="#">اسباب بازی <span>28</span></a></li>
                                        <li><a href="#">لوازم خانگی <span>30</span></a></li>
                                        <li><a href="#">ساعت <span>08</span></a></li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-popularproduct">
                                    <h5 class="widget-title">پربازدید ترین محصولات</h5>
                                    <ul>

                                        @foreach($populars as $popular)
                                        <li>
                                            <a target="{{$popular->target}}" href="{{route("front.single.product",$popular->id )}}" class="widget-popularproduct-image">
                                                <img src="{{ url("public".$popular->getFirstMediaUrl('images'))}}" alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a target="{{$popular->target}}" href="{{route("front.single.product",$popular->id )}}">{{$popular->title}}</a></h6>
                                                <span>{{$popular->price}} تومان</span>
                                            </div>
                                        </li>
                                            @endforeach

                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-size">
                                    <h5 class="widget-title">انتخاب سایز</h5>
                                    <ul>
                                        <li><a href="#">گوچک </a></li>
                                        <li><a href="#">متوسط</a></li>
                                        <li><a href="#">بزرگ</a></li>
                                        <li><a href="#">خیلی بزرگ </a></li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tm-prodetails">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <!-- Product Details Images -->
                                        <div class="tm-prodetails-images">
                                            <div class="tm-prodetails-largeimage">
                                                <img src="{{ url("public".$product->getFirstMediaUrl('images'))}}" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-1-lg.jpg" alt="product image">
                                                <a href="{{ url("public".$product->getFirstMediaUrl('images'))}}" class="tm-prodetails-zoomimage">
                                                    <i class="fas fa-search-plus"></i>
                                                </a>
                                            </div>
                                            <div id="image-gallery" class="tm-prodetails-thumbs">
                                                <a class="active" href="#" data-image="assets/images/product/product-details/prdoduct-details-image-1.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-1-lg.jpg">
                                                    <img src="assets/images/product/product-image-1.jpeg" alt="">
                                                </a>
                                                <a href="#" data-image="assets/images/product/product-details/prdoduct-details-image-2.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-2-lg.jpg">
                                                    <img src="assets/images/product/product-image-3.jpeg" alt="">
                                                </a>
                                                <a href="#" data-image="assets/images/product/product-details/prdoduct-details-image-3.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-3-lg.jpg">
                                                    <img src="assets/images/product/product-image-4.jpeg" alt="">
                                                </a>
                                                <a href="#" data-image="assets/images/product/product-details/prdoduct-details-image-4.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-4-lg.jpg">
                                                    <img src="assets/images/product/product-image-5.jpeg" alt="">
                                                </a>
                                                <a href="#" data-image="assets/images/product/product-details/prdoduct-details-image-5.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-5-lg.jpg">
                                                    <img src="assets/images/product/product-image-6.jpeg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!--// Product Details Images -->

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="tm-prodetails-content">
                                            <h3 class="tm-prodetails-title">{{$product->title}}</h3>
                                            <div class="tm-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <p class="tm-prodetails-availability">وضعیت : <span>موجود</span></p>
                                            <div class="tm-prodetails-price">
                                                <span><del>50000 تومان</del> {{$product->price}} تومان</span>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                            <div class="tm-prodetails-quantitycart">
                                                <div class="tm-quantitybox">
                                                    <input type="text" value="1">
                                                </div>
                                                <a href="#" class="tm-button">افزودن به سبد خرید<b></b></a>
                                            </div>

                                            <div class="tm-prodetails-categories">
                                                <h6>دسته بندی ها :</h6>
                                                <ul>
                                                    <li><a href="shop.html">الکتریکی</a></li>
                                                    <li><a href="shop.html">ساعت</a></li>
                                                    <li><a href="shop.html">سفید</a></li>
                                                </ul>
                                            </div>

                                            <div class="tm-prodetails-tags">
                                                <h6>برچسب ها :</h6>
                                                <ul>
                                                    <li><a href="shop.html">سفید</a></li>
                                                    <li><a href="shop.html">ساعت</a></li>
                                                </ul>
                                            </div>

                                            <div class="tm-prodetails-share">
                                                <h6>اشتراک گذاری :</h6>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Details Description & Review -->
                            <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                                <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab" href="#prodetails-area1" role="tab" aria-controls="prodetails-area1" aria-selected="true">توضیحات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="prodetails-area2-tab" data-toggle="tab" href="#prodetails-area2" role="tab" aria-controls="prodetails-area2" aria-selected="false">نظرات
                                            (1)</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="prodetails-content">
                                    <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel" aria-labelledby="prodetails-area1-tab">
                                        <div class="tm-prodetails-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                            <ul>
                                                <li><b>نام برند :</b> ABCD</li>
                                                <li><b>مدل :</b> ABCD band 3</li>
                                                <li><b>زبان :</b>
                                                    فارسی ، عربی </li>
                                                <li><b>جنس :</b> پلاستیک </li>
                                                <li><b>عملکرد ها :</b> ضربان قلب ، اندازه گیری ، مسافت</li>
                                                <li><b>نوع :</b> OLEDScreen</li>
                                                <li><b>سیستم عامل :</b> اندروید</li>
                                                <li><b>باتری :</b> 110 میلی آمپر</li>
                                                <li><b>اندازه :</b> 78 اینچ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prodetails-area2" role="tabpanel" aria-labelledby="prodetails-area2-tab">
                                        <div class="tm-prodetails-review">
                                            <h5 class="text-uppercase">1 نظر</h5>
                                            <div class="tm-comment-wrapper mb-50">
                                                <!-- Comment Single -->
                                                <div class="tm-comment">
                                                    <div class="tm-comment-thumb">
                                                        <img src="assets/images/blog/authors/author-image-3.png" alt="author image">
                                                    </div>
                                                    <div class="tm-comment-content">
                                                        <h6 class="tm-comment-authorname"><a href="#">رضا </a></h6>
                                                        <span class="tm-comment-date"> شنبه، 12 مهر 1397 ، در ساعت 4 بعد ظهر</span>
                                                        <div class="tm-rating">
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                        </div>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                    </div>
                                                </div>
                                                <!--// Comment Single -->
                                            </div>

                                            <h5 class="text-uppercase">ارسال نظر</h5>
                                            <form action="#" class="tm-form">
                                                <div class="tm-form-inner">
                                                    <div class="tm-form-field">
                                                        <div class="tm-rating tm-rating-input">
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span class="active"><i class="fas fa-star"></i></span>
                                                            <span><i class="fas fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="tm-form-field tm-form-fieldhalf">
                                                        <input type="text" placeholder="نام*" required="required">
                                                    </div>
                                                    <div class="tm-form-field tm-form-fieldhalf">
                                                        <input type="Email" placeholder="ایمیل*" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <textarea name="product-review" cols="30" rows="5" placeholder="نظر شما"></textarea>
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <button type="submit" class="tm-button">ارسال <b></b></button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Description & Review -->

                            <div class="tm-similliar-products tm-padding-section-sm-top">
                                <h3 class="small-title">محصولات مشابه</h3>
                                <div class="tm-similliar-products-slider tm-slider-arrow tm-slider-arrow-hovervisible row">
                                @foreach($products as $product)
                                    <!-- Single Product -->
                                        <div class="col-12">
                                            <div class="tm-product">
                                                <div class="tm-product-image">
                                                    <a class="tm-product-imagelink" target="{{$product->target}}" href="{{route("front.single.product",$product->id )}}">
                                                        <img src="{{ url("public".$product->getFirstMediaUrl('images'))}}" alt="product image">
                                                    </a>
                                                    <ul class="tm-product-actions">
                                                        <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                        <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                                    </ul>
                                                </div>
                                                <div class="tm-product-content">
                                                    <h5 class="tm-product-title"><a target="{{$product->target}}" href="{{route("front.single.product",$product->id )}}">{{$product->title}}</a></h5>
                                                    <div class="tm-product-rating">
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h6 class="tm-product-price">{{$product->price}} تومان</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--// Single Product -->
                                    @endforeach

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Product Details Area -->

        </main>
        <!--// Main Content -->



    </main>
    <!--// Main Content -->

@endsection


