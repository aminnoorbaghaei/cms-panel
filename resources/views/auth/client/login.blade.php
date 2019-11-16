

@if($position=="rtl")
    @include("client.rtl.section.header")
@elseif($position=="ltr")
    @include("client.ltr.section.header")
@endif


<body>
<div class="main-wrapper">

    <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(/public/admin/img/general/House-Interior.jpg) no-repeat center center;background-size:cover;">
        <div class="auth-box on-sidebar">
            <form method="POST" action="{{ route('client.login.submit') }}">
                {{ csrf_field() }}
            <div id="loginform">
                <div class="logo">

                    <h5 class="font-medium mb-3">{{$trans['LoginToUserPanel']}}</h5>
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
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal mt-3" id="loginform" action="index.html">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control form-control-lg" placeholder=" {{$trans['UserName']}}" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="{{$trans['Password']}} " aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">{{$trans['RememberMe']}}</label>
                                        <a  href="{{ route('password.request',["lang"=>$code]) }}" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i>{{$trans['RecoveryPassword']}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 pb-3">
                                    <button class="btn btn-block btn-lg btn-info" type="submit"> {{$trans['Login']}}   </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            </form>
            <div id="recoverform">
                <div class="logo">
                    <span class="db"><img src="/admin/img/general/logo-icon.png" alt="logo"></span>
                    <h5 class="font-medium mb-3">Recover Password</h5>
                    <span>Enter your Email and instructions will be sent to you!</span>
                </div>
                <div class="row mt-3">
                    <!-- Form -->
                    <form class="col-12" action="index.html">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>

<script src="/admin/js/jquery.min.js"></script>

<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();

    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

@if($position=="rtl")
    @include("client.rtl.section.footer")
@elseif($position=="ltr")
    @include("client.ltr.section.footer")
@endif

