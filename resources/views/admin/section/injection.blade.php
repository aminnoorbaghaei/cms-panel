

{{-------------------------- Articles -----------------------}}

@if($route==='article.create')


    @include("admin.section.breadcrumb",['data'=>["مقالات","افزودن مقاله جدید"],'link'=>['articles.index',false]])



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>


    {{ Html::script('/public/ajax/article.js') }}

@endsection

@elseif($route==='article.edit')

@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/article.js') }}

@endsection



@elseif($route==='articles')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/article.js') }}

@endsection




{{-------------------------- Informations -----------------------}}


@elseif($route==='informations.create')


    @include("admin.section.breadcrumb",['data'=>["اخبار","افزودن خبر جدید"],'link'=>['informations.index',false]])



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {{ Html::script('/public/ajax/information.js') }}


@endsection


@elseif($route==='informations.edit')

@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/information.js') }}

@endsection

@elseif($route==='informations')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/information.js') }}

@endsection






{{-------------------------- Portfolios -----------------------}}


@elseif($route==='portfolios.create')


    @include("admin.section.breadcrumb",['data'=>["نمونه کار ها","افزودن نمونه کار جدید"],'link'=>['healths.index',false]])



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {{ Html::script('/public/ajax/portfolio.js') }}

@endsection
@elseif($route==='portfolios.edit')


@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/portfolio.js') }}
@endsection
@elseif($route==='portfolios')


@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/portfolio.js') }}
@endsection



{{-------------------------- Services -----------------------}}



@elseif($route==='services.create')


    @include("admin.section.breadcrumb",['data'=>["خدمات","افزودن خدمات جدید"],'link'=>['services.index',false]])



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/service.js') }}

@endsection
@elseif($route==='services.edit')


@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/service.js') }}


@endsection
@elseif($route==='services')


@section('head')




@endsection

@section('script')

    {{ Html::script('/public/ajax/service.js') }}


@endsection






{{-------------------------- carousells -----------------------}}



@elseif($route==='carousells.create')


    @include("admin.section.breadcrumb",['data'=>["اسلایدر","افزودن اسلاید جدید"],'link'=>['carousells.index',false]])




@section('head')




@endsection

@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>

@endsection

@elseif($route==='carousells.edit')


@section('head')




@endsection

@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>
@endsection

@elseif($route==='carousells.index')


@section('head')




@endsection

@section('script')



    {{ Html::script('/public/ajax/carousell.js') }}


@endsection





{{-------------------------- Jobs -----------------------}}



@elseif($route==='jobs.create')


    @include("admin.section.breadcrumb",['data'=>["شغل ها","افزودن شغل جدید جدید"],'link'=>['jobs.index',false]])



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();
        $("input[name='number']").TouchSpin();
    </script>

    {{ Html::script('/public/ajax/job.js') }}

@endsection




@elseif($route==='jobs.edit')



@section('head')

    {{ Html::style('/public/admin/css/summernote-bs4.css') }}


@endsection

@section('script')

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();
        $("input[name='number']").TouchSpin();
    </script>
    {{ Html::script('/public/ajax/job.js') }}


@endsection

@elseif($route==='jobs')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/job.js') }}

@endsection





{{----------------------------------- Menus ----------------------------------}}

@elseif($route==='menus.create')


@include("admin.section.breadcrumb",['data'=>["منو ها","افزودن منو جدید"],'link'=>['menus.index',false]])



@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/menu.js') }}


@endsection
@elseif($route==='menus.edit')





@section('script')

    {{ Html::script('/public/ajax/menu.js') }}

    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='menus')


@section('script')

    {{ Html::script('/public/ajax/menu.js') }}




@endsection




{{----------------------------------- Cats ----------------------------------}}

@elseif($route==='cats.create')


@include("admin.section.breadcrumb",['data'=>["دسته بند ها ","افزودن دسته بندی جدید"],'link'=>['cats.index',false]])




@section('script')

    {{ Html::script('/public/ajax/cat.js') }}


@endsection
@elseif($route==='cats.edit')






@section('script')

    {{ Html::script('/public/ajax/cat.js') }}
    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection




{{----------------------------------- Products ----------------------------------}}


@elseif($route==='products.create')


    @include("admin.section.breadcrumb",['data'=>["محصولات","افزودن محصول جدید"],'link'=>['products.index',false]])


@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {{ Html::script('/public/ajax/product.js') }}

@endsection

@elseif($route==='products.edit')





