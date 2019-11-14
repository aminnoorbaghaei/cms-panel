<!-- Footer Area -->
<footer class="footer" data-bgimage="/template/company/img/bg-image-1.jpg" data-black-overlay="9">

    <!-- Footer Widgets -->
    <div class="footer-toparea tm-padding-section">
        <div class="container">
            <div class="row widgets footer-widgets">

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Info) -->
                    <div class="single-widget widget-info">
                        <a href="index-1.html" class="widget-info-logo">
                            <img  src="/public/template/company/img/pic-6.png" alt="footer logo">
                        </a>
                        <p> ‫شماره ثبت و تاریخ ثبت شرکت : ثبت 13821 و تاریخ 1394/08/24</p>
                        <ul class="widget-info-social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <!--// Single Widget (Widget Info) -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Contact) -->
                    <div class="single-widget widget-contact">
                        <h5 class="widget-title">تماس با ما</h5>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{$setting->address}}</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>ایمیل : <a href="mailto:‪{{$setting->email}}‬">‫‪{{$setting->mail}}‬</a></p>

                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p ><a href="tel:{{$setting->brand}}phone">{{$setting->phone}}</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--// Single Widget (Widget Contact) -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Blog) -->
                    <div class="single-widget widget-recentpost">
                        <h5 class="widget-title">آخرین مطالب</h5>
                        <ul>

                        @foreach($lastArticles as $article)
                            <li>
                                {{--<a target="{{$article->target}}" href="{{route("front.single.article",$article->id )}}" class="widget-recentpost-image">--}}
                                    {{--<img src="{{ url("public".$article->getFirstMediaUrl('images'))}}" alt="blog thumbnail">--}}
                                {{--</a>--}}
                                <div class="widget-recentpost-content">
                                    <h6><a href="blog-details.html">{{$article->title}}</a></h6>
                                    <span>شنبه، 20 اردیبهشت 1398 </span>
                                </div>
                            </li>
                            @endforeach


                          
                        </ul>
                    </div>
                    <!--// Single Widget (Widget Blog) -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Newsletter) -->
                    <div class="single-widget widget-newsletter">
                        <h5 class="widget-title">خبرنامه</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                        <form id="tm-mailchimp-form" class="widget-newsletter-form">
                            <input id="mc-email" type="text" placeholder="ایمیل خود را وارد نمایید ...">
                            <button id="mc-submit" type="submit" class="tm-button">اشتراک <b></b></button>
                        </form>
                        <!-- Mailchimp Alerts -->
                        <div class="tm-mailchimp-alerts">
                            <div class="tm-mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="tm-mailchimp-error"></div>
                        </div>
                        <!--// Mailchimp Alerts -->
                    </div>
                    <!--// Single Widget (Widget Newsletter) -->
                </div>

            </div>
        </div>
    </div>
    <!--// Footer Widgets -->

    <!-- Footer -->
    <div class="footer-bottomarea">
        <div class="container">
            <p class="footer-copyright">طراحی شده توسط <a href="{{route("front.website")}}">{{$setting->brand}} </a></p>
        </div>
    </div>
    <!--// Footer -->

</footer>
<!--// Footer Area -->

<!-- Product Quickview -->
<div class="tm-product-quickview modal fade" id="tm-product-quickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="tm-prodetails">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">

                            <!-- Product Details Images -->
                            <div class="tm-prodetails-images">
                                <div class="tm-prodetails-largeimage">
                                    <img src="/public/template/company/img/prdoduct-details-image-1.jpeg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-1-lg.jpg" alt="product image">
                                </div>
                                <div id="image-gallery" class="tm-prodetails-thumbs">
                                    <a class="active" href="#" data-image="/template/company/img/prdoduct-details-image-1.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-1-lg.jpg">
                                        <img src="/public/template/company/img/product-image-1.jpeg" alt="">
                                    </a>
                                    <a href="#" data-image="/template/company/img/prdoduct-details-image-2.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-2-lg.jpg">
                                        <img src="/public/template/company/img/product-image-3.jpeg" alt="">
                                    </a>
                                    <a href="#" data-image="/template/company/img/prdoduct-details-image-3.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-3-lg.jpg">
                                        <img src="/public/template/company/img/product-image-4.jpeg" alt="">
                                    </a>
                                    <a href="#" data-image="/template/company/img/prdoduct-details-image-4.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-4-lg.jpg">
                                        <img src="/public/template/company/img/product-image-5.jpeg" alt="">
                                    </a>
                                    <a href="#" data-image="/template/company/img/prdoduct-details-image-5.jpg" data-zoom-image="assets/images/product/product-details/prdoduct-details-image-5-lg.jpg">
                                        <img src="/public/template/company/img/product-image-6.jpeg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!--// Product Details Images -->

                        </div>

                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="tm-prodetails-content">
                                <h3 class="tm-prodetails-title">ساعت هوشمند</h3>
                                <div class="tm-rating">
                                    <span class="active"><i class="fas fa-star"></i></span>
                                    <span class="active"><i class="fas fa-star"></i></span>
                                    <span class="active"><i class="fas fa-star"></i></span>
                                    <span class="active"><i class="fas fa-star"></i></span>
                                    <span class="active"><i class="fas fa-star"></i></span>
                                </div>
                                <p class="tm-prodetails-availability">وضعیت : <span>موجود</span></p>
                                <div class="tm-prodetails-price">
                                    <span><del>60000 تومان</del> 20000 تومان</span>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                                <div class="tm-prodetails-quantitycart">
                                    <div class="tm-quantitybox">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="tm-button">افزودن به سبد خرید<b></b></a>
                                </div>

                                <div class="tm-prodetails-categories">
                                    <h6>دسته بندی :</h6>
                                    <ul>
                                        <li><a href="shop.html">محصولات</a></li>
                                        <li><a href="shop.html">ساعت</a></li>
                                        <li><a href="shop.html">سفید</a></li>
                                    </ul>
                                </div>

                                <div class="tm-prodetails-tags">
                                    <h6>برچسب ها :</h6>
                                    <ul>
                                        <li><a href="shop.html">الکتریکی</a></li>
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
            </div>
        </div>
    </div>
</div>
<!--// Product Quickview -->

</div>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
<script src="assets/js/google-map.js"></script>

<!-- Js Files -->

{!! Html::script('/public/template/company/js/modernizr-3.6.0.min.js') !!}
{!! Html::script('/public/template/company/js/jquery.min.js') !!}
{!! Html::script('/public/template/company/js/popper.min.js') !!}
{!! Html::script('/public/template/company/js/bootstrap.min.js') !!}
{!! Html::script('/public/template/company/js/plugins.js') !!}
{!! Html::script('/public/template/company/js/main.js') !!}
{!! Html::script('/public/template/company/js/chart.min.js') !!}
{!! Html::script('/public/template/company/js/chart-active.js') !!}
{!! Html::script('/public/template/company/js/particles.min.js') !!}
{!! Html::script('/public/template/company/js/video-background.js') !!}
{!! Html::script('/public/template/company/js/ajaxmail.js') !!}
{!! Html::script('/public/template/company/js/map.js') !!}


@yield('script')

<!--// Js Files -->
</body>
</html>