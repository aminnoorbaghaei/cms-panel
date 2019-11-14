@extends("admin.rtl.app")

@section("content")
    <form action="{{route("categories.update",['id'=>$category->id])}}" method="post" >

        {{csrf_field()}}
        {{method_field("PATCH")}}
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> <span>ویرایش دسته بندی - {{$category->title}} </span>


                </div>
                <div class="card-body">

                    <fieldset class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input class="form-control" name="title" value="{{$category->title}}" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input class="form-control" name="description" value="{{$category->description}}" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : توضیحات</small>
                    </fieldset>
                    <fieldset class="form-group" data-select2-id="9">
                        <label>حوزه </label>
                        <select class="form-control select2-single select2-hidden-accessible" name="model" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="2" {{$category->model=="article" ? "selected" : " "}} value="article">مقاله</option>
                            <option data-select2-id="18" {{$category->model=="information" ? "selected" : " "}} value="information">خبر</option>
                            <option data-select2-id="2"  {{$category->model=="music" ? "selected" : " "}} value="music">آهنگ</option>
                            <option data-select2-id="18" {{$category->model=="job" ? "selected" : " "}} value="job">شغل</option>
                            <option data-select2-id="2" {{$category->model=="product" ? "selected" : " "}}  value="product">محصول</option>
                            <option data-select2-id="18" {{$category->model=="customer" ? "selected" : " "}} value="customer">مشتری</option>
                            <option data-select2-id="2" {{$category->model=="portfolio" ? "selected" : " "}} value="portfolio">نمونه کار</option>



                        </select>
                    </fieldset>


                    <fieldset class="form-group">
                        <label>الویت </label>
                        <div class="input-group">

                            <input name="order" class="form-control" value="{{$category->order}}" id="tin" type="text">
                        </div>
                        <small class="text-muted">مثال  : 2 </small>
                    </fieldset>

                    <fieldset class="form-group" data-select2-id="9">
                        <label>وضعیت </label>
                        <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="2" {{$category->status==1 ? "selected" : " "}} value="1">فعال</option>
                            <option data-select2-id="18" {{$category->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                        </select>
                    </fieldset>


                </div>
                <div class="card-footer">
                    <button class="btn btn-s-md btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                </div>
            </div>
        </div>
    </form>

@endsection