<div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card">
                <div class="p-4">
                    <div class="d-flex flex-row">
                        <div class=""><img src="/public/admin/img/general/1.jpg" alt="user" class="rounded-circle" width="100"></div>
                        <div class="pl-4">
                            <h3>نام : {{$current_user->full_name}}</h3>
                            <h4>سمت : {{$current_user->roles()->first()->label}}</h4>
                            <button class="btn btn-success btn-rounded text-white text-uppercase font-14"> ورود به اکانت</button>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col border-right text-center">

                            <h4 class="text-uppercase">تعداد بازدید</h4>
                            <h2 class="font-light">14</h2>
                        </div>
                        <div class="col border-right text-center">
                            <h4 class="text-uppercase">عنوان</h4>
                            <h2 class="font-light">درباره ما</h2>
                            </div>
                        <div class="col text-center">
                            <h4 class="text-uppercase">زمان ایجاد</h4>
                            <h2 class="font-light">145</h2>

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <hr>
                    <h4 class="font-medium text-center mt-4">جزیییات</h4>

                </div>

            </div>


        </div>
    </div>
</div>
