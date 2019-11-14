@extends("admin.app")

{{inject('admin','menus.create')}}


@section("content")

    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="card">

                <form action="{{route('menus.store')}}" method="POST" style="margin-bottom: 0">

                    {{csrf_field()}}
                    <div class="card-header">
                        <h4 class="card-title">{{$trans['AddNewMenu']}}</h4>

                        @include('admin.section.request-error')




                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Title']}} </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                    </div>
                                    <input autocomplete="off" name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="عنوان" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['ManualLink']}} </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                    </div>
                                    <input autocomplete="off" name="manual_hrefUrl" type="text" class="form-control" value="" placeholder="{{$trans['ManualLink']}}" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label col-form-label">{{$trans['Rel']}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon11"><i class="mdi mdi-shape-polygon-plus"></i></span>
                                        </div>
                                        <select name="rel" class="form-control">
                                            <option selected>follow</option>
                                            <option>no-follow</option>
                                            <option>noreferrer</option>
                                            <option>noopener</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label col-form-label">{{$trans['Icon']}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon11"><i class="mdi mdi-shape-polygon-plus"></i></span>
                                        </div>
                                        <span class='btn btn-success model_img img-fluid' href='#' data-toggle='modal' data-target='#createIcon'>آیکون</span>
                                        <input autocomplete="off" name="icon" type="text" class="form-control" value="{{old('icon')}}" placeholder="{{$trans['Icon']}}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Order']}} </label>



                                        <input id="order" type="number" value="{{old('order')}}" name="order" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info">




                                </div>

                            </div>



                        </div>



                        <div class="row">


                            <div class="col-4">

                                <label>{{$trans['Language']}} </label>
                                <select class="form-control select2-single select2-hidden-accessible" id="request-menu"  data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                    @foreach($languages as $language)

                                        <option data-select2-id="2" selected value="{{$language->id}}">{{$language->name}}</option>


                                    @endforeach

                                </select>
                            </div>


                            <div class="col-4">

                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Parent']}} </label>

                                <div class="input-group" id="result-parent">

                                </div>


                            </div>
                            <div class="col-4">

                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Link']}} </label>

                                <div class="input-group" id="result-href">

                                </div>


                            </div>

                        </div>
                        <br>

                        <div class="row">



                            <div class="col-12">

                                <div class="form-group" data-select2-id="9">
                                    <label>{{$trans['Status']}} </label>

                                    <input name="status" type="checkbox" selected data-toggle="toggle">

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
                </form>





            </div>
        </div>

    </div>

    @include("admin.modal.icon");

@endsection

