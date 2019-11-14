@extends("template.company.app")





@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>تماس با ما</h2>
                        <ul>
                            <li><a href="{{route("front.website")}}">صفحه اصلی</a></li>
                            <li>تماس با ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Contact Us -->
        <div class="tm-section contact-us-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center mt-30-reverse">

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-placeholder"></i>
                                </span>
                            <h5>آدرس</h5>
                            <p>قزوین - خیابان شهید بابایی - مدنی شرقی - بلوار ثالث - ساختمان نگین - طبقه ۲ - واحد ۲</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-call"></i>
                                </span>
                            <h5>تلفن</h5>
                            <p ><a href="tel:0283336299">028-3336299</a></p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-email-1"></i>
                                </span>
                            <h5>آدرس الکترونیکی</h5>
                            <p>ایمیل : <a href="mailto:‪Tavantajhiz97@gmail.com‬">‫‪Tavantajhiz97@gmail.com‬‬</a></p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="container tm-padding-section-top">
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="tm-contact-formwrapper">
                            <h5>با ما در تماس باشید </h5>
                            <form action="/template/company/img/mailer.php" id="tm-contactform" class="tm-contact-form">
                                <div class="tm-contact-formfield">
                                    <input type="text" name="name" placeholder="نام*">
                                </div>
                                <div class="tm-contact-formfield">
                                    <input type="email" name="email" placeholder="ایمیل*">
                                </div>
                                <div class="tm-contact-formfield">
                                    <input type="text" name="subject" placeholder="موضوع*">
                                </div>
                                <div class="tm-contact-formfield">
                                    <textarea name="message" cols="30" rows="5" placeholder="متن پیام*"></textarea>
                                </div>
                                <div class="tm-contact-formfield">
                                    <button type="submit" class="tm-button">ارسال پیام <b></b></button>
                                </div>
                            </form>
                            <p class="form-messages">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tm-contact-map">
                            <div id="google-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Contact Us -->

    </main>
    <!--// Main Content -->


@endsection