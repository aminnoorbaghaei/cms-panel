<html dir="{{$position}}" lang="{{$code}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="/admin/image/png" sizes="16x16" href="/public/admin/img/brand/logo.svg">
    <title>پنل مدیریت</title>
    <!-- This Page CSS -->

{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js') }}
{{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js') }}
{{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css') }}





{{ Html::style('/public/admin/css/ltr/bootstrap.min.css') }}
{{ Html::style('/public/admin/css/toastr.min.css') }}
{{ Html::style('/public/admin/css/chartist.min.css') }}
{{ Html::style('/public/admin/css/chartist-init.css') }}
{{ Html::style('/public/admin/css/chartist-plugin-tooltip.css') }}
{{ Html::style('/public/admin/css/jvector.css') }}
{{ Html::style('/public/admin/css/jquery-jvectormap-2.0.2.css') }}
{{ Html::style('/public/admin/css/morris.css') }}
{{ Html::style('/public/admin/css/ltr/style.css') }}
{{ Html::style('/public/admin/css/style.css') }}
{!! Html::script('public/admin/js/jquery.min.js') !!}
{!! Html::script('public/admin/js/jquery.bootstrap-touchspin.js') !!}
{!! Html::script('public/admin/js/prettify.js') !!}
{{ Html::style('/public/admin/css/bootstrap-toggle.min.css') }}
{{ Html::style('/public/admin/css/jquery.bootstrap-touchspin.css') }}
{{ Html::style('/public/admin/css/prettify.css') }}
{!! Html::script('public/admin/js/alertify.js') !!}




    {{ Html::style('/public/admin/css/alertify.css') }}
    {{ Html::style('/public/admin/css/default.css') }}









<!--[if lt IE 9]>
    <!--{{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}-->
<!--{{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}-->

    <![endif]-->
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0,0,0,0.6);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>

    @yield('head')
</head>
