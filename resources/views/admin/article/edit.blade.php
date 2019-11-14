@extends("admin.app")

{{inject('admin','article.edit')}}


@section("content")

    <form action="{{route("articles.update",['id'=>$article->id])}}" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                        <span>{{$trans['EditArticle']}} - {{$article->title}} </span>


                    </div>


                    <div class="card-body">

                        @include("admin.section.request-error")

                        <div class="form-group">
                            <label>{{$trans['Title']}}</label>
                            <div class="input-group">

                                <input value="{{$article->title}}" class="form-control" id="date" type="text" name="title">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>





<textarea class="input-block-level" id="summernote" name="body" rows="18">{!! $article->body !!}
					</textarea>







                        </div>
                        <div class="form-group">
                            <label>{{$trans['Description']}}</label>
                            <div class="input-group">

                                <input value="{{$article->description}}" class="form-control" id="date" type="text" name="description">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Keyword']}}</label>
                            <div class="input-group">

                                <input value="{{$article->keyword}}" class="form-control" id="date" type="text" name="keyword">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Order']}} </label>
                                    <div class="input-group">



                                        <input id="order" type="number" value="{{$article->order}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                                    </div>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Status']}} </label>
                                    <input name="status" type="checkbox" {{($article->status=="1") ? "checked" : "" }} data-toggle="toggle">
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>نحوه نمایش </label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="target">

                                        <option  {{($article->target=="_self" ) ? "selected" : ""}} value="1">صفحه جدید</option>
                                        <option  {{($article->target=="_target" ) ? "selected" : ""}} value="0">صفحه اصلی</option>

                                    </select>
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

                    </div>




                    <div class="card-footer">
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i> {{$trans['Upgrade']}}</button>

                    </div>
                </div>


        </div>
        <div class="col-md-4">
            @include("admin.section.changePhoto",['data'=>$article])
        </div>
    </div>

    </form>

@endsection