@extends("admin.app")

{{inject('admin','questions.edit')}}

@section("content")


    <form action="{{route("questions.update",['id'=>$question->id])}}" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                        <span>ویرایش سوال - {{$question->ask}} </span>


                    </div>

                    <div class="card-body">

                        @include("admin.section.request-error")

                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>
                            <div class="input-group">

                                <input value="{{$question->ask}}" name="ask" class="form-control" id="date" type="text">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Answer']}}</label>
                            <div class="input-group">

                                <input value="{{$question->answer}}" name="answer" class="form-control" id="date" type="text">
                            </div>

                        </div>


                        <div class="form-group">

                            <div class="row">
                                <div class="col-6">
                                    <label>{{$trans['Status']}} </label>
                                    <input name="status" type="checkbox" {{($question->status=="1") ? "checked" : "" }} data-toggle="toggle">
                                </div>
                                <div class="col-6">
                                    <label>{{$trans['Order']}} </label>
                                    <div class="input-group">


                                        <input id="order" type="number" value="{{$question->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="form-group">


                            <div class="row">
                                <div class="col-6">
                                    <label>{{$trans['Image']}}  </label>
                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">{{$trans['SelectImage']}}</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <label>{{$trans['Language']}} </label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                        @foreach($languages as $language)

                                            <option data-select2-id="2" {{($question->lang_id==$language->id) ? "selected" : ""}} value="{{$language->id}}">{{$language->name}}</option>


                                        @endforeach

                                    </select>

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
            @include("admin.section.changePhoto",['data'=>$question])
        </div>

    </div>
    </form>

@endsection