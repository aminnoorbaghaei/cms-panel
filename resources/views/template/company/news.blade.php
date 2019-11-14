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

        <!-- Blog Area -->
        <div class="tm-section blogs-area bg-whtie tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tm-blog-list mt-50-reverse sticky-sidebar">

                        @foreach($news as $new)
                            <!-- Blog Item -->
                                <div class="blogitem mt-50">
                                    <div class="blogitem-image">
                                        <a target="{{$new->target}}" href="{{route("front.single.new",$new->id)}}">
                                            <img src="{{ url("public".$new->getFirstMediaUrl('images'))}}" alt="blog image">
                                        </a>
                                        <span class="blogitem-date">شنبه، 12 مهر 1397</span>
                                    </div>
                                    <div class="blogitem-content">
                                        <div class="blogitem-contentheader">
                                            <div class="blogitem-meta">
                                                <span><i class="far fa-user"></i>توسط : <a href="blog.html">ADMIN</a></span>
                                                <span><i class="far fa-comments"></i><a href="blog-details.html">نظرات
                                                        (3)</a></span>
                                            </div>
                                            <div class="blogitem-share">
                                                <button class="blogitem-share-trigger">
                                                    <i class="fas fa-share-alt"></i>
                                                </button>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h5><a target="{{$new->target}}" href="{{route("front.single.new",$new->id)}}">{{$new->title}}</a></h5>

                                        <p>
                                            {{$new->body}}
                                        </p>

                                        <a target="{{$new->target}}" href="{{route("front.single.new",$new->id)}}" class="tm-button tm-button-dark">ادامه مطلب<b></b></a>
                                    </div>
                                </div>
                                <!--// Blog Item -->
                            @endforeach

                            <div class="tm-pagination mt-50">
                                <ul>
                                    <li class="is-active"><a href="blog.html">1</a></li>
                                    <li><a href="blog.html">2</a></li>
                                    <li><a href="blog.html">3</a></li>
                                    <li><a href="blog.html">ضفحه بعد</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widgets sidebar-widgets2 sticky-sidebar">

                            <!-- Single Widget -->
                            <div class="single-widget widget-search">
                                <h5 class="widget-title">جستجو</h5>
                                <form action="#" class="widget-search-form">
                                    <input type="text" placeholder="جستجو در سایت ...">
                                    <button type="submit"><i class="flaticon-magnifier"></i></button>
                                </form>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-categories">
                                <h5 class="widget-title">دسته بندی :</h5>
                                <ul>
                                    <li><a href="blog.html">اخبار</a></li>
                                    <li><a href="blog.html">رشد شرکت</a></li>
                                    <li><a href="blog.html">استراتژی کسب و کار</a></li>
                                    <li><a href="blog.html">درآمد</a></li>
                                    <li><a href="blog.html">ایده خلاق</a></li>
                                    <li><a href="blog.html">فروش</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-recentpost">
                                <h5 class="widget-title">مطالب اخیر </h5>
                                <ul>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="/public/template/company/img/pic-1.png"
                                                 alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                            <span>شنبه، 15 مهر 1397</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="/public/template/company/img/pic-1.png"
                                                 alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                            <span>شنبه، 15 مهر 1397</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="/public/template/company/img/pic-1.png"
                                                 alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                            <span>شنبه، 15 مهر 1397</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-archives">
                                <h5 class="widget-title">بایگانی</h5>
                                <ul>
                                    <li><a href="blog.html">فرورین 1398</a></li>
                                    <li><a href="blog.html">اردیبهشت 1398</a></li>
                                    <li><a href="blog.html">خرداد 1398</a></li>
                                    <li><a href="blog.html">تیر 1398</a></li>
                                    <li><a href="blog.html">مرداد 1398</a></li>
                                    <li><a href="blog.html">شهریور 1398</a></li>
                                    <li><a href="blog.html">دی 1398</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-tags">
                                <h5 class="widget-title">برچسب ها</h5>
                                <ul>
                                    <li><a href="blog.html">شرکت</a></li>
                                    <li><a href="blog.html">ایده</a></li>
                                    <li><a href="blog.html">خدمات</a></li>
                                    <li><a href="blog.html">مشارکت</a></li>
                                    <li><a href="blog.html">انحصاری</a></li>
                                    <li><a href="blog.html">مشاوره</a></li>
                                    <li><a href="blog.html">ایده</a></li>
                                    <li><a href="blog.html">خلاق</a></li>
                                    <li><a href="blog.html">سرمایه</a></li>
                                    <li><a href="blog.html">شغل</a></li>
                                    <li><a href="blog.html">ایده</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Blog Area -->

    </main>
    <!--// Main Content -->

@endsection