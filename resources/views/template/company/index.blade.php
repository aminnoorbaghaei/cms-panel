@extends("template.company.app")


@section("content")

    <!-- Heroslider Area -->
    <div class="heroslider-area">

        <!-- Heroslider Slider -->
        <div class="heroslider-slider tm-slider-dots tm-slider-dots-left">
            @foreach($sliders as $slider)
                <div class="heroslider-singleslider" data-bgimage="{{url("public".$slider->getFirstMediaUrl('images'))}}"></div>
            @endforeach
        </div>
        <!--// Heroslider Slider -->

        <!-- Heroslider Content -->
        <div class="heroslider-contentwrapper">
            <div class="heroslider-overlay2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8">
                        <div class="heroslider-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.5s">برترین خدمات را با توان تجهیز کاسپین</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.7s">دارای نمونه پروژه های بزرگ</p>
                            <a href="{{route("front.website.about")}}" class="tm-button wow fadeInUp" data-wow-delay="0.9s">درباره ما<b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Heroslider Content -->

    </div>
    <!--// Heroslider Area -->

    <!-- Main Content -->
    <main class="main-content">



        <!-- About Us -->
        <div class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-content">
                            <h2>به شرکت ما خوش آمدید</h2>
                            <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h6>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و</p>
                            <ul class="stylish-list">
                                <li><i class="far fa-check-square"></i>ما خدمات مختلفی را ارائه می کنیم .</li>
                                <li><i class="far fa-check-square"></i>ما یکی از شرکت های پیشرو هستیم .</li>
                                <li><i class="far fa-check-square"></i>سودآوری هدف اصلی تمام کسب . کار ها است .</li>
                                <li><i class="far fa-check-square"></i>یاد بگیرید چگونه کسب و کار خود را رشد دهید .</li>
                                <li><i class="far fa-check-square"></i>راه حل های حرفه ای برای کسب و کار شما .</li>
                            </ul>
                            <a href="{{route("front.website.about")}}" class="tm-button">درباره ما<b></b></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-image">
                            <img src="/public/template/company/img/faq-image.png" alt="about image">
                            <div class="tm-videobutton">
                                <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                    <span><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// About Us -->

        <!-- Funfact Area -->
        <div class="tm-section funfact-area tm-padding-section" data-bgimage="/template/company/img/funfact-bg.jpg"
             data-black-overlay="8">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-12">
                        <div class="funfact-headline">
                            <h4>دارای </h4>
                            <h2> بیش از <span>5 سال </span> سابقه</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-12">
                        <div class="row no-gutters mt-30-reverse funfact-wrapper">

                            <!-- Funfact Single -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                                <div class="tm-funfact">
                                        <span class="tm-funfact-icon">
                                            <i class="flaticon-check-mark"></i>
                                        </span>
                                    <div class="tm-funfact-content">
                                        <span class="odometer" data-count-to="0015"></span>
                                        <h5>پروژه</h5>
                                    </div>
                                </div>
                            </div>
                            <!--// Funfact Single -->

                            <!-- Funfact Single -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                                <div class="tm-funfact">
                                        <span class="tm-funfact-icon">
                                            <i class="flaticon-smile"></i>
                                        </span>
                                    <div class="tm-funfact-content">
                                        <span class="odometer" data-count-to="023"></span>
                                        <h5>مشتری</h5>
                                    </div>
                                </div>
                            </div>
                            <!--// Funfact Single -->

                            <!-- Funfact Single -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                                <div class="tm-funfact">
                                        <span class="tm-funfact-icon">
                                            <i class="flaticon-trophy"></i>
                                        </span>
                                    <div class="tm-funfact-content">
                                        <span class="odometer" data-count-to="05"></span>
                                        <h5>دستاورد</h5>
                                    </div>
                                </div>
                            </div>
                            <!--// Funfact Single -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--// Funfact Area -->

        <!-- Services Area -->
        <div class="tm-section services-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>خدمات ما</h2>

                        </div>
                    </div>
                </div>
                <div class="row services-wrap-2">

                @foreach($services as $service)
                    <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">

                            <div class="tm-service2 text-center">
                                <span class="tm-service2-icon">
                                    <i class="{{$service->icon}}"></i>
                                </span>
                                <h5><a href="service-details.html">{{$service->title}}</a></h5>
                                <p>

                                    {{$service->description}}
                                </p>
                            </div>

                        </div>
                        <!--// Single Service -->

                    @endforeach



                </div>
            </div>
        </div>
        <!--// Services Area -->

        <!-- Testimonial Area -->
        <div class="tm-section testimonial-area bg-grey">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="tm-testimonial2-videoslider">

                            <div class="tm-testimonial2-video">
                                <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.31 PM.jpeg"
                                     alt="testimonial author image">
                                <div class="tm-videobutton">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="tm-testimonial2-video">
                                <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.14 PM.jpeg"
                                     alt="testimonial author image">
                                <div class="tm-videobutton">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="tm-testimonial2-video">
                                <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.31 PM.jpeg"
                                     alt="testimonial author image">
                                <div class="tm-videobutton">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="tm-testimonial2-contentslider tm-slider-dots">

                            <div class="tm-testimonial2-content">
                                <p>مهندس مکانیک با بیش از ۱۲ سال سابقه سرپرستی مدیریتی و اجرایی و متخصص در زمینه تاسیسات</p>
                                <div class="tm-testimonial2-author">
                                    <div class="tm-testimonial2-authorimage">
                                        <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.31 PM.jpeg" alt="author image">
                                    </div>
                                    <h5>حامد نوربقایی</h5>
                                    <p>مدیر عامل</p>
                                </div>
                                <i class="fas fa-quote-left"></i>
                            </div>

                            <div class="tm-testimonial2-content">
                                <p>مهندس برق با بیش از ۱۵ سال سابقه سرپرستی مدیریتی و اجرایی و متخصص در زمینه برق و الکترونیک</p>
                                <div class="tm-testimonial2-author">
                                    <div class="tm-testimonial2-authorimage">
                                        <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.14 PM.jpeg" alt="author image">
                                    </div>
                                    <h5>محمد غفوری</h5>
                                    <p>ریٔیس هیٔت مدیره</p>
                                </div>
                                <i class="fas fa-quote-left"></i>
                            </div>

                            <div class="tm-testimonial2-content">
                                <p>مهندس کامپیوتر با بیش از ۷ سال سابقه برنامه نویسی و امنیت وب سایت</p>
                                <div class="tm-testimonial2-author">
                                    <div class="tm-testimonial2-authorimage">
                                        <img src="/public/template/company/img/WhatsApp Image 2019-09-16 at 12.21.31 PM.jpeg" alt="author image">
                                    </div>
                                    <h5>امین نوربقایی</h5>
                                    <p>برنامه نویس</p>
                                </div>
                                <i class="fas fa-quote-left"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Testimonial Area -->

        <!-- Pupular Products -->
        <div class="tm-section product-section tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="tm-section-title text-center">
                            <h2>آخرین محصولات ما</h2>
                            <p>برترین محصولات در توان تجهیز کاسپین</p>
                        </div>
                    </div>
                </div>

                <!-- Tab Buttons -->
                <ul class="nav tm-tabgroup" id="bstab1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="#bstab1-area1"
                           role="tab" aria-controls="bstab1-area1" aria-selected="true">جدیدترین ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="#bstab1-area2" role="tab"
                           aria-controls="bstab1-area2" aria-selected="false">پرفروش ترین ها</a>
                    </li>
                </ul>
                <!--// Tab Buttons -->

                <!-- Tab Content -->
                <div class="tab-content" id="bstab1-ontent">
                    <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel"
                         aria-labelledby="bstab1-area1-tab">

                        <div class="product-vertical-slider-active tm-slider-dots tm-slider-dots-vertical">



                            <div class="product-vertical-slider-row">
                                <div class="row mt-30-reverse">

                                @foreach($populars as $item)

                                    <!-- Single Product -->
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                            <div class="tm-product">
                                                <div class="tm-product-image">
                                                    <a class="tm-product-imagelink" href="product.blade.php">
                                                        <img src="{{ url("public".$item->getFirstMediaUrl('images'))}}" target="{{$item->target}}" href="{{route("front.single.product",['lang'=>get_segment(1),$item->id] )}}"
                                                             alt="product image">
                                                    </a>
                                                    <ul class="tm-product-actions">
                                                        <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                                        </li>
                                                        <li>
                                                            <button type="button" data-toggle="modal"
                                                                    data-target="#tm-product-quickview"><i
                                                                        class="far fa-eye"></i></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tm-product-content">
                                                    <h5 class="tm-product-title"><a target="{{$item->target}}" href="{{route("front.single.product",['lang'=>get_segment(1),$item->id] )}}">{{$item->title}}</a></h5>
                                                    <div class="tm-product-rating">
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                        <span class="active"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h6 class="tm-product-price">100000 تومان</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--// Single Product -->
                                    @endforeach


                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">
                    <div class="product-vertical-slider-active tm-slider-dots tm-slider-dots-vertical">



    <div class="product-vertical-slider-row">
    <div class="row mt-30-reverse">

    @foreach($lastProducts as $item)

        <!-- Single Product -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                <div class="tm-product">
                    <div class="tm-product-image">
                        <a class="tm-product-imagelink" target="{{$item->target}}" href="{{route("front.single.product",['lang'=>get_segment(1),$item->id] )}}">
                            <img src="{{ url("public".$item->getFirstMediaUrl('images'))}}"
                                 alt="product image">
                        </a>
                        <ul class="tm-product-actions">
                            <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li>
                                <button type="button" data-toggle="modal"
                                        data-target="#tm-product-quickview"><i
                                            class="far fa-eye"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-product-content">
                        <h5 class="tm-product-title"><a target="{{$item->target}}" href="{{route("front.single.product",['lang'=>get_segment(1),$item->id] )}}">{{$item->title}}</a></h5>
                        <div class="tm-product-rating">
                            <span class="active"><i class="fas fa-star"></i></span>
                            <span class="active"><i class="fas fa-star"></i></span>
                            <span class="active"><i class="fas fa-star"></i></span>
                            <span class="active"><i class="fas fa-star"></i></span>
                            <span class="active"><i class="fas fa-star"></i></span>
                        </div>
                        <h6 class="tm-product-price">{{$item->price}} تومان</h6>
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
                <!--// Tab Content -->

            </div>
        </div>
        <!--// Pupular Products -->



        <!-- Promo Offer Area -->
        <div class="tm-section promo-area bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 align-self-end">
                        <div class="tm-promo-image-2">
                            <img class="wow fadeInRight" src="/public/template/company/img/pic-10.png" alt="promo image">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="tm-promo-content tm-padding-section">
                            <h2><span class="color-theme">50٪</span> تخفیف </h2>
                            <p>تخفیف ویژه و فوری محصولات</p>
                            <div class="tm-countdown" data-countdown="2020/08/12"></div>
                            <a href="shop.html" class="tm-button">هم اکنون خرید کنید <b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Promo Offer Area -->

        <!-- Latest Blog Area -->
        <div class="tm-section latest-blog-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="tm-section-title text-center">
                            <h2>آخرین مقالات</h2>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active">

            @foreach($lastArticles as $article)
                <!-- Single Blog -->
                    <div class="col">
                        <div class="tm-blog">
                            <div class="tm-blog-image">
                                <img src="{{ url("public".$article->getFirstMediaUrl('images'))}}" alt="blog image">
                            </div>
                            <div class="tm-blog-content">
                                <h4><a href="{{route("front.single.article",['lang'=>get_segment(1),$article->id])}}">{{$article->title}}</a></h4>
                                <div class="tm-blog-meta">
                                    <span>شنبه، 12 مهر 1397</span>
                                </div>

                                <p>
                                    {{$article->body}}
                                </p>
                                <div class="tm-blog-contentbottom">
                                    <a href="{{route("front.single.article",['lang'=>get_segment(1),$article->id])}}" class="tm-readmore">ادامه مطلب <i
                                                class="fas fa-chevron-left"></i></a>
                                    <a href="blog-details.html">2 نظر</a>
                                </div>
                            </div>
                            <div class="tm-blog-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// Single Blog -->
                @endforeach


            </div>
        </div>
        <!--// Latest Blog Area -->

        <!-- Faq Area -->
        <div class="tm-section faq-area bg-grey tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>سوالات متداول</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tm-faq-image">
                            <img class="wow fadeInRight" src="/public/template/company/img/faq-image.png" alt="faq image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tm-faq-content">

                            <!-- Accordion -->
                            <div id="tm-accordion" class="tm-accordion">

                                @foreach($questions as $question)

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$question->id}}" aria-expanded="true" aria-controls="collapse{{$question->id}}">
                                                    {{$question->ask}}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse{{$question->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#tm-accordion">
                                            <div class="card-body">
                                                <p>

                                                    {{$question->answer}}
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                            <!--// Accordion -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Faq Area -->

        <!-- Brand Logos Area -->
        <br>
        <br>
        <div class="tm-section brand-logos-area tm-padding-section-bottom bg-white">
            <div class="container">
                <div class="brandlogo-slider">


                    @foreach($customers as $customer)

                        <div class="brandlogo">

                            <a href="https://google.com" target="{{$customer->target}}">
                                <img  src="{{url("public".$customer->getFirstMediaUrl('images'))}}" alt="brand-logo">
                            </a>


                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!--// Brand Logos Area -->

    </main>
    <!--// Main Content -->


@endsection