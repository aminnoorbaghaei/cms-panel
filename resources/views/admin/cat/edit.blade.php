@extends("admin.rtl.app")

@section("content")
    <form action="{{route("cats.update",['id'=>$menu->id])}}" method="post" >

        {{csrf_field()}}
        {{method_field("PATCH")}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <i class="icon-plus"></i> <span>ویرایش منو - {{$menu->title}} </span>

                </div>
                <div class="card-body">

                    <div class="input-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input class="form-control" name="title" value="{{$menu->title}}" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">نوع لینک </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                </div>
                                <select id="request-menu-url" class="form-control">
                                    <option value="0">انتخاب کنید..</option>

                                    <option value="1">لینک داخلی</option>
                                    <option value="2">لینک خارجی</option>
                                    <option value="3">بدون لینک</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6" >
                            <label for="inputEmail3" class="control-label col-form-label">لینک منو </label>
                            <div class="input-group" id="result-menu-url">
                                <input autocomplete="off" name="hrefUrl" type="text" class="form-control" value="{{$menu->hrefUrl}}" placeholder="عنوان" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                        </div>
                    </div>
                   <div class="row">
                     <div class="col-6">
                         <div class="input-group">
                             <label>آیکون </label>
                             <div class="input-group">

                                 <input class="form-control" id="tin" value="{{$menu->icon}}" type="text" name="icon">
                             </div>
                             <small class="text-muted">مثال briefcase</small>
                         </div>
                     </div>
                       <div class="col-6">
                           <div class="input-group">
                               <label>rel </label>
                               <div class="input-group">

                                   <input class="form-control" id="tin" value="{{$menu->rel}}" type="text" name="rel">
                               </div>
                               <small class="text-muted">مثال briefcase</small>
                           </div>
                       </div>
                   </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>الویت </label>
                                <input class="form-control" id="tin" value="{{$menu->order}}" type="text" name="order">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>وضعیت </label>
                                <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="2" {{$menu->status==1 ? "selected" : " "}} value="1">فعال</option>
                                    <option data-select2-id="18" {{$menu->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">




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

@section('script')

    {{ Html::script('/public/ajax/menu.js') }}


@endsection