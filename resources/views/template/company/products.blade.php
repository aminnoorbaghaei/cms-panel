
@extends("template.company.app")


@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>فروشگاه</h2>
                        <ul>
                            <li><a href="index-1.html">خانه</a></li>
                            <li>فروشگاه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Shop Page Area -->
        <div class="tm-section shop-page-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="widgets sidebar-widgets3 sticky-sidebar">

                            <!-- Single Widget -->
                            <div class="single-widget widget-categories">
                                <h5 class="widget-title">دسته بندی</h5>
                                <ul>
                                    <li><a href="#">موبایل</a></li>
                                    <li><a href="#">ساعت</a></li>
                                    <li><a href="#">کفش</a></li>
                                    <li><a href="#">اسباب بازی</a></li>
                                    <li><a href="#">سلامتی</a></li>
                                    <li><a href="#">لوازم ورزشی</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-pricefilter">
                                <h5 class="widget-title">فیلتر بر اساس قیمت</h5>
                                <div class="widget-pricefilter-inner">
                                    <div class="tm-rangeslider" data-range_min="0" data-range_max="800" data-cur_min="200" data-cur_max="550">
                                        <div class="tm-rangeslider-bar nst-animating"></div>
                                        <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>
                                        <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>
                                    </div>
                                    <div class="widget-pricefilter-actions">
                                        <p class="widget-pricefilter-price">قیمت : $<span class="tm-rangeslider-leftlabel">308</span>
                                            تا $<span class="tm-rangeslider-rightlabel">798</span></p>
                                        <button class="widget-pricefilter-button">فیلتر</button>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-popularproduct">
                                <h5 class="widget-title">محصولات محبوب</h5>
                                <ul>
                                    @foreach($products as $product)
                                        <li>
                                            <a target="{{$product->target}}" href="{{route("front.single.product",$product->id )}}" class="widget-popularproduct-image">
                                                <img src="{{ url("public".$product->getFirstMediaUrl('images'))}}" alt="product thumbnail">
                                            </a>
                                            <div class="widget-popularproduct-content">
                                                <h6><a target="{{$product->target}}" href="{{route("front.single.product",$product->id )}}">{{$product->title}}</a></h6>
                                                <span>{{$product->price}} تومان</span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-size">
                                <h5 class="widget-title">اندازه</h5>
                                <ul>
                                    <li><a href="#">کوچک </a></li>
                                    <li><a href="#">متوسط</a></li>
                                    <li><a href="#">بزرگ</a></li>
                                    <li><a href="#">خیلی بزرگ </a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form action="#" class="tm-shop-header">
                            <p class="tm-shop-countview">نمایش 1 تا 3 از 16 محصول </p>
                            <select>
                                <option value="value">نمایش پیشفرض</option>
                                <option value="value">نام</option>
                                <option value="value">تاریخ</option>
                                <option value="value">برترین فروشندگان</option>
                                <option value="value">پرفروش ترین</option>
                            </select>
                        </form>
                        <div class="tm-shop-products">
                            <div class="row mt-50-reverse">



                            @foreach($products as $product)
                                <!-- Single Product -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                                        <div class="tm-product wow fadeInUp">
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
                                                <h5 class="tm-product-price"><del>{{$product->price}} تومان</del> {{$product->price}} تومان</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// Single Product -->
                                @endforeach

                            </div>
                        </div>
                        <div class="tm-pagination mt-50">
                            <ul>
                                <li class="is-active"><a href="shop.html">1</a></li>
                                <li><a href="shop.html">2</a></li>
                                <li><a href="shop.html">3</a></li>
                                <li><a href="shop.html">صفحه بعد</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Shop Page Area -->

    </main>
    <!--// Main Content -->

@endsection

