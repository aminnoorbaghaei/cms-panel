@if($position=="rtl")
    @include("admin.rtl.section.header",['code'=>$code,'position'=>$position])
@elseif($position=="ltr")
    @include("admin.ltr.section.header",['code'=>$code,'position'=>$position])
@endif

<body>

<div class="preloader" style="display: none;">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full" class="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin1">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="/public/admin/img/general/logo-icon.png" alt="homepage" class="dark-logo">
                        <!-- Light Logo icon -->
                        <img src="/public/admin/img/general/logo-icon.png" alt="homepage" class="light-logo">
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="/public/admin/img/general/logo-icon.png" alt="homepage" class="dark-logo">
                        <!-- Light Logo text -->
                             <img src="/public/admin/img/general/logo-icon.png" class="light-logo" alt="homepage">
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-18"></i></a></li>
                    <!-- Website -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a target="_blank" class="nav-link dropdown-toggle waves-effect waves-dark" href="{{route('front.website')}}" > <i class="font-18 mdi mdi-eye-outline"></i>

                        </a>

                    </li>
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-18 mdi mdi-gmail"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title border-bottom">{{$trans['MessagesList']}}</div>
                                </li>
                                <li>
                                    <div class="message-center message-body">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img">

                                                  <img width="100px" class="img-responsive " src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" >

                                                <span class="profile-status online pull-right"></span> </span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">علی عزیزی</h5> <span class="mail-desc">جلسه رو دیر نکنید</span> <span class="time">9:30 AM</span> </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="/public/admin/img/general/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">الهام محبی</h5> <span class="mail-desc">پروژه به کجا رسید؟</span> <span class="time">9:10 AM</span> </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="/public/admin/img/general/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">سارا همتی</h5> <span class="mail-desc">ممنونم</span> <span class="time">9:08 AM</span> </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img"> <img src="/public/admin/img/general/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">مهشید نصیری</h5> <span class="mail-desc">بله حتما</span> <span class="time">9:02 AM</span> </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <i class="fa fa-angle-left"></i> <b>{{$trans['ShowMore']}}</b> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->

                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-check-circle font-18"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title border-bottom">{{$trans['TasksList']}}</div>
                                </li>
                                <li>
                                    <div class="message-center notifications">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">مدیریت کاربران</h5> <span class="mail-desc">بررسی خطا در ثبت کاربر</span> <span class="time">9:30 AM</span> </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">مدیریت ایمیل</h5> <span class="mail-desc">ارسال نشدن ایمیل</span> <span class="time">9:10 AM</span> </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                            <span class="mail-contnet">
                                                    <h5 class="message-title">تنظیمات</h5> <span class="mail-desc">خطا در تغییر لولگو وب سایت</span> <span class="time">9:08 AM</span> </span>
                                        </a>

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);">  <i class="fa fa-angle-left"></i> <strong>{{$trans['ShowMore']}} </strong></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block"> <i class="icon-options-vertical"></i>{{$trans['Setting']}}</span>
                            <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                        </a>
                        <div class="dropdown-menu animated bounceInDown">
                            <div class="mega-dropdown-menu row">
                                <div class="col-lg-3 col-xlg-2 mb-4">
                                    <h5 class="mb-3">{{$trans['MyPartners']}}</h5>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container p-0"><a href="https://digikala.com" target="_blank"><img class="d-block img-fluid img-responsive" src="/public/admin/img/general/eligasht.jpeg" alt="First slide"></a> </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><a href="https://digikala.com" target="_blank"><img class="d-block img-fluid img-responsive" src="/public/admin/img/general/alibab.png" alt="Second slide"></a></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container p-0"><a href="https://digikala.com" target="_blank"><img class="d-block img-fluid img-responsive" src="/public/admin/img/general/digikal.png" alt="Third slide"> </a></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <h5 class="mb-3">معرفی پنل</h5>
                                    <!-- Accordian -->
                                    <div id="accordion" class="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        پنل عمومی
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    امکانات این پنل کاملا اختصاصی بوده
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        پنل ویژه
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    امکانات این پنل کاملا اختصاصی بوده

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        پنل سفارشی
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">

                                                    امکانات این پنل کاملا اختصاصی بوده
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3  mb-4">
                                    <h5 class="mb-3">{{$trans['ContactUs']}}</h5>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="{{$trans['Subject']}}"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="{{$trans['Message']}}"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">{{$trans['Send']}}</button>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-xlg-4 mb-4">
                                    <h5 class="mb-3">خدمات پنل ویژه</h5>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> responsive</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> قابل بروز رسانی</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> قابلیت به اشتراک گ‌اری</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> دارای پنل پشتیبانی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            @if(!$current_user->hasMedia('images'))

                                <img src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" alt="user" class="rounded-circle" width="31">
                            @else
                                <img src="{{ url("public".$current_user->getFirstMediaUrl('images'))}}" alt="user" class="rounded-circle" width="31">

                            @endif
                            <span class="ml-2 user-text font-medium">{{$current_user->full_name}} </span><span class="fas fa-angle-down ml-2 user-text"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                <div class="">

                                    @if(!$current_user->hasMedia('images'))

                                        <img src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" alt="user" class="rounded" width="80">
                                    @else
                                        <img src="{{ url("public".$current_user->getFirstMediaUrl('images'))}}" alt="user" class="rounded" width="80">

                                    @endif

                                </div>
                                <div class="ml-2">

                                    <h4 class="mb-0">{{$current_user->full_name}}</h4>
                                    <p class=" mb-0 text-muted">{{$current_user->email}}</p>
                                    <div>
                                        <span>
                                            {{$current_user->roles()->first()->label }}
                                        </span>
                                    </div>
                                    <span class="{{FindFlag($current_user->id)}}"></span>
                                    <a href="{{route('panel.website.profile')}}" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">{{$trans['ShowProfile']}}</a>
                                </div>
                            </div>


                            <a class="dropdown-item" href="{{route('panel.website.contact')}}"><i class="mdi mdi-account"></i> {{$trans['Contact']}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('panel.website.personal')}}"><i class="mdi mdi-account-multiple"></i> {{$trans['Partner']}}</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{route("logout")}}" method="post">
                                {{csrf_field()}}

                                <button class="dropdown-item" type="submit" >
                                    <i class="fa fa-power-off mr-1 ml-1"></i> {{$trans['LogOut']}}
                                </button>

                            </form>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include("admin.section.nav")
<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="display: block;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row">

                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                        <ol class="breadcrumb mb-0 justify-content-end p-0 bg-white">
                            <li class="breadcrumb-item"><a href="{{route("panel.website")}}">{{$trans['Home']}}</a></li>
                            @yield("breadcrumb")
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="page-content container-fluid">
            @yield("content")
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            {{$trans['DesignerDeveloper']}}
            <a href="#">{{$trans['AminNourbaghaei']}}</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>


<div class="chat-windows"></div>

@if($position=="rtl")
    @include("admin.rtl.section.footer")
@elseif($position=="ltr")
    @include("admin.ltr.section.footer")
@endif

