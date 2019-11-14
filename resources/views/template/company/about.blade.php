@extends("template.company.app")



@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>درباره ما</h2>
                        <ul>
                            <li><a href="{{route("front.website")}}">صفحه اصلی</a></li>
                            <li>درباره ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- About Us Area -->
        <div class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image2">
                            <img class="wow fadeInRight" src="/public/template/company/img/pic-1.png" alt="about image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>به شرکت ما خوش آمدید</h2>
                            <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </h6>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و</p>
                            <ul class="stylish-list">
                                <li><i class="far fa-check-square"></i>ما خدمات مختلفی را ارائه می کنیم .</li>
                                <li><i class="far fa-check-square"></i>ما یکی از شرکت های پیشرو هستیم .</li>
                                <li><i class="far fa-check-square"></i>سودآوری هدف اصلی تمام کسب . کار ها است .</li>
                                <li><i class="far fa-check-square"></i>یاد بگیرید چگونه کسب و کار خود را رشد دهید .</li>
                            </ul>
                            <a href="about-us.html" class="tm-button">درباره ما <b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// About Us Area -->


        <!-- Why Choose Area -->
        <div class="tm-section whychoose-area tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="whychoose-content">
                            <h2>به شرکت ما خوش آمدید</h2>
                            <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </h6>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و</p>
                            <div class="whychoose-block">
                                    <span class="whychoose-icon">
                                        <i class="flaticon-chart"></i>
                                    </span>
                                <h5>ماموریت ما</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. </p>
                            </div>
                            <div class="whychoose-block">
                                    <span class="whychoose-icon">
                                        <i class="flaticon-diagram"></i>
                                    </span>
                                <h5>دیدگاه ما</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="whychoose-chart">
                            <h2>رشد کسب و کار</h2>
                            <canvas id="business-growth" height="185"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Why Choose Area -->

        <!-- Team Member Area -->
        <div class="tm-section team-member-area tm-padding-section-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>همکاران</h2>


                        </div>
                    </div>
                </div>
                <div class="row mt-30-reverse">

                    <!-- Single Team Member -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30 wow fadeInUp">
                        <div class="tm-member">
                            <div class="tm-member-top">
                                <img src="/public/template/company/img/team-image-1.jpeg" alt="team member">
                                <div class="tm-member-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tm-member-bottom">
                                <h5>حامد نوربقایی</h5>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                    <!-- Single Team Member -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30 wow fadeInUp">
                        <div class="tm-member">
                            <div class="tm-member-top">
                                <img src="/public/template/company/img/team-image-2.jpeg" alt="team member">
                                <div class="tm-member-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tm-member-bottom">
                                <h5>محمد غفوریان</h5>
                                <p>ریٔس هیٔت مدیره</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                    <!-- Single Team Member -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30 wow fadeInUp">
                        <div class="tm-member">
                            <div class="tm-member-top">
                                <img src="/public/template/company/img/team-image-3.jpeg" alt="team member">
                                <div class="tm-member-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tm-member-bottom">
                                <h5>{{auth()->user()->full_name}} </h5>
                                <p>برنامه نویس</p>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                </div>
            </div>
        </div>
        <!--// Team Member Area -->

    </main>
    <!--// Main Content -->


@endsection