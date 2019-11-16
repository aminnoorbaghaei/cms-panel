@extends("client.app")

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="/public/client/img/damir-bosnjak.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="/public/media/33/1.png" alt="...">
                            <h5 class="title">  {{$client->full_name}} </h5>
                        </a>
                        <p class="description">
                            {{$client->full_name}}
                        </p>
                    </div>
                    <p class="description text-center">
                        "I like the way you work it
                        <br> No diggity
                        <br> I wanna bag it up"
                    </p>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                <h5>12
                                    <br>
                                    <small>Files</small>
                                </h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5>2GB
                                    <br>
                                    <small>Used</small>
                                </h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5>24,6$
                                    <br>
                                    <small>Spent</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">زیر مجموعه ها</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="/public/client/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    DJ Khaled
                                    <br />
                        <span class="text-muted">
                          <small>Offline</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="/public/client/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    Creative Tim
                                    <br />
                        <span class="text-success">
                          <small>Available</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="/public/client/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-ms-7 col-7">
                                    Flume
                                    <br />
                        <span class="text-danger">
                          <small>Busy</small>
                        </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">{{$trans['EditProfile']}}‌</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-8 pr-1">
                                <div class="form-group">
                                    <label>{{$trans['HomeAddress']}}</label>
                                    <input type="text" class="form-control" placeholder="{{$trans['HomeAddress']}}" value="{{$client->addressHome}}">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>{{$trans['Age']}}</label>
                                    <input type="text" class="form-control" placeholder="{{$trans['Age']}}" value="{{$client->age}}">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{$trans['Email']}}</label>
                                    <input type="email" class="form-control" placeholder="{{$trans['Email']}}" value="{{$client->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>{{$trans['FirstName']}}</label>
                                    <input type="text" class="form-control" placeholder="{{$trans['FirstName']}}" value="{{$client->first_name}}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>{{$trans['LastName']}}</label>
                                    <input type="text" class="form-control" placeholder="{{$trans['LastName']}}" value="{{$client->last_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{$trans['CompanyAddress']}}</label>
                                    <input type="text" class="form-control" placeholder="{{$trans['CompanyAddress']}}" value="{{$client->addressCompany}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">{{$trans['Upgrade']}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection