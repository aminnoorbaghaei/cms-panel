@extends("admin.app")


{{inject('admin','portfolios.edit')}}

@section("content")



<div class="row">

    <div class="col-md-6 ">
        <form action="{{route("portfolios.update",['id'=>$portfolio->id])}}" method="post"  enctype="multipart/form-data">

            {{csrf_field()}}
            {{method_field("PATCH")}}

            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> <span>ویرایش نمونه کار - {{$portfolio->title}} </span>


                </div>
                <div class="card-body">

                    @include("admin.section.request-error")
                    <div class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input name="title" class="form-control" id="date" type="text"value="{{$portfolio->title}}">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </div>
                    <div class="form-group">
                        <label>متن </label>

                    <textarea class="input-block-level" id="summernote" name="body" rows="18">{!! $portfolio->body !!}
					</textarea>
                    </div>

                    <div class="form-group">
                        <label>متن توضیحات</label>
                        <div class="input-group">

                            <input value="{{$portfolio->description}}" class="form-control" id="date" type="text" name="description">
                        </div>
                        <small class="text-muted">مثال : سایت فروشگاهی | فروشگاه</small>
                    </div>
                    <div class="form-group">
                        <label>کلید واژه</label>
                        <div class="input-group">

                            <input value="{{$portfolio->keyword}}" class="form-control" id="date" type="text" name="keyword">
                        </div>
                        <small class="text-muted">مثال : سایت فروشگاهی,فروشگاه</small>
                    </div>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-6">
                                <label>الویت </label>
                                <div class="input-group">

                                    <input value="{{$portfolio->order}}" name="order" class="form-control" id="tin" type="number">
                                </div>

                            </div>
                            <div class="col-6">
                                <label>وضعیت </label>
                                <input name="status" type="checkbox" {{($portfolio->status=="1") ? "checked" : "" }} data-toggle="toggle">
                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <label>نحوه نمایش </label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="target">
                                        <option  selected value="1">صفحه جدید</option>
                                        <option  value="0">صفحه اصلی</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label>تصویر  </label>
                                <div class="input-group">

                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <label> وضعیت نمونه کار ها  </label>
                                    <select name="condition" class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" >
                                        <option  selected value="1"> running </option>
                                        <option  value="0">finished </option>

                                    </select>
                                </div>
                            </div>

                            <label>مشتری </label>
                            <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="customer_id">

                                @foreach($customers as $customer)

                                    <option data-select2-id="2" selected value="{{$customer->id}}">{{$customer->title}}</option>


                                @endforeach

                            </select>


                        </div>



                        <div class="row">


                            <div class="col-6">
                                <label for="inputEmail3" class="control-label col-form-label">دسته بندی  </label>
                                <div class="input-group" id="result-category-url">

                                </div>


                            </div>


                        </div>



                    </div>





                </div>

                <div class="card-footer">
                    <button class="btn btn-s-md btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                </div>
            </div>

        </form>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <span>تصویر شاخص </span>


            </div>


            <div class="card-body">

                <div class="center-block">

                    @if(!$portfolio->hasMedia('images'))

                        <img src="{{ url("/public/admin/img/pic/no-pic.png")}}" width="400px" class="img-responsive ">
                    @else
                        <img src="{{ url("public".$portfolio->getFirstMediaUrl('images'))}}" width="400px" class="img-responsive ">

                    @endif


                </div>

            </div>





        </div>
    </div>

</div>



@endsection