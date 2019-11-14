@extends("admin.rtl.app")

@section("content")
    <form action="{{route("users.update",['id'=>$user->id])}}" method="post" >

        {{csrf_field()}}
        {{method_field("PATCH")}}
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <i class="icon-plus"></i> <span>ویرایش کاربر - {{$user->name}} </span>


                </div>
                <div class="card-body">

                    <fieldset class="form-group">
                        <label>نام و نام خانوادگی</label>
                        <div class="input-group">

                            <input class="form-control" name="name" value="{{$user->name}}" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : امین نوربقایی</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>امتیاز</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->rank}}" name="rank" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : 20</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>سن</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->age}}" name="age" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : 20</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>آدرس سکونت</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->addressHome}}" name="addressHome" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : تهران -تهران کوچه اول بن بست دوم</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>آدرس محل کار</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->addressCompany}}" name="addressCompany" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : تهران -تهران کوچه اول بن بست دوم</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>تلفن ثابت</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->phone}}" name="phone" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : 021445632145</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>موبایل</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->mobile}}" name="mobile" id="date" type="text">
                        </div>
                        <small class="text-muted">مثال : 09195995044</small>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>آدرس الکترونیکی</label>
                        <div class="input-group">

                            <input class="form-control" value="{{$user->email}}" name="email" id="phone" type="text">
                        </div>
                        <small class="text-muted">مثال : noorbaghaei.a2017@gmail.com</small>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>پسورد</label>
                        <div class="input-group">

                            <input class="form-control"   name="password" id="tin" type="password">
                        </div>

                    </fieldset>
                    <fieldset class="form-group" data-select2-id="9">
                        <label>وضعیت </label>
                        <select class="form-control select2-single select2-hidden-accessible" name="status" id="select2-1" data-select2-id="select2-1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="2" {{$user->status==1 ? "selected" : " "}} value="1">فعال</option>
                            <option data-select2-id="18" {{$user->status==0 ? "selected" : " "}}  value="0">غیر فعال</option>

                        </select>
                    </fieldset>


                </div>
                <div class="card-footer">
                    <button class="btn btn-s-md btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> به روز رسانی</button>

                </div>
            </div>
        </div>
    </form>
@endsection