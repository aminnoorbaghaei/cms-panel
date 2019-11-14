@extends("admin.app")



@section("content")
  <div class="row">
      <div class="col-md-8">
          <form action="{{route("languages.update",['id'=>$language->id])}}" method="post" >

              {{csrf_field()}}
              {{method_field("PATCH")}}
              <div class="card">
                  <div class="card-header">

                      <i class="icon-plus"></i> <span>ویرایش زبان - {{$language->name}} </span>

                  </div>
                  <div class="card-body">


                      <div class="row">

                          <div class="col-12">
                              <div class="row">
                                  <div class="col-3">
                                      <div class="form-group">
                                          <label for="inputEmail3" class="control-label col-form-label">نام</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                              </div>
                                              <input autocomplete="off" type="text" name="name" class="form-control" value="{{$language->name}}" placeholder="نام" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-3">
                                      <div class="form-group">
                                          <label for="inputEmail3" class="control-label col-form-label">کد</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                              </div>
                                              <input autocomplete="off" type="text" name="code" class="form-control" value="{{$language->code}}" placeholder="کد" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-3">
                                      <div class="form-group">
                                          <label for="inputEmail3" class="control-label col-form-label">نخوه نمایش</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                              </div>
                                              <select name="position" class="form-control">
                                                  <option value="rtl" {{$language->position=="rtl" ? "selected" : ""}}>راست به چپ</option>
                                                  <option value="ltr" {{$language->position=="ltr" ? "selected" : ""}}>چپ به راست</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-3">
                                      <div class="form-group">
                                          <label for="inputEmail3" class="control-label col-form-label">پرچم</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                              </div>
                                              <input autocomplete="off" type="text" name="icon" class="form-control" value="{{$language->icon}}"  aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                      </div>
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

          @include("admin.section.showPic",['data'=>'/admin/img/icons/'.findString($language->icon,'flag-icon-').'.svg'])

      </div>

  </div>
@endsection

@section('script')

    {{ Html::script('/public/ajax/menu.js') }}


@endsection