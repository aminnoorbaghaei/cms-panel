@extends("template.company.app")


@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>نمونه کارها</h2>
                        <ul>
                            <li><a href="{{route("front.website")}}">صفحه اصلی</a></li>
                            <li>نمونه کارها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Portfolio Area -->
        <div class="tm-section portfolio-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tm-portfolio-buttons text-center">
                            <button data-filter="*" class="is-active">همه</button>
                            <button data-filter=".portfolio-business">شرکتی</button>
                            <button data-filter=".portfolio-financial">مالی</button>
                            <button data-filter=".portfolio-investment">سرمایه گذاری</button>
                            <button data-filter=".portfolio-careative">خلاقانه</button>
                            <button data-filter=".portfolio-technology">تکنولوژی</button>
                        </div>
                    </div>
                </div>
                <div class="row tm-portfolio-wrapper">

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-careative">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-2.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/pic-1.png"><i class="fas fa-search-plus"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial portfolio-careative">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-2.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details-gallery.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/portfolio-image-lg-2.jpeg"><i class="far fa-images"></i></a>
                                        <a href="/template/company/img/portfolio-image-lg-3.jpeg"><i class="far fa-images"></i></a>
                                        <a href="/template/company/img/portfolio-image-lg-4.jpeg"><i class="far fa-images"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-2.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/pic-2.png"><i class="fas fa-search-plus"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-investment portfolio-careative">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/pic-2.png"><i class="fas fa-search-plus"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial portfolio-investment">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/pic-2.png"><i class="fas fa-search-plus"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                    <!-- Portfolio Single -->
                    <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-investment">
                        <div class="tm-portfolio mt-30">
                            <div class="tm-portfolio-image">
                                <img src="/public/template/company/img/pic-1.png" alt="portfolio image">
                            </div>
                            <div class="tm-portfolio-content">
                                <ul class="tm-portfolio-actions">
                                    <li class="link-button">
                                        <a href="portfolio-details-gallery.html"><i class="fas fa-link"></i></a>
                                    </li>
                                    <li class="zoom-button">
                                        <a href="/template/company/img/portfolio-image-lg-9.jpeg"><i class="far fa-images"></i></a>
                                        <a href="/template/company/img/portfolio-image-lg-8.jpeg"><i class="far fa-images"></i></a>
                                        <a href="/template/company/img/portfolio-image-lg-7.jpeg"><i class="far fa-images"></i></a>
                                    </li>
                                </ul>
                                <h5><a href="portfolio-details.html">عنوان</a></h5>
                                <h6><a href="portfolio.html">مالی</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--// Portfolio Single -->

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tm-portfolio-loadmore text-center mt-50">
                            <a href="#" class="tm-button tm-button-dark">بیشتر<b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Portfolio Area -->

    </main>
    <!--// Main Content -->


@endsection