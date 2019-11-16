@extends("admin.app")



@section("content")




    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$trans['Users']}}</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-people text-info"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$countUser}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$trans['Portfolios']}} </h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder text-primary"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$countPortfolio}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$trans['Customers']}}</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder-alt text-danger"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$countCustomer}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$trans['Articles']}}</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="ti-wallet text-success"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$countArticle}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card material-card">
                <div class="card-body">
                    @include('admin.section.showChart',['type'=>'bar','name'=>'first','label'=>['مقاله', 'اخبار', 'کاربر', 'منو', 'محصول', 'مشتری'],'data'=>[CountModel(\App\Article::SpaceName()),CountModel(\App\Information::SpaceName()),CountModel(\App\User::SpaceName()),CountModel(\App\Menu::SpaceName()), CountModel(\App\Product::SpaceName()), CountModel(\App\Customer::SpaceName())]])

                </div>
            </div>


        </div>
        <div class="col-md-4">
            <div class="card material-card">
                <div class="card-body">
            @include('admin.section.showChart',['type'=>'pie','name'=>'second','label'=>[ 'کاربر',  'محصول', 'مشتری'],'data'=>[CountModel(\App\User::SpaceName()), CountModel(\App\Product::SpaceName()), CountModel(\App\Customer::SpaceName())]])

                    </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card material-card">
                <div class="card-body">
            @include('admin.section.showChart',['type'=>'radar','name'=>'third','label'=>['مقاله', 'اخبار', 'کاربر', 'منو', 'محصول', 'مشتری'],'data'=>[CountModel(\App\Article::SpaceName()),CountModel(\App\Information::SpaceName()),CountModel(\App\User::SpaceName()),CountModel(\App\Menu::SpaceName()), CountModel(\App\Product::SpaceName()), CountModel(\App\Customer::SpaceName())]])
