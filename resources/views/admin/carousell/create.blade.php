@extends("admin.app")


{{inject('admin','carousells.create')}}

@section("content")

<div class="col-md-6">
        <div class="card">
            <form  action="{{route("carousells.store")}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="card-header">
                 <span>افزودن اسلایدر جدید</span>
            </div>
            <div class="card-body">

                @include("admin.section.request-error")
                    <div class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input value="{{old("title")}}" class="form-control" id="date" type="text" name="title">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </div>
                <div class="form-group">
                    <label>توضیحات</label>
                    <div class="input-group">

                        <input value="{{old("description")}}" class="form-control" id="date" type="text" name="description">
                    </div>
                    <small class="text-muted">مثال : متن توضیحات</small>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>متن لینک </label>
                            <div class="input-group">

                                <input value="{{old("textBtn")}}" name="textBtn" class="form-control"  >

                            </div>
                            <small class="text-muted">مثال اطلاعات بیشتر</small>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>آدرس لینک </label>
                            <div class="input-group">

                                <input value="{{old("linkBtn")}}" name="linkBtn" class="form-control" >

                            </div>
                            <small class="text-muted">مثال https://google.com</small>
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


                    <label>زبان </label>
                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                        @foreach($languages as $language)

                            <option data-select2-id="2" selected value="{{$language->id}}">{{$language->name}}</option>


                        @endforeach

                    </select>



                </div>




            </div>

            <div class="card-footer">
                <button class="btn btn-s-md btn-info" type="submit">
                    <i class="fa fa-dot-circle-o"></i> افزودن</button>

            </div>
    </form>
        </div>
    </div>

@endsection