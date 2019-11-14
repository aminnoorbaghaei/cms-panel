@extends("admin.app")


{{inject('admin','services.edit')}}

@section("content")
    <form action="{{route("services.update",['id'=>$service->id])}}" method="post"  enctype="multipart/form-data">

    <div class="row">

        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                     <span>{{$trans['EditService']}} - {{$service->title}} </span>


                    </div>
                    <div class="card-body">

                        @include("admin.section.request-error")
                        <div class="form-group">
                            <label>{{$trans['Title']}}</label>
                            <div class="input-group">

                                <input name="title" class="form-control" id="date" type="text" value="{{$service->title}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>

<textarea class="input-block-level" id="summernote" name="description" rows="18">{!! $service->description !!}
					</textarea>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Order']}} </label>
                                    <div class="input-group">



                                        <input id="order" type="number" value="{{$service->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Icon']}} </label>
                                    <div class="input-group">

                                        <input class="form-control" id="tin" type="text" name="icon" value="{{$service->icon}}">
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Status']}} </label>
                                    <input name="status" type="checkbox" {{($service->status=="1") ? "checked" : "" }} data-toggle="toggle">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>{{$trans['Image']}}  </label>
                                <div class="input-group">

                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">{{$trans['SelectImage']}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-6">
                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Category']}} </label>
                                <div class="input-group" id="result-category-url">

                                </div>


                            </div>


                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i>{{$trans['Upgrade']}}</button>

                    </div>
                </div>


        </div>

        <div class="col-md-4">
            @include("admin.section.changePhoto",['data'=>$service])
        </div>

    </div>
    </form>

@endsection