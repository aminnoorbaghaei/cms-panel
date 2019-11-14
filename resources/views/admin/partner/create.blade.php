@extends("admin.rtl.app")

{{inject('admin','partners.create')}}

@section("content")

<div class="row">

    <div class="col-md-8">
        <div class="card">
            <form  action="{{route("partners.store")}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-header">
                    <span>افزودن همکار جدید</span>
                </div>
                <div class="card-body">

                    @include("admin.ltr.section.request-error")
                    <div class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input name="title" class="form-control" id="date" type="text" value="{{old('title')}}">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </div>
                    <div class="form-group">
                        <label>توضیحات</label>
                        <div class="input-group">

                            <input name="body" class="form-control" id="date" type="text" value="{{old('body')}}">
                        </div>
                        <small class="text-muted">مثال : توضیحات</small>
                    </div>



                    <div class="row">

                        <div class="col-6">

                            <div class="form-group" data-select2-id="9">
                                <label>وضعیت </label>

                                <input name="status" type="checkbox" selected data-toggle="toggle">

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

                                <div class="form-group">

                                    <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                </div>

                            </div>

                        </div>






                    </div>
                    <div class="row">
                        <div class="col-6">

                            <label>زبان </label>
                            <select  class="form-control select2-single select2-hidden-accessible" id="insert-request-position-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="langPos">

                                <option data-select2-id="2" selected value="0">انتخاب زبان</option>

                                @foreach($languages as $language)

                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>

                        </div>
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">سمت ها  </label>
                            <div class="input-group" id="insert-result-position">

                            </div>


                        </div>

                    </div>



                </div>

                <div class="card-footer">
                    <button class="btn btn-s-md btn-info" type="submit">
                        <i class="fa fa-dot-circle-o"></i> ایجاد کردن</button>

                </div>
            </form>
        </div>
    </div>

    <div class="col-md-4">

        <form action="{{route("position.insert")}}" method="POST" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="card">
                <div class="card-header">
                    <span>افزودن سمت جدید </span>



                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">عنوان </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                </div>

                                <input autocomplete="off" name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="عنوان" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                        </div>

                        <div class="col-12">

                            <label>زبان </label>
                            <select  class="form-control select2-single select2-hidden-accessible" id="request-position-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                <option data-select2-id="2" selected value="0">انتخاب زبان</option>

                                @foreach($languages as $language)

                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>

                        </div>
                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">سمت ها  </label>
                            <div class="input-group" id="result-position">

                            </div>


                        </div>


                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">وضعیت نمایش</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="mdi mdi-eye"></i></span>
                                </div>
                                <input name="status" type="checkbox" data-toggle="toggle" >
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">الویت</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                </div>

                                <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="action-form">
                        <div class="form-group mb-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light">ذخیره</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>



    </div>

</div>

@endsection