</div>
                </div>
        </div>



    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card material-card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">فروش روزانه</h5>
                            <div class="text-right">
                                <span class="text-muted font-light">درآمد روزانه</span>
                                <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-success"></i></sup>12,000 {{config("app.currency")}}</h2>
                            </div>
                            <span class="text-success">20%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card material-card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">فروش هفتگی</h5>
                            <div class="text-right">
                                <span class="text-muted font-light">درآمد هفتگی</span>
                                <h2 class="mt-2 display-7"><sup><i class="ti-arrow-down text-danger"></i></sup>5,000 {{config("app.currency")}}</h2>
                            </div>
                            <span class="text-success">30%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card material-card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">فروش ماهانه</h5>
                            <div class="text-right">
                                <span class="text-muted font-light">درآمد ماهانه</span>
                                <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-info"></i></sup>10,000  {{config("app.currency")}}</h2>
                            </div>
                            <span class="text-info">60%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card material-card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">فروش سالانه</h5>
                            <div class="text-right">
                                <span class="text-muted font-light">درآمد سالانه</span>
                                <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-inverse"></i></sup>9,000  {{config("app.currency")}}</h2>
                            </div>
                            <span class="text-inverse">20%</span>
                            <div class="progress">
                                <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card material-card">
                <div id="carouselExampleIndicators" class="carousel slide primary-carousel" data-ride="carousel">
                    <ol class="carousel-indicators d-none">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100 p-img" src="/public/admin/img/general/p-1.jpg" alt="First slide">
                            <div class="card-img-overlay text-white">
                                <span class="badge badge-primary badge-pill text-white font-medium">فروش نقدی</span>
                                <h2 class="mt-3">محصول اول</h2>
                                <div class="mt-5">
                                    <a href="#" class="text-muted read-more font-light text-uppercase">اطلاعات بیشتر</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100 p-img" src="/public/admin/img/general/bg-img4.jpg" alt="Second slide">
                            <div class="card-img-overlay text-white">
                                <span class="badge badge-danger badge-pill text-white font-medium">فروش فوری</span>

                                <h2 class="mt-3">محصول دوم</h2>
                                <div class="mt-5">
                                    <a href="#" class="text-muted read-more font-light text-uppercase">اطلاعات بیشتر</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 p-img" src="/public/admin/img/general/bg-img6.jpg" alt="Third slide">
                            <div class="card-img-overlay text-white">
                                <span class="badge badge-info badge-pill text-white font-medium">فروش فوری</span>
                                <h2 class="mt-3">محصول سوم</h2>
                                <div class="mt-5">
                                    <a href="#" class="text-muted read-more font-light text-uppercase">اطلاعات بیشتر</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 p-img" src="/public/admin/img/general/bg-img5.jpg" alt="Third slide">
                            <div class="card-img-overlay text-white">
                                <span class="badge badge-info badge-pill text-white font-medium">فروش اقساطی</span>

                                <h2 class="mt-3">محصول چهارم</h2>

                                <div class="mt-5">
                                    <a href="#" class="text-muted read-more font-light text-uppercase">اطلاعات بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0"> مدیران</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">شناسه</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">تصویر</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">نام و نام خانوادگی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">مدرک تحصیلی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">آدرس الکترونیکی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">تاریخ ایجاد</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">سمت</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">مدیریت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="pl-4">1</td>
                            <td>
                                @if(!$user->hasMedia('images'))

                                    <img src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" alt="user" class="rounded-circle" width="31">
                                @else
                                    <img src="{{ url("public".$user->getFirstMediaUrl('images'))}}" alt="user" class="rounded-circle" width="31">

                                @endif
                            </td>
                            <td>
                                <h5 class="font-medium mb-0">{{$user->full_name}}</h5>
                                <span class="text-muted">{{$user->city}}</span>
                            </td>
                            <td>
                                <span class="text-muted">لیسانس</span><br>

                            </td>
                            <td>
                                <span class="text-muted">{{$user->email}}</span><br>
                                <span class="text-muted">{{$user->mobile}}</span>
                            </td>
                            <td>
                                <span class="text-muted">{{$user->created_at}}</span><br>

                            </td>
                            <td>
                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                    <option>کاربر معمولی</option>
                                    <option>مدیر</option>
                                    <option>حسابدار</option>
                                    <option>ویرایشکر</option>
                                </select>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle" title="مدیریت"><i class="ti-key"></i> </button>
                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت"><i class="icon-trash"></i> </button>
                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت" ><i class="ti-pencil-alt"></i> </button>
                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت"><i class="ti-upload"></i> </button>
                            </td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0"> کاربران</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">شناسه</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">تصویر</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">نام و نام خانوادگی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">مدرک تحصیلی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">آدرس الکترونیکی</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">تاریخ ایجاد</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">سمت</th>
                            <th scope="col" class="border-0 text-uppercase font-medium">مدیریت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td class="pl-4">1</td>
                                <td>
                                    @if(!$client->hasMedia('images'))

                                        <img src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" alt="user" class="rounded-circle" width="31">
                                    @else
                                        <img src="{{ url("public".$client->getFirstMediaUrl('images'))}}" alt="user" class="rounded-circle" width="31">

                                    @endif
                                </td>
                                <td>
                                    <h5 class="font-medium mb-0">{{$client->full_name}}</h5>
                                    <span class="text-muted">{{$client->city}}</span>
                                </td>
                                <td>
                                    <span class="text-muted">لیسانس</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{$client->email}}</span><br>
                                    <span class="text-muted">{{$client->mobile}}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{$client->created_at}}</span><br>

                                </td>
                                <td>
                                    <select class="form-control category-select" id="exampleFormControlSelect1">
                                        <option>کاربر معمولی</option>
                                        <option>مدیر</option>
                                        <option>حسابدار</option>
                                        <option>ویرایشکر</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle" title="مدیریت"><i class="ti-key"></i> </button>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت"><i class="icon-trash"></i> </button>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت" ><i class="ti-pencil-alt"></i> </button>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" title="مدیریت"><i class="ti-upload"></i> </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">{{$trans['MainPage']}}</li>
@endsection
