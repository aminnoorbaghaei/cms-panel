


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

            <!-- Login Register Area -->
            <div class="tm-section tm-login-register-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6">
                            <form action="#" class="tm-form tm-login-form tm-form-bordered">
                                <h4>ورود</h4>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <label for="login-email">آدرس ایمیل یا یوزرنیم*</label>
                                        <input type="email" id="login-email" required="required">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="login-password">رمز عبور*</label>
                                        <input type="password" id="login-password" required="required">
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="checkbox" name="login-remember" id="login-remember">
                                        <label for="login-remember">ذخیره کردن</label>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">ورود <b></b></button>
                                    </div>
                                    <div class="tm-form-field">
                                        <a href="#">فراموشی رمز عبور</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <form action="#" class="tm-form tm-register-form tm-form-bordered">
                                <h4>عضویت</h4>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <label for="register-username">یوزرنیم</label>
                                        <input type="text" id="register-username" required="required">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="register-email">آدرس ایمیل</label>
                                        <input type="email" id="register-email" required="required">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="register-password">رمز عبور</label>
                                        <input type="password" id="register-password" required="required">
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="checkbox" id="register-terms">
                                        <label for="register-terms">تایید قوانین و مقررات</label>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">عضویت <b></b></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Login Register Area -->

        </main>
        <!--// Main Content -->



    </main>
    <!--// Main Content -->

@endsection

