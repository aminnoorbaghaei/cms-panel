@extends("admin.app")

{{inject('admin','sliders.edit')}}

@section("content")


    <form action="{{route("carousells.update",['id'=>$carousell->id])}}" method="post"  enctype="multipart/form-data">

    <div class="row">

        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                      <span>ویرایش اسلایدر - {{$carousell->title}} </span>


                    </div>
                    <div class="card-body">

                        @include("admin.section.request-error")
                        <div class="form-group">
                            <label>عنوان</label>
                            <div class="input-group">

                                <input value="{{$carousell->title}}" class="form-control" id="date" type="text" name="title">
                            </div>
                            <small class="text-muted">مثال : عنوان</small>
                        </div>
                        <div class="form-group">
                            <label>توضیحات</label>
                            <div class="input-group">

                                <input value="{{$carousell->description}}" class="form-control" id="date" type="text" name="description">
                            </div>
                            <small class="text-muted">مثال : متن توضیحات</small>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>متن لینک </label>
                                    <div class="input-group">

                                        <input value="{{$carousell->textBtn}}" name="textBtn" class="form-control"  >

                                    </div>
                                    <small class="text-muted">مثال اطلاعات بیشتر</small>
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>آدرس لینک </label>
                                    <div class="input-group">

                                        <input value="{{$carousell->linkBtn}}" name="linkBtn" class="form-control"  >

                                    </div>
                                    <small class="text-muted">مثال https://google.com</small>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label>الویت </label>
                                <div class="input-group">

                                    <input value="{{$carousell->order}}" name="order" class="form-control" id="tin" type="number">
                                </div>

                            </div>
                            <div class="col-6">
                                <label>وضعیت </label>
                                <input name="status" type="checkbox" {{($carousell->status=="1") ? "checked" : "" }} data-toggle="toggle">
                            </div>

                        </div>
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
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                    </div>
                </div>


        </div>

        <div class="col-md-4">


                @include("admin.section.changePhoto",['data'=>$carousell])




            </div>


        </div>
        </form>

    @endsection