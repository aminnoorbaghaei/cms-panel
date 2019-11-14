@if(count($errors) > 0)
    <div class="col-lg-12 col-md-12">
        <ul>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-rounded"> <img src="/public/admin/img/general/1.png" width="30" class="rounded-circle" alt="img"> {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            @endforeach

        </ul>
    </div>
@endif