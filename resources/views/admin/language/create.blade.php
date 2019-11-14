@extends("admin.app")

{{inject('admin','languages.create')}}

@section("content")

    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="card">



                <form action="{{route('languages.store')}}" method="POST" style="margin-bottom: 0">

                    {{csrf_field()}}
                    <div class="card-header">
                        <h4 class="card-title">افزودن زبان جدید</h4>

                       @include('admin.section.request-error')




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
                                             <input autocomplete="off" type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="نام" aria-label="Username" aria-describedby="basic-addon1">
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
                                             <input autocomplete="off" type="text" name="code" class="form-control" value="{{old('code')}}" placeholder="کد" aria-label="Username" aria-describedby="basic-addon1">
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
                                                <option value="rtl" selected>راست به چپ</option>
                                                <option value="ltr">چپ به راست</option>
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
                                             <span class='btn btn-success model_img img-fluid' href='#' data-toggle='modal' data-target='#createFlag'>پرجم</span>
                                             <input autocomplete="off" type="text" name="icon" class="form-control" value="{{old('icon')}}"  aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                     </div>
                                 </div>
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
                </form>





            </div>
        </div>

    </div>

    @include("admin.modal.flag");

@endsection



@section('script')

    {{ Html::script('/public/ajax/menu.js') }}


@endsection