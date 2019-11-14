@include("admin.ltr.section.header")

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
@include("admin.ltr.section.brand-admin")
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">صفحه اصلی</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">کاربران</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">تنظیمات</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" target="_blank" href="{{route("front.website")}}">وب سایت</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>  اعلان ها</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-follow text-success"></i> ثبت نا کاربر</a>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-unfollow text-danger"></i> حذف کاربر</a>

                <a class="dropdown-item" href="#">
                    <i class="icon-basket-loaded text-primary"></i> کاربران جدید</a>

                <div class="dropdown-header text-center">
                    <strong>سرور</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>مصرف cpu</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>مصرف حافظه</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">11444GB/16384MB</small>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="text-uppercase mb-1">
                        <small>
                            <b>مصرف رم</b>
                        </small>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    <small class="text-muted">243GB/256GB</small>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-list"></i>
                <span class="badge badge-pill badge-warning">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>وظیفه ها </strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">به روز رسانی مرورگر
                        <span class="float-right">
<strong>0%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">ورژن React
                        <span class="float-right">
<strong>25%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1"> ورژن VueJS
                        <span class="float-right">
<strong>50%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1">اضافه کردن بخش جدید
                        <span class="float-right">
<strong>75%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="small mb-1"> ورژن Angular 2 Cli
                        <span class="float-right">
<strong>100%</strong>
</span>
                    </div>
                    <span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                </a>
                <a class="dropdown-item text-center" href="#">
                    <strong>نمایش همه وظیفه ها</strong>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown d-md-down-none ">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                <i class="icon-envelope-letter"></i>
                <span class="badge badge-pill badge-info">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg ">
                <div class="dropdown-header text-center">
                    <strong>پیام ها</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">علی عزیزی</small>
                            <small class="text-muted float-right mt-1">الان</small>
                        </div>
                        <div class="text-truncate font-weight-bold">
                            <span class="fa fa-exclamation text-danger"></span> فوری</div>
                        <div class="small text-muted text-truncate">با من تماس بگیر</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="/admin/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">علی عزیزی</small>
                            <small class="text-muted float-right mt-1">الان</small>
                        </div>
                        <div class="text-truncate font-weight-bold">
                            <span class="fa fa-exclamation text-danger"></span> فوری</div>
                        <div class="small text-muted text-truncate">با من تماس بگیر</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="/admin/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">علی عزیزی</small>
                            <small class="text-muted float-right mt-1">الان</small>
                        </div>
                        <div class="text-truncate font-weight-bold">
                            <span class="fa fa-exclamation text-danger"></span> فوری</div>
                        <div class="small text-muted text-truncate">با من تماس بگیر</div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="/admin/img/avatars/1.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">علی عزیزی</small>
                            <small class="text-muted float-right mt-1">الان</small>
                        </div>
                        <div class="text-truncate font-weight-bold">
                            <span class="fa fa-exclamation text-danger"></span> فوری</div>
                        <div class="small text-muted text-truncate">با من تماس بگیر</div>
                    </div>
                </a>
                <a class="dropdown-item text-center" href="#">
                    <strong>نمایش همه پیام ها</strong>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="/admin/img/avatars/6.png" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>پروفایل</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-bell-o"></i> به روز رسانی
                    <span class="badge badge-info">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> پیام ها
                    <span class="badge badge-success">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> وظیفه ها
                    <span class="badge badge-danger">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-comments"></i> دیدگاه
                    <span class="badge badge-warning">42</span>
                </a>
                <div class="dropdown-header text-center">
                    <strong>تنظیمات</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> پروفایل کاربری</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> تنظیمات شخصی</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-usd"></i> پرداختی ها
                    <span class="badge badge-dark">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-file"></i> پروژه ها
                    <span class="badge badge-primary">42</span>
                </a>

                <form action="{{route("logout")}}" method="post">
{{csrf_field()}}

                    <button class="dropdown-item" type="submit" >
                        <i class="fa fa-lock"></i>
                        خروج
                    </button>

                </form>
            </div>

        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
<div class="app-body">
    <div class="sidebar">
        @include("admin.ltr.section.nav")
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
           @yield("breadcrumb")

        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                @yield("content")
            </div>
        </div>
    </main>
    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <i class="icon-list"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <i class="icon-speech"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <i class="icon-settings"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">امروز</div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>ملاقات با
                            <strong>آقای امیدی</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>   ظهر</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i> ایران, تهران</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="/admin/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>تماس تلفنی با
                            <strong>خانم احمدی</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>   عصر</small>
                        <small class="text-muted">
                            <i class="icon-social-skype"></i>  برخط</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">فردا</div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>پروژه
                            <strong> طراحی گرافیک</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  شب</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  ایران,تهران</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/6.png" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div>
                            <strong>ملاقات برای پروژه</strong> استارتاپ</div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>   صبح</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>  ایران, تهران</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div>
                            <strong>ملاقات تیم</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>   ظهر</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  برخط</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/6.png" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="/admin/img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="/admin/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>



@include("admin.ltr.section.footer")