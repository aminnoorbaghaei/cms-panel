@if($position=="rtl")
    @include("template.company.handle.errors.section.rtl.header")
@elseif($position=="ltr")
    @include("template.company.handle.errors.section.rtl.header")
@endif


<body>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="error-box">
        <div class="error-body text-center">

            <div>
                <img src="/public/admin/img/general/269-2694820_career-icon-oops-error-message-404.png">
            </div>
            <h1 class="error-title text-danger">404</h1>
            <h3 class="text-uppercase error-subtitle">{{$trans['NotFound']}}</h3>
            <p class="text-muted mt-4 mb-4">{{$trans['TryAgain']}}</p>
            <a href="{{route("front.website")}}" class="btn btn-danger btn-rounded waves-effect waves-light mb-5">{{$trans['BackToHome']}}</a> </div>
    </div>

</div>

@if($position=="rtl")
    @include("template.company.handle.errors.section.rtl.footer")
@elseif($position=="ltr")
    @include("template.company.handle.errors.section.rtl.footer")
@endif

