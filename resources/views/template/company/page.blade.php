@extends("template.company.app")




@section("content")


  <div style="margin:30px" class="text-center">
      @if(!$page->hasMedia('images'))

          <img src="{{ url("/public/admin/img/pic/no-pic.png")}}" width="400px" class="img-responsive ">

      @else

          <img src="{{ url("public".$page->getFirstMediaUrl('images'))}}" width="400px" class="img-responsive">


      @endif
      <br>
      <div class="text-center">
         <p>
             {{$page->title}}
         </p>
      </div>
          <div>
              <p>
                  {!! $page->body !!}
              </p>
          </div>

  </div>




@endsection

