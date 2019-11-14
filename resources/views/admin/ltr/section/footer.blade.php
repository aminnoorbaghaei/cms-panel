<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


<!-- Bootstrap tether Core JavaScript -->

{!! Html::script('public/admin/js/popper.min.js') !!}
{!! Html::script('public/admin/js/bootstrap.min.js') !!}


<!-- apps -->
{!! Html::script('public/admin/js/app.min.js') !!}
{!! Html::script('public/admin/js/app.init.mini-sidebar.js') !!}
{!! Html::script('public/admin/js/app-style-switcher.js') !!}

<!-- slimscrollbar scrollbar JavaScript -->
{!! Html::script('public/admin/js/perfect-scrollbar.jquery.min.js') !!}
{!! Html::script('public/admin/js/sparkline.js') !!}



<!--Wave Effects -->
{!! Html::script('public/admin/js/waves.js') !!}
<!--Menu sidebar -->
{!! Html::script('public/admin/js/sidebarmenu.js') !!}

<!--Custom JavaScript -->

{!! Html::script('public/admin/js/custom.min.js') !!}


<!-- This Page JS -->
{!! Html::script('public/admin/js/chartist.min.js') !!}
{!! Html::script('public/admin/js/chartist-plugin-tooltip.js') !!}
{!! Html::script('public/admin/js/raphael.min.js') !!}
{!! Html::script('public/admin/js/morris.min.js') !!}
{!! Html::script('public/admin/js/echarts-en.min.js') !!}
{!! Html::script('public/admin/js/dashboard6.js') !!}
{!! Html::script('public/admin/js/bootstrap-toggle.min.js') !!}
{!! Html::script('public/ajax/general.js') !!}



{!! Html::script('chrome-extension://gppongmhjkpfnbhagpmjfkannfbllamg/js/inject.js') !!}

{!! Html::script('public/admin/js/jquery.validate.min.js') !!}
{!! Html::script('https://wrappixel.com/ampleadmin/assets/libs/jquery-steps/build/jquery.steps.min.js') !!}

@toastr_js
@toastr_render
@yield('script')

</body></html>