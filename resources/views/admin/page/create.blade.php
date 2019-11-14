@extends("admin.app")

{{inject('admin','pages.create')}}


@section("content")

    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="card">





                <form action="{{route('pages.store')}}" method="POST" style="margin-bottom: 0" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="card-header">
                        <h4 class="card-title">{{$trans['AddNewPage']}}</h4>

                        @include('admin.section.request-error')


                    </div>


                    <div class="card-body">



                        <div class="form-group">
                            <label>{{$trans['Title']}}</label>
                            <div class="input-group">

                                <input value="{{old("title")}}" class="form-control" id="date" type="text" name="title">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>



<textarea class="input-block-level" id="summernote" name="body" rows="18">
					</textarea>





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

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Status']}} </label>

                                    <input name="status" type="checkbox" selected data-toggle="toggle">

                                </div>

                            </div>

                        </div>
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
                        <div class="row">


                            <div class="col-12">

                                <label>{{$trans['Language']}} </label>
                                <select  class="form-control select2-single select2-hidden-accessible" id="request-category" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                    <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                    @foreach($languages as $language)

                                        <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                    @endforeach

                                </select>

                            </div>





                        </div>




                        <div class="row" style="margin-top: 25px">

                            <div class="col-12">
                                <label>امکانات صفحه </label>
                                <select  class="form-control select2-single select2-hidden-accessible" id="request-category" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="addon[]"  multiple >


                                    @foreach($addons as $addon)

                                        <option data-select2-id="2"   value="{{$addon->id}}">{{$addon->label}}</option>


                                    @endforeach

                                </select>
                            </div>





                        </div>

                        <div class="card-footer">
                            <div class="action-form">
                                <div class="form-group mb-0 text-left">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">{{$trans['Save']}}</button>

                                </div>
                            </div>
                        </div>
                </form>





            </div>
        </div>

    </div>

@endsection