@section('script')

    {{ Html::script('/public/ajax/product.js') }}

    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='products')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/product.js') }}

@endsection



{{-----------------------------------  Questions ----------------------------------}}


@elseif($route==='questions.create')



    @include("admin.section.breadcrumb",['data'=>["سوالات","افزودن سوال جدید"],'link'=>['questions.index',false]])





@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='questions.edit')





@section('script')



    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection
@elseif($route==='questions')





@section('script')



    {{ Html::script('/public/ajax/question.js') }}


@endsection


{{-----------------------------------  Addons ----------------------------------}}


@elseif($route==='addons.create')




@section('script')



@endsection

@elseif($route==='addons.edit')





@section('script')




@endsection
@elseif($route==='addons')





@section('script')



    {{ Html::script('/public/ajax/addon.js') }}


@endsection



{{----------------------------------- Partners  ----------------------------------}}


@elseif($route==='partners.create')



    @include("admin.section.breadcrumb",['data'=>["همکاران","افزودن همکار جدید"],'link'=>['partners.index',false]])




@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {{ Html::script('/public/ajax/position.js') }}



@endsection

@elseif($route==='partners.edit')





@section('script')



    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='partners')





@section('script')


    {{ Html::script('/public/ajax/partner.js') }}


@endsection







{{----------------------------------- Customers  ----------------------------------}}


@elseif($route==='customers.create')


    @include("admin.section.breadcrumb",['data'=>["مشتریان","افزودن مشتری جدید"],'link'=>['customers.index',false]])


@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='customers.edit')





@section('script')



    <script>
        $("input[name='order']").TouchSpin();

    </script>


@endsection

@elseif($route==='customers')





@section('script')


    {{ Html::script('/public/ajax/customer.js') }}


@endsection




{{----------------------------------- Users  ----------------------------------}}


@elseif($route==='users.create')


    @include("admin.section.breadcrumb",['data'=>["کاربران","افزودن کاربر جدید"],'link'=>['products.index',false]])



@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {{ Html::script('/public/ajax/user.js') }}


@endsection

@elseif($route==='users.edit')





@section('script')




@endsection

@elseif($route==='users')





@section('script')


    {{ Html::script('/public/ajax/user.js') }}


@endsection

{{----------------------------------- Doctors  ----------------------------------}}


@elseif($route==='doctors.create')


    @include("admin.section.breadcrumb",['data'=>["پزشکان","افزودن پزشک جدید"],'link'=>['doctors.index',false]])


@section('script')

    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {{ Html::script('/public/ajax/doctor.js') }}


@endsection

@elseif($route==='doctors.edit')





@section('script')




@endsection

@elseif($route==='doctors')





@section('script')


    {{ Html::script('/public/ajax/doctor.js') }}


@endsection


{{----------------------------------- Healths  ----------------------------------}}


@elseif($route==='healths.create')


    @include("admin.section.breadcrumb",['data'=>["مراکز درمانی","افزودن مرکز درمانی جدید"],'link'=>['healths.index',false]])



@section('script')




@endsection

@elseif($route==='healths.edit')





@section('script')




@endsection

@elseif($route==='healths')





@section('script')


    {{ Html::script('/public/ajax/health.js') }}


@endsection


{{----------------------------------- Pages  ----------------------------------}}


@elseif($route==='pages.create')



    @include("admin.section.breadcrumb",['data'=>["صفحات","افزودن صفحه جدید"],'link'=>['pages.index',false]])



@section('head')


    {{ Html::style('/public/admin/css/summernote-bs4.css') }}



@endsection


@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>
    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}




@endsection

@elseif($route==='pages.edit')


@section('head')


    {{ Html::style('/public/admin/css/summernote-bs4.css') }}



@endsection


@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "500px"
            });
        });

    </script>
    <script>
        $("input[name='order']").TouchSpin();

    </script>

    {!! Html::script('/public/admin/js/summernote-bs4.min.js') !!}


@endsection


@elseif($route==='pages')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/page.js') }}

@endsection





{{----------------------------------- Languages  ----------------------------------}}


@elseif($route==='languages.create')

    @include("admin.section.breadcrumb",['data'=>["زبان ها","افزودن زبان جدید"],'link'=>['languages.index',false]])




@section('head')






@endsection


@section('script')






@endsection

@elseif($route==='languages.edit')


@section('head')






@endsection

e
@section('script')




@endsection


@elseif($route==='languages')

@section('head')




@endsection

@section('script')


    {{ Html::script('/public/ajax/language.js') }}

@endsection














@endif

