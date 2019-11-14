@extends("admin.app")

{{inject('admin','pages.edit')}}

@section("content")

    <form action="{{route("pages.update",['id'=>$page->id])}}" method="post" enctype="multipart/form-data" >

   <div class="row">
       <div class="col-md-8">


               {{csrf_field()}}
               {{method_field("PATCH")}}

               <div class="card">
                   <div class="card-header">

                       <span>{{$trans['EditPage']}} - {{$page->title}} </span>

                   </div>
                   <div class="card-body">

                       @include("admin.section.request-error")

                       <div class="form-group">
                           <label>عنوان</label>
                           <div class="input-group">

                               <input value="{{$page->title}}" class="form-control" id="date" type="text" name="title">
                           </div>
                           <small class="text-muted">مثال : عنوان</small>
                       </div>
                       <div class="form-group">
                           <label>متن</label>





<textarea class="input-block-level" id="summernote" name="body" rows="18">{!! $page->body !!}
					</textarea>







                       </div>
                       <div class="form-group">
                           <label>متن توضیحات</label>
                           <div class="input-group">

                               <input value="{{$page->description}}" class="form-control" id="date" type="text" name="description">
                           </div>
                           <small class="text-muted">مثال : سایت فروشگاهی | فروشگاه</small>
                       </div>
                       <div class="form-group">
                           <label>کلید واژه</label>
                           <div class="input-group">

                               <input value="{{$page->keyword}}" class="form-control" id="date" type="text" name="keyword">
                           </div>
                           <small class="text-muted">مثال : سایت فروشگاهی,فروشگاه</small>
                       </div>


                       <div class="row">

                           <div class="col-6">
                               <div class="form-group">
                                   <label>الویت </label>
                                   <div class="input-group">



                                       <input id="order" type="number" value="{{$page->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                                   </div>

                               </div>

                           </div>

                           <div class="col-6">

                               <div class="form-group" data-select2-id="9">
                                   <label>وضعیت </label>
                                   <input name="status" type="checkbox" {{($page->status=="1") ? "checked" : "" }} data-toggle="toggle">
                               </div>

                           </div>

                       </div>
                       <div class="row">
                           <div class="col-6">
                               <div class="form-group">
                                   <label>نحوه نمایش </label>
                                   <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="target">

                                       <option  {{($page->target=="_self" ) ? "selected" : ""}} value="1">صفحه جدید</option>
                                       <option  {{($page->target=="_target" ) ? "selected" : ""}} value="0">صفحه اصلی</option>

                                   </select>
                               </div>
                           </div>

                       </div>
                       <div class="row">


                           <div class="col-6">
                               <label for="inputEmail3" class="control-label col-form-label">دسته بندی  </label>
                               <div class="input-group" id="result-category-url">

                               </div>


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
           @include("admin.section.changePhoto",['data'=>$page])
       </div>
   </div>
    </form>
@endsection

