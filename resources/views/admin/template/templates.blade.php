@extends("admin.rtl.app")

@section("content")
    <div class="row">

        <div class="col-sm-12 col-xl-6 ">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>
                    <small> قالب آهنگ</small>
                    <div class="card-header-actions">

                    </div>
                </div>
                <div class="card-body">
                    <div  >
                        <div >

                            <img class="d-block w-100"  src="/admin/img/pic/ahang-pic.png">


                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div  >
                        <div >

                            <button class="btn btn-block btn-success active" type="button" aria-pressed="true">فعال</button>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-xl-6 ">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>
                    <small> قالب کاریابی</small>
                    <div class="card-header-actions">

                    </div>
                </div>
                <div class="card-body">
                    <div  >
                        <div >

                            <img class="d-block w-100"  src="/admin/img/pic/job-pic.png">


                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div  >
                        <div >

                            <button class="btn btn-block btn-dark" type="button" disabled="">غیر فعال</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection