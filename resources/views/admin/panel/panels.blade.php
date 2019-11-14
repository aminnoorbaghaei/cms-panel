@extends("admin.rtl.app")


@section("content")

@include('admin.modal.menu')


   <div class="row">
       <div class="col-10">
           <div class="card">
               <div class="card-header">
                   امکانات پنل مدیریت

               </div>
               <div class="card-body">

                   @foreach($options as $option)

                       <div class="row">
                           <div class="col-sm-12 col-md-10">
                               <div class="card bg-info">
                                   <div class="card-body text-white">
                                       <div class="d-flex flex-row">
                                           <div class="display-6 align-self-center"><i class="ti-wallet"></i></div>
                                           <div class="p-2 align-self-center">
                                               <h4 class="mb-0">{{$option->label}}</h4>

                                           </div>
                                           <div class="ml-auto align-self-center">
                                               <h2 class="font-medium mb-0">پشتیانی</h2>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   @endforeach


               </div>
           </div>

       </div>
   </div>


@endsection