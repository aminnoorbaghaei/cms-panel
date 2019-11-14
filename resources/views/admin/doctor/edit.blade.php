@extends("admin.app")

@section("content")
    <form action="{{route("doctors.update",['id'=>$doctor->id])}}" method="post" enctype="multipart/form-data" >

    <div class="row">

        <div class="col-md-8">

                {{csrf_field()}}
                {{method_field("PATCH")}}

                <div class="card">
                    <div class="card-header">
                        <span>{{$trans['EditDoctor']}} - {{$doctor->full_name}} </span>


                    </div>
                    <div class="card-body">

                        <fieldset class="form-group">
                            <label>{{$trans['FullName']}}</label>
                            <div class="input-group">

                                <input class="form-control" name="full_name" value="{{$doctor->full_name}}" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['Rank']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->rank}}" name="rank" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['Age']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->age}}" name="age" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['HomeAddress']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->addressHome}}" name="addressHome" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['CompanyAddress']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->addressCompany}}" name="addressCompany" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['Phone']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->phone}}" name="phone" id="date" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['Mobile']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->mobile}}" name="mobile" id="date" type="text">
                            </div>

                        </fieldset>

                        <fieldset class="form-group">
                            <label>{{$trans['Email']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{$doctor->email}}" name="email" id="phone" type="text">
                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <label>{{$trans['Password']}}</label>
                            <div class="input-group">

                                <input class="form-control"   name="password" id="tin" type="password">
                            </div>

                        </fieldset>
                        <fieldset class="form-group" data-select2-id="9">
                            <label>{{$trans['Status']}} </label>
                            <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="2" {{$doctor->status==1 ? "selected" : " "}} value="1">فعال</option>
                                <option data-select2-id="18" {{$doctor->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                            </select>
                        </fieldset>


                    </div>
                    <div class="card-footer">
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i> {{$trans['Upgrade']}}</button>

                    </div>
                </div>


        </div>
        <div class="col-md-4">
            @include("admin.section.changePhoto",['data'=>$doctor])
        </div>

    </div>
    </form>
@endsection