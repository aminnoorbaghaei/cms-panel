@extends("admin.rtl.app")

{{inject('admin','cats.create')}}


@section("content")


    <div class="col-md-8">

   <div class="card">
       <div class="card-body">
           <div class="row">

               <div class="col-3">
                   <label for="inputEmail3" class="control-label col-form-label">عنوان </label>
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                       </div>

                       <input autocomplete="off" name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="عنوان" aria-label="Username" aria-describedby="basic-addon1">

                   </div>
               </div>
               <div class="col-3">



                   <label>انتخاب آیتم </label>
                   <select class="form-control select2-single select2-hidden-accessible"  data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="option">



                       @foreach($options as $option)

                           <option data-select2-id="2"  value="{{$option->id}}">{{$option->label}}</option>


                       @endforeach

                   </select>
               </div>
               <div class="col-3">



                   <label>زبان </label>
                   <select class="form-control select2-single select2-hidden-accessible" id="request-category-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">



                       @foreach($languages as $language)

                           <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                       @endforeach

                   </select>
               </div>
               <div class="col-3">
                   <label for="inputEmail3" class="control-label col-form-label">والد </label>
                   <div class="input-group" id="result-category">

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
                       <select name="status" class="form-control">
                           <option value="1" selected>فعال</option>
                           <option value="0">غیر فعال</option>
                       </select>
                   </div>
               </div>
               <div class="col-6">
                   <label for="inputEmail3" class="control-label col-form-label">الویت</label>
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                       </div>
                       <input autocomplete="off" type="text" name="order" class="form-control" value="{{old('order')}}" placeholder="الویت" aria-label="Username" aria-describedby="basic-addon1">
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
    </div>




@endsection

