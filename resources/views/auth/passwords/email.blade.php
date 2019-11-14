@if($position=="rtl")
    @include("admin.rtl.section.header")
@elseif($position=="ltr")
    @include("admin.ltr.section.header")
@endif

<div class="container-fluid-admin position-relative">

    <div class="container bg-white position-fixed position-center">
        <div class="row">
            <div class="col-md-12" style="padding: 0;">
                <div class="panel panel-default ">
                    <div class="panel-heading text-center bg-dark" style="color: #ffffff;padding: 10px; ">{{$trans['ResetPassword']}}</div>

                    <div class="panel-body" style="padding: 10px;">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal reset-link" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">{{$trans['Email']}}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{$trans['SendPasswordResetLink']}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


@if($position=="rtl")
    @include("admin.rtl.section.footer")
@elseif($position=="ltr")
    @include("admin.ltr.section.footer")
@endif
