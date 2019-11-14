@extends("admin.rtl.app")

{{inject('admin','partners.edit')}}

@section("content")
    <form action="{{route("partners.update",['id'=>$partner->id])}}" method="post" >

        {{csrf_field()}}
        {{method_field("PATCH")}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> <span>ویرایش  همکار - {{$partner->title}} </span>


                </div>
                <div class="card-body">

                    @include("admin.ltr.section.request-error")
                    <div class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input name="title" class="form-control" id="date" type="text" value="{{$partner->title}}">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </div>
                    <div class="form-group">
                        <label>توضیحات</label>
                        <div class="input-group">

                            <input name="body" class="form-control" id="date" type="text" value="{{$partner->body}}">
                        </div>
                        <small class="text-muted">مثال : توضیحات</small>
                    </div>



                    <div class="row">

                        <div class="col-6">
                            <div class="form-group" data-select2-id="9">
                                <label>وضعیت </label>
                                <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="status">
                                    <option data-select2-id="2" selected value="1">فعال</option>
                                    <option data-select2-id="18" value="0">غیر فعال</option>

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
                                <label>الویت </label>
                                <div class="input-group">

                                    <input name="order" class="form-control" id="tin" type="text" value="{{$partner->order}}">
                                </div>
                                <small class="text-muted">مثال 2</small>
                            </div>
                        </div>

                        <div class="col-6">

                            <label>زبان </label>
                            <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                @foreach($languages as $language)

                                    <option data-select2-id="2" selected value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>


                        </div>




                    </div>


                </div>
                <div class="card-footer">
                    <button class="btn btn-s-md btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                </div>
            </div>
        </div>
    </form>
@endsection