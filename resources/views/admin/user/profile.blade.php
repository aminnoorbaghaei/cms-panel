

@extends("admin.app")

@section("content")
    <div class="page-content container-fluid">

        <div class="row">

            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="mt-4">
                            <span class="{{FindFlag($current_user->id)}}"></span>

                        </center>
                        <center class="mt-4">


                                @if(!$current_user->Hasmedia('images'))

                                    <img width="100px" class="img-responsive " src="{{ url("/public/admin/img/pic/no-pic-user.jpg")}}" >
                                @else
                                    <img  width="100px" class="img-responsive " src="{{ url("public".$current_user->getFirstMediaUrl('images'))}}">

                                @endif

                            <h4 class="card-title mt-2">{{$current_user->full_name}} ( {{$current_user->roles()->first()->label }}) </h4>
                            <h6 class="card-subtitle">اعلان ها</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">{{$trans['Email']}} </small>
                        <h6>{{$current_user->email}}</h6>
                        <small class="text-muted pt-4 db">{{$trans['Mobile']}}</small>
                        <h6>{{$current_user->mobile}}</h6>
                        <small class="text-muted pt-4 db">{{$trans['HomeAddress']}}</small>
                        @if(!is_null($current_user->addressHome))
                            <h6>{{$current_user->addressHome}}</h6>
                            @else
                            <h6>هنوز ثبت نشده</h6>
                        @endif
                        <small class="text-muted pt-4 db">{{$trans['CompanyAddress']}}</small>
                       @if(!is_null($current_user->addressCompany))
                            <h6>{{$current_user->addressCompany}}</h6>
                           @else
                            <h6>هنوز ثبت نشده</h6>
                           @endif
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div> <small class="text-muted pt-4 db">{{$trans['SocialsNetwork']}}</small>
                        <br>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">پروفایل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">تنظیمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">جدول زمانی</a>
                        </li>

                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade active show" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>{{$trans['FullName']}}</strong>
                                        <br>
                                        <p class="text-muted">{{$current_user->full_name}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>{{$trans['Mobile']}}</strong>
                                        <br>
                                        <p class="text-muted">{{$current_user->mobile}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>{{$trans['Email']}}</strong>
                                        <br>
                                        <p class="text-muted">{{$current_user->email}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>{{$trans['Location']}}</strong>
                                        <br>
                                        <p class="text-muted">تهران</p>
                                    </div>
                                </div>
                                <hr>

                                <p class="mt-4">
                                  {{$trans['YouDescriptions']}}
                                </p>
                                <h4 class="font-medium mt-4">{{$trans['YouSkills']}}</h4>
                                <hr>
                                <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">



                                <form method="POST" action="{{route('users.update',['id'=>$current_user->id])}}" class="form-horizontal form-material" enctype="multipart/form-data">


                                    {{method_field('PATCH')}}
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label class="col-md-12">{{$trans['FullName']}}</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$current_user->full_name}}" placeholder="امین نوربقایی" class="form-control form-control-line" name="full_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12"> {{$trans['Email']}}</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{$current_user->email}}" placeholder="noorbaghaei.a2017@gmail.com" class="form-control form-control-line" name="email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">{{$trans['Password']}}</label>
                                        <div class="col-md-12">
                                            <input type="password"   class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> {{$trans['Mobile']}}</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$current_user->mobile}}" placeholder="09195995044" class="form-control form-control-line" name="mobile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> {{$trans['Language']}}</label>
                                        <div class="col-md-12">
                                          <select name="lang" class="form-control">
                                              @foreach($languages as $language)
                                              <option  {{($current_user->lang_id==$language->id) ? "selected" : " "}} value="{{$language->id}}">{{$language->name}}</option>
                                                  @endforeach
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">{{$trans['CompanyAddress']}}</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" class="form-control form-control-line" name="addressCompany">{{$current_user->addressCompany}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">{{$trans['HomeAddress']}}</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" class="form-control form-control-line" name="addressHome">{{$current_user->addressHome}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">{{$trans['Message']}}</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">{{$trans['SelectCountry']}}</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option selected>Iran</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-6">
                                        <label>{{$trans['Image']}}  </label>
                                        <div class="input-group">

                                            <div class="custom-file">
                                                <input name="image" type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">{{$trans['SelectImage']}}</label>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">{{$trans['Upgrade']}}</button>
                                        </div>
                                    </div>
                                </form>




                                {{--{{ Form::open(array(--}}

                                {{--'method' => 'GET',--}}
                                {{--'update'=>'UserController@update'--}}


                                {{--)) }}--}}
                                {{--{{csrf_field()}}--}}
                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('full_name', 'نام و نام خانوداگی',['class'=>'col-sm-12']) !!}--}}
                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::text('full_name',  null, ['class'=>'form-control form-control-line','placeholder'=>'نام و نام خانوادگی']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('email', 'ایمیل',['class'=>'col-sm-12']) !!}--}}
                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::text('email',  null, ['class'=>'form-control form-control-line','placeholder'=>'ایمیل']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('password', 'کلمه عبور',['class'=>'col-sm-12']) !!}--}}
                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::password('password', null, ['class'=>'form-control form-control-line']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('mobile', 'موبایل',['class'=>'col-sm-12']) !!}--}}

                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::text('mobile',  null, ['class'=>'form-control form-control-line','placeholder'=>'موبایل']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('address', 'آدرس',['class'=>'col-sm-12']) !!}--}}
                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::text('address',  null, ['class'=>'form-control form-control-line','placeholder'=>'تهران - تهران ']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                {{--{!!Form::label('message', 'پیام',['class'=>'col-sm-12']) !!}--}}
                                {{--<div class="col-md-12">--}}
                                {{--{{ Form::text('message',  null, ['class'=>'form-control form-control-line']) }}--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--{{ Form::submit('بروز رسانی', ['name' => 'submit','class'=>'btn btn-success']) }}--}}

                                {{--{{ Form::close() }}--}}





                            </div>
                        </div>

                        <div class="tab-pane fade" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <div class="steamline mt-0">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/public/admin/img/general/1.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3"><img src="/public/admin/img/general/img1.jpg" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img src="/public/admin/img/general/img2.jpg" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img src="/public/admin/img/general/img3.jpg" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img src="/public/admin/img/general/img1.jpg" class="img-fluid rounded"></div>
                                                </div>
                                                <div class="desc"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/public/admin/img/general/2.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <div class="mt-3 row">
                                                    <div class="col-md-3 col-xs-12"><img src="/public/admin/img/general/img1.jpg" alt="user" class="img-fluid rounded"></div>
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>
                                                </div>
                                                <div class="desc mt-3"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/public/admin/img/general/3.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="desc mt-3"> <a href="javascript:void(0)" class="link mr-2">2 comment</a> <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/public/admin/img/general/4.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <blockquote class="mt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection


