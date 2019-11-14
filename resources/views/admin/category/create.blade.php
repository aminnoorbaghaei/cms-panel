@extends("admin.rtl.app")

@section("content")

<div class="col-md-5">
        <div class="card">
            <form  action="{{route("categories.store")}}" method="post">
                {{csrf_field()}}
            <div class="card-header">
                <i class="icon-plus"></i> <span>افزودن دسته بندی جدید</span>
            </div>
            <div class="card-body">

                @include("admin.ltr.section.request-error")
                    <fieldset class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input name="title" class="form-control" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </fieldset>
                <fieldset class="form-group">
                    <label>توضیحات</label>
                    <div class="input-group">

                        <input name="description" class="form-control" id="date" type="text">
                    </div>
                    <small class="text-muted">مثال : توضیحات</small>
                </fieldset>
                <fieldset class="form-group" data-select2-id="9">
                    <label>حوزه </label>
                    <select class="form-control select2-single select2-hidden-accessible" name="model" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                        <option data-select2-id="2" selected value="article">مقاله</option>
                        <option data-select2-id="18" value="information">خبر</option>
                        <option data-select2-id="2"  value="music">آهنگ</option>
                        <option data-select2-id="18" value="job">شغل</option>
                        <option data-select2-id="2"  value="product">محصول</option>
                        <option data-select2-id="18" value="customer">مشتری</option>
                        <option data-select2-id="2"  value="portfolio">نمونه کار</option>



                    </select>
                </fieldset>


                    <fieldset class="form-group">
                        <label>الویت </label>
                        <div class="input-group">

                            <input class="form-control" id="tin" type="text">
                        </div>
                        <small class="text-muted">مثال  : 2 </small>
                    </fieldset>

                    <fieldset class="form-group" data-select2-id="9">
                        <label>وضعیت </label>
                        <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="status">
                            <option data-select2-id="2" selected value="1">فعال</option>
                            <option data-select2-id="18" value="0">غیر فعال</option>

                        </select>
                    </fieldset>
                <fieldset class="form-group">
                    <label>تصویر  </label>
                    <div class="input-group">

                        <input  class="form-control" id="tin" type="file" name="imageUrl">
                    </div>

                </fieldset>


            </div>

            <div class="card-footer">
                <button class="btn btn-s-md btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> افزودن</button>

            </div>
    </form>
        </div>
    </div>

@endsection