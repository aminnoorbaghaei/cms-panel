@extends("admin.app")

{{inject('admin','customers.create')}}

@section("content")



    <div class="col-md-8">
        <div class="card">
            <form  action="{{route("customers.store")}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-header">
                    <span>{{$trans['AddNewCustomer']}}</span>
                </div>
                <div class="card-body">

                    @include("admin.section.request-error")

                    <div class="form-group">
                        <label>{{$trans['Title']}}</label>
                        <div class="input-group">

                            <input value="{{old("title")}}" name="title" class="form-control" id="date" type="text">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>{{$trans['Text']}}</label>
                        <div class="input-group">

                            <input value="{{old("body")}}" name="body " class="form-control" id="date" type="text">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>{{$trans['Description']}}</label>
                        <div class="input-group">

                            <input value="{{old("description")}}" class="form-control" id="date" type="text" name="description">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>{{$trans['Keyword']}}</label>
                        <div class="input-group">

                            <input value="{{old("keyword")}}" class="form-control" id="date" type="text" name="keyword">
                        </div>

                    </div>


                    <div class="form-group">

                        <div class="row">
                            <div class="col-6">
                                <label>{{$trans['Order']}} </label>
                                <div class="form-group">


                                    <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">


                                </div>


                            </div>
                            <div class="col-6">
                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Status']}} </label>
                                    <input name="status" type="checkbox" data-toggle="toggle" >
                                </div>
                            </div>


                        </div>

                    </div>


                    <div class="form-group">

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['StatusShow']}} </label>
                                    <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="target">
                                        <option  selected value="1">{{$trans['NewPage']}}</option>
                                        <option  value="0">{{$trans['OriginalPage']}}</option>

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



                    </div>
                    <div class="form-group">


                        <div class="form-group">
                            <label>{{$trans['Language']}} </label>
                            <select class="form-control select2-single select2-hidden-accessible" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                @foreach($languages as $language)

                                    <option data-select2-id="2" selected value="{{$language->id}}">{{$language->name}}</option>


                                @endforeach

                            </select>


                        </div>



                    </div>


                </div>

                <div class="card-footer">
                    <button class="btn btn-s-md btn-info" type="submit">
                        <i class="fa fa-dot-circle-o"></i> {{$trans['Add']}}</button>

                </div>
            </form>
        </div>
    </div>

@endsection