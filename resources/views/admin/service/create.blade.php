@extends("admin.app")

{{inject('admin','services.create')}}

@section("content")

<div class="row">

    <div class="col-md-8">
        <div class="card">
            <form  action="{{route("services.store")}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-header">
                    <span>{{$trans['AddNewService']}}</span>
                </div>
                <div class="card-body">

                    @include("admin.section.request-error")
                    <div class="form-group">
                        <label>{{$trans['Title']}}</label>
                        <div class="input-group">

                            <input name="title" class="form-control" id="date" type="text" value="{{old('title')}}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>{{$trans['Text']}}</label>

<textarea class="input-block-level" id="summernote" name="description" rows="18">{!! old('description') !!}
					</textarea>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>{{$trans['Order']}} </label>

                                <div class="form-group">

                                    <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                </div>

                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>{{$trans['Icon']}} </label>
                                <div class="input-group">

                                    <input class="form-control" id="tin" type="text" name="icon" value="{{old('icon')}}">
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">

                            <div class="form-group" data-select2-id="9">
                                <label>{{$trans['Status']}} </label>

                                <input name="status" type="checkbox" selected data-toggle="toggle">

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

                            <label>{{$trans['Language']}} </label>
                            <select  class="form-control select2-single select2-hidden-accessible" id="request-category" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                @foreach($languages as $language)

                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>

                        </div>
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Category']}}  </label>
                            <div class="input-group" id="result-category">

                            </div>


                        </div>




                    </div>


                </div>

                <div class="card-footer">
                    <button class="btn btn-s-md btn-info" type="submit">
                        <i class="fa fa-dot-circle-o"></i>{{$trans['Add']}}</button>

                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">

        <form action="{{route("cat.insert.service")}}" method="POST">

            {{csrf_field()}}

            <div class="card">
                <div class="card-header">
                    <span>{{$trans['AddNewCat']}} </span>



                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Title']}} </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                </div>

                                <input autocomplete="off" name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="عنوان" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                        </div>

                        <div class="col-12">

                            <label>{{$trans['Language']}} </label>
                            <select  class="form-control select2-single select2-hidden-accessible" id="request-category-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="langCat">

                                <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                @foreach($languages as $language)

                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>

                        </div>
                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Category']}}  </label>
                            <div class="input-group" id="result-category-url">

                            </div>


                        </div>


                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['StatusShow']}}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="mdi mdi-eye"></i></span>
                                </div>
                                <input name="status" type="checkbox" data-toggle="toggle" >
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Order']}}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                </div>
                                <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="action-form">
                        <div class="form-group mb-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light">{{$trans['Save']}}</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>



    </div>



</div>





@endsection

