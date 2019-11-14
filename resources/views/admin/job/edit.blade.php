@extends("admin.app")


{{inject('admin','jobs.edit')}}

@section("content")

    <form action="{{route("jobs.update",['id'=>$job->id])}}" method="post" enctype="multipart/form-data">
    <div class="row">

        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                        <span>{{$trans['EditJob']}} - {{$job->title}} </span>


                    </div>
                    <div class="card-body">

                        @include("admin.section.request-error")

                        <div class="form-group">
                            <label>{{$trans['Title']}}</label>
                            <div class="input-group">

                                <input class="form-control" id="date" type="text" name="title" value="{{$job->title}}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>

<textarea class="input-block-level" id="summernote" name="body" rows="18">{!! $job->body!!}
					</textarea>

                        </div>



                        <div class="form-group" data-select2-id="9">
                            <label>{{$trans['Description']}} </label>
                            <input class="form-control" id="tin" type="text" name="description" value="{{$job->description}}">
                        </div>
                        <div class="form-group" data-select2-id="9">
                            <label>{{$trans['Keyword']}} </label>
                            <input class="form-control" id="tin" type="text" name="keyword" value="{{$job->keyword}}">
                        </div>
                        <div class="row">

                            <div class="col-6">

                                <div class="form-group">
                                    <label>{{$trans['Order']}} </label>
                                    <div class="input-group">

                                        <input id="order" type="number" value="{{$job->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                    </div>

                                </div>

                            </div>
                            <div class="col-6">

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['PeopleCount']}}  </label>

                                    <input id="number" type="number" value="{{$job->number}}" name="number" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-6">

                                <div class="form-group">
                                    <label>{{$trans['Mobile']}} </label>
                                    <div class="input-group">

                                        <input class="form-control" id="tin" type="text" name="mobile" value="{{$job->mobile}}">
                                    </div>

                                </div>

                            </div>
                            <div class="col-6">

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Phone']}}  </label>
                                    <input class="form-control" id="tin" type="text" name="phone" value="{{$job->phone}}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Mobile']}} </label>
                                    <input name="status" type="checkbox" {{($job->status=="1") ? "checked" : "" }} data-toggle="toggle">
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
                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Category']}}  </label>
                                <div class="input-group" id="result-category-url">

                                </div>


                            </div>


                        </div>








                        <div class="row">


                            <div class="col-6">
                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['CompanyAddress']}}  </label>
                                    <input class="form-control" id="tin" type="text" name="address" value="{{$job->address}}">
                                </div>


                            </div>
                            <div class="col-6">

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Email']}}  </label>
                                    <input class="form-control" id="tin" type="text" name="email" value="{{$job->email}}">
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="card-footer">
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i> {{$trans['Upgrade']}}</button>

                    </div>
                </div>


        </div>
        <div class="col-md-4">


                @include("admin.section.changePhoto",['data'=>$job])


        </div>

    </div>
    </form>


@endsection