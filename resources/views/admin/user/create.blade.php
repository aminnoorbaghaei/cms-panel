@extends("admin.app")

{{inject('admin','users.create')}}

@section("content")
    <div class="row">
        <div class="col-md-8">
        <form action="{{route("users.store")}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

                <div class="card">
                    <div class="card-header">

                        <span>{{$trans['AddNewUser']}}</span>

                    </div>
                    <div class="card-body">


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['FirstName']}} </label>
                                    <div class="input-group">

                                        <input class="form-control" value="{{old("first_name")}}" name="first_name" id="date" type="text">
                                    </div>

                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> {{$trans['LastName']}}</label>
                                    <div class="input-group">

                                        <input class="form-control" value="{{old("last_name")}}" name="last_name" id="date" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Rank']}}</label>
                                    <div class="input-group">

                                        <input class="form-control" value="{{old("rank")}}" name="rank" id="date" type="text">
                                    </div>

                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>{{$trans['Age']}}</label>
                                    <div class="input-group">

                                        <input class="form-control" value="{{old("age")}}" name="age" id="date" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{$trans['HomeAddress']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{old("addressHome")}}" name="addressHome" id="date" type="text">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>{{$trans['CompanyAddress']}}</label>
                            <div class="input-group">

                                <input class="form-control" value="{{old("addressCompany")}}" name="addressCompany" id="date" type="text">
                            </div>

                        </div>
                       <div class="row">
                           <div class="col-6">
                               <div class="form-group">
                                   <label>{{$trans['Phone']}}</label>
                                   <div class="input-group">

                                       <input class="form-control" value="{{old("phone")}}" name="phone" id="date" type="text">
                                   </div>

                               </div>

                           </div>
                           <div class="col-6">
                               <div class="form-group">
                                   <label>{{$trans['Mobile']}}</label>
                                   <div class="input-group">

                                       <input class="form-control" value="{{old("mobile")}}" name="mobile" id="date" type="text">
                                   </div>

                               </div>
                           </div>
                       </div>

                        <div class="form-group">
                            <label>آدرس الکترونیکی</label>
                            <div class="input-group">

                                <input class="form-control" value="{{old("email")}}" name="email" id="phone" type="text">
                            </div>
                            <small class="text-muted">مثال : noorbaghaei.a2017@gmail.com</small>
                        </div>
                        <div class="form-group">
                            <label>پسورد</label>
                            <div class="input-group">

                                <input class="form-control" name="password" id="tin" type="password">
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
                                <select  class="form-control select2-single select2-hidden-accessible" id="request-role" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="lang">

                                    <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                    @foreach($languages as $language)

                                        <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                    @endforeach

                                </select>

                            </div>
                            <div class="col-6">
                                <label for="inputEmail3" class="control-label col-form-label">{{$trans['Roles']}}  </label>
                                <div class="input-group" id="result-role">

                                </div>


                            </div>




                        </div>


                    </div>
                    <div class="card-footer">
                        <button class="btn btn-s-md btn-info" type="submit">
                            <i class="fa fa-dot-circle-o"></i> {{$trans['Add']}}</button>

                    </div>
                </div>

        </form>
        </div>
        <div class="col-md-4">

            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> {{$trans['Permissions']}}</h4>
                        <ul class="nav nav-pills mt-4 mb-1">
                            <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">{{$trans['Role']}}</a> </li>
                            <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">{{$trans['Permission']}}</a> </li>

                        </ul>
                        <div class="tab-content border p-4">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">

                                    <div class="col-12">
                                        <form action="{{route("insert.role")}}" method="POST" enctype="multipart/form-data">

                                            {{csrf_field()}}

                                            <div class="card">
                                                <div class="card-header">
                                                    <span>{{$trans['AddNewRole']}} </span>



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
                                                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Label']}} </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-format-title"></i></span>
                                                                </div>

                                                                <input autocomplete="off" name="label" type="text" class="form-control" value="{{old('label')}}" placeholder="برچسب" aria-label="Username" aria-describedby="basic-addon1">

                                                            </div>
                                                        </div>


                                                        <div class="col-12">

                                                            <label>{{$trans['Language']}} </label>
                                                            <select  class="form-control select2-single select2-hidden-accessible" id="request-role-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="langRole">

                                                                <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                                                @foreach($languages as $language)

                                                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                                                @endforeach

                                                            </select>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Roles']}}  </label>
                                                            <div class="input-group" id="result-role-url">

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
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route("health.insert")}}" method="POST" enctype="multipart/form-data">

                                            {{csrf_field()}}

                                            <div class="card">
                                                <div class="card-header">
                                                    <span>{{$trans['AddNewPermission']}} </span>



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
                                                            <select  class="form-control select2-single select2-hidden-accessible" id="request-permission-url" data-select2-id="select2-1" tabindex="-1" aria-hidden="true" name="langHeal">

                                                                <option data-select2-id="2" selected value="0">{{$trans['SelectLanguage']}}</option>

                                                                @foreach($languages as $language)

                                                                    <option data-select2-id="2"  value="{{$language->id}}">{{$language->name}}</option>


                                                                @endforeach

                                                            </select>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputEmail3" class="control-label col-form-label"> {{$trans['Permissions']}}  </label>
                                                            <div class="input-group" id="result-permission-url">

                                                            </div>


                                                        </div>




                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="inputEmail3" class="control-label col-form-label">{{$trans['Status']}}</label>
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
                            </div>

                        </div>


                    </div>
                </div>

            </div>





        </div>
    </div>
@endsection