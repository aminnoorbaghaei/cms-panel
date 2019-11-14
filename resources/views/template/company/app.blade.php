@include("template.company.section.header")
<body>

<div class="tm-preloader">
    <span class="tm-preloader-box"></span>
    <button class="tm-button tm-button-sm tm-button-white">
        <small>لغو</small>
        <b></b></button>
</div>

<div id="wrapper" class="wrapper">

    <!-- Header Area -->
    <div class="header">

        <!-- Header Top Area -->
        <div class="header-toparea">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-12">
                        <div class="header-topinfo">
                            <ul>


                                <li><a href="tel:{{$setting->phone}}">
                                        {{$setting->phone}}<i class="flaticon-phone-call"></i></a></li>
                                <li><a href="mailto:‪{{$setting->email}}‬">
                                        ‫‪{{$setting->email}}<i class="flaticon-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4 col-12">

                        <div class="header-topsocial">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                               <li>
                                   <a href="{{route('register-user-account')}}">
                                       <button type="button" class="btn waves-effect waves-light btn-rounded tm-button">ورود / عضویت</button>

                                   </a>
                               </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header-bottomarea">


            <div class="container">
                <div class="header-bottominner">
                    <div class="header-logo">
                        <a href="{{route("front.website")}}">
                            <img width="80px" src="/public/template/company/img/pic-6.png" alt="logo">
                        </a>
                    </div>
                   @include("template.company.section.nav")





                    <div class="header-icons">
                        <ul>
                            <li><a href="#" class="header-searchtrigger"><i class="flaticon-magnifier"></i></a></li>
                            <li><a href="cart.html"><i class="flaticon-cart-of-ecommerce"></i></a></li>
                        </ul>
                    </div>
                    <div class="header-searchbox">
                        <div class="header-searchinner">
                            <form action="#" class="header-searchform">
                                <input type="text" placeholder="جستجو در سایت ..">
                            </form>
                            <button class="search-close"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="header-mobilemenu clearfix">
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>
        <!--// Header Bottom Area -->

    </div>
    <!--// Header Area -->

  @yield("content");


@include("template.company.section.footer")