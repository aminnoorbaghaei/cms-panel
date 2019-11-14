



@include("admin.ltr.section.header")
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                        <h1>ورود</h1>
                            <div>
                            @if ($errors->has('email'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('email') }}
                                    </div>


                            @endif
                            @if ($errors->has('password'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('password') }}
                                    </div>
                            @endif
                            </div>
                        <p class="text-muted">پنل مدیریت</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                            </div>
                            <input class="form-control" name="email" type="text" placeholder="ایمیل">

                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="کلمه عبور">

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <input class="btn btn-primary px-4" type="submit" value="ورود">
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0"  href="{{ route('password.request') }}">بازیابی پسورد</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>ثبت نام</h2>
                            <p>
                                هم اکنون عضو وب سایت شوید
                            </p>
                            <button class="btn btn-primary active mt-3" type="button">ثبت نام</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/pace.min.js"></script>
<script src="/admin/js/perfect-scrollbar.min.js"></script>
<script src="/admin/js/coreui.min.js"></script>
<script src="/admin/js/jquery.toast.js"></script>
<script>
    $.toast({
        showHideTransition: 'fade',
        heading: 'موفقعیت آمیز',
        text: 'عملیات با موفقیت ثبت شد',
        icon: 'success',
        textAlign:'right',


    });
    // window.setTimeout(function(){
    //
    // }, 3000)

</script>
</body>
</html>









{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

