@extends("admin.app")

{{inject('admin','products.edit')}}

@section("content")
    <form action="{{route("products.update",['id'=>$product->id])}}" method="post" enctype="multipart/form-data" >
   <div class="row">

       <div class="col-md-8">


               {{csrf_field()}}
               {{method_field("PATCH")}}

               <div class="card">
                   <div class="card-header">
                    <span>{{$trans['EditProduct']}} - {{$product->title}} </span>


                   </div>
                   <div class="card-body">

                       <div class="card-body">

                           @include("admin.section.request-error")
                           <div class="form-group">
                               <label>عنوان</label>
                               <div class="input-group">

                                   <input value="{{$product->title}}" name="title" class="form-control" id="date" type="text">
                               </div>

                           </div>
                           <div class="form-group">
                               <label>توضیحات</label>
                               <div class="input-group">

                                   <input value="{{$product->excerpt}}" name="excerpt" class="form-control" id="date" type="text">
                               </div>

                           </div>
                           <div class="form-group">
                               <label>{{$trans['Description']}}</label>
                               <div class="input-group">

                                   <input value="{{$product->description}}" name="description" class="form-control" id="date" type="text">
                               </div>

                           </div>
                           <div class="form-group">
                               <label>{{$trans['Keyword']}}</label>
                               <div class="input-group">

                                   <input value="{{$product->keyword}}" name="keyword" class="form-control" id="date" type="text">
                               </div>

                           </div>
                           <div class="form-group">
                               <label>قیمت</label>
                               <div class="input-group">

                                   <input value="{{$product->price}}" name="price" class="form-control" id="date" type="text">
                               </div>

                           </div>

                           <div class="row">
                               <div class="col-6">
                                   <div class="form-group">
                                       <label>الویت </label>
                                       <div class="input-group">


                                           <input id="order" type="number" value="{{$product->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                       </div>

                                   </div>


                               </div>
                               <div class="col-6">
                                   <div class="form-group" data-select2-id="9">
                                       <label>وضعیت </label>
                                       <input name="status" type="checkbox" {{($product->status=="1") ? "checked" : "" }} data-toggle="toggle">
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


                               <div class="col-6">
                                   <label for="inputEmail3" class="control-label col-form-label">دسته بندی  </label>
                                   <div class="input-group" id="result-category-url">

                                   </div>


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

           @include("admin.section.changePhoto",['data'=>$product])




           </div>
       </div>

   </div>
    </form>
@endsection