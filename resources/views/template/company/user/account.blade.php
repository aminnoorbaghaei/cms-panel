

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

            <!-- My Account Area -->
            <div class="tm-section tm-my-account-area bg-white tm-padding-section">
                <div class="container">
                    <div class="tm-myaccount">
                        <ul class="nav tm-tabgroup justify-content-start justify-content-lg-center" id="account" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">داشبورد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-orders-tab" data-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">سفارشات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-address-tab" data-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">آدرس ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-acdetails-tab" data-toggle="tab" href="#account-acdetails" role="tab" aria-controls="account-acdetails" aria-selected="false">جزئیات حساب کاربری</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-logout-tab" href="login-register.blade.php" role="tab" aria-controls="account-address" aria-selected="false">خروج</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="account-ontent">
                            <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                <div class="tm-myaccount-dashboard">
                                    <p>سلام <b>رضا رحیمی</p>
                                    <p>شما از این قسمت میتوانید سفارشات و آدرس ها و جزئیات حساب کاربری خود را مشاهده نمایید .</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                <div class="tm-myaccount-orders">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th class="tm-myaccount-orders-col-id">شماره سفارش</th>
                                                <th class="tm-myaccount-orders-col-date">تاریخ</th>
                                                <th class="tm-myaccount-orders-col-status">وضعیت</th>
                                                <th class="tm-myaccount-orders-col-total">مجموع</th>
                                                <th class="tm-myaccount-orders-col-view">نمایش</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#12345</td>
                                                <td>30 مرداد 1397</td>
                                                <td>انجام شده</td>
                                                <td>50000 تومان</td>
                                                <td><a href="#" class="tm-button tm-button-sm">نمایش <b></b></a></td>
                                            </tr>
                                            <tr>
                                                <td>#12345</td>
                                                <td>26 مرداد 1397</td>
                                                <td>انجام شده</td>
                                                <td>10000 تومان</td>
                                                <td><a href="#" class="tm-button tm-button-sm">نمایش <b></b></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                                <div class="tm-myaccount-address">
                                    <p><b>آدرس های وارد شده به صورت خودکار پر سایت ثبت خواهند شد.</b></p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="tm-myaccount-address-billing">
                                                <a href="#" class="edit-button">ویرایش</a>
                                                <h3> مشخصات پرداخت</h3>
                                                <address>
                                                    رضا جوادی<br>
                                                    نام شرکت<br>
                                                    تهران <br>
                                                    خیابان جمهوری <br>
                                                    خیابان 3
                                                </address>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-30 mt-md-0">
                                            <div class="tm-myaccount-address-shipping">
                                                <a href="#" class="edit-button">ویرایش</a>
                                                <h3>آدرس ارسال</h3>
                                                <address>
                                                    رضا جوادی<br>
                                                    نام شرکت<br>
                                                    تهران <br>
                                                    خیابان جمهوری <br>
                                                    خیابان 3
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-acdetails" role="tabpanel" aria-labelledby="account-acdetails-tab">
                                <div class="tm-myaccount-acdetails">
                                    <form action="#" class="tm-form tm-form-bordered">
                                        <h4>جزئیات حساب کاربری</h4>
                                        <div class="tm-form-inner">
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="acdetails-firstname">نام</label>
                                                <input type="text" id="acdetails-firstname">
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="acdetails-lastname">نام خانوادگی</label>
                                                <input type="text" id="acdetails-lastname">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="acdetails-displayname">نام قابل نمایش</label>
                                                <input type="text" id="acdetails-displayname">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="acdetails-email">آدرس ایمیل</label>
                                                <input type="email" id="acdetails-email">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="acdetails-password">رمز عبور قدیمی</label>
                                                <input type="password" id="acdetails-password">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="acdetails-newpassword">رمز عبور جدید</label>
                                                <input type="password" id="acdetails-newpassword">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="acdetails-confirmpass">تکرار رمز عبور جدید</label>
                                                <input type="password" id="acdetails-confirmpass">
                                            </div>
                                            <div class="tm-form-field">
                                                <input type="checkbox" name="acdetails-agreeterms" id="acdetails-agreeterms">
                                                <label for="acdetails-agreeterms">تایید قوانین و مقررات</label>
                                            </div>
                                            <div class="tm-form-field">
                                                <button type="submit" class="tm-button">ذخیره تغییرات <b></b></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// My Account Area -->

        </main>
        <!--// Main Content -->


    </main>
    <!--// Main Content -->

@endsection

