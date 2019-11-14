<div class="card">
    <div class="card-header">
        <span>تصویر شاخص </span>


    </div>
    <div class="card-body">

        <div class="center-block text-center">

            @if(!$data->hasMedia('images'))

                <img src="{{ url("/public/admin/img/pic/no-pic.png")}}" width="400px" class="img-responsive ">
                <div class="text-center">
                    <div class="custom-file" style="margin-top: 25px">
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                    </div>
                </div>
            @else

                <img src="{{ url("public".$data->getFirstMediaUrl('images'))}}" width="400px" class="img-responsive">
                <div class="text-center">
                    <div class="custom-file" style="margin-top: 25px">
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                    </div>
                </div>

            @endif


        </div>

    </div>
</div>