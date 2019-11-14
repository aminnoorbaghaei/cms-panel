@extends("admin.app")

{{inject('admin','customers.edit')}}

@section("content")

    <form action="{{route("customers.update",['id'=>$customer->id])}}" method="post" enctype="">

    <div class="row">


        <div class="col-md-8">


                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                        <span>{{$trans['EditCustomer']}} - {{$customer->title}} </span>


                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>{{$trans['Title']}}</label>
                            <div class="input-group">

                                <input class="form-control" name="title" value="{{$customer->title}}" id="date" type="text">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['Text']}}</label>
                            <div class="input-group">

                                <input class="form-control" name="body" value="{{$customer->body}}" id="date" type="text">
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
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Order']}} </label>
                                    <div class="input-group">

                                        <input name="order" value="{{$customer->order}}" class="form-control" id="tin" type="text">
                                    </div>
                                    <small class="text-muted">مثال 2</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group" data-select2-id="9">
                                    <label>وضعیت </label>
                                    <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="2" {{$customer->status==1 ? "selected" : " "}} value="1">فعال</option>
                                        <option data-select2-id="18" {{$customer->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>{{$trans['StatusShow']}}</label>
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
                                            <input type="file" class="custom-file-input" id="customFile">
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
                            <i class="fa fa-dot-circle-o"></i> {{$trans['Upgrade']}}</button>

                    </div>
                </div>


        </div>


        <div class="col-md-4">
            @include("admin.section.changePhoto",['data'=>$customer])

        </div>
    </div>
    </form>
@endsection