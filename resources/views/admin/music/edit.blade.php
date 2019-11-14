@extends("admin.rtl.app")

@section("content")
    <form action="{{route("musics.update",['id'=>$music->id])}}" method="post" >

        {{csrf_field()}}
        {{method_field("PATCH")}}
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> <span>ویرایش آهنگ - {{$music->title}} </span>


                </div>
                <div class="card-body">

                    <fieldset class="form-group">
                        <label>عنوان</label>
                        <div class="input-group">

                            <input class="form-control" name="title" value="{{$music->title}}" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : عنوان</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>متن</label>
                        <div class="input-group">

                       <textarea title="متن" name="body" id="editor1" rows="10" cols="80">
                           {{$music->body}}
                       </textarea>
                        </div>

                    </fieldset>
                    <fieldset class="form-group">
                        <label>الویت </label>
                        <div class="input-group">

                            <input name="order" value="{{$music->order}}" class="form-control" id="tin" type="text">
                        </div>
                        <small class="text-muted">مثال 2</small>
                    </fieldset>
                    <fieldset class="form-group" data-select2-id="9">
                        <label>وضعیت </label>
                        <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="2" {{$music->status==1 ? "selected" : " "}} value="1">فعال</option>
                            <option data-select2-id="18" {{$music->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                        </select>
                    </fieldset>


                </div>
                <div class="card-footer">
                    <button class="btn btn-s-md btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                </div>
            </div>
        </div>
    </form>

    <script>

        CKEDITOR.replace( 'editor1' );
    </script>
@endsection