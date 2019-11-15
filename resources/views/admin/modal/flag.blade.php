<div class="modal fade" id="createFlag" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card">
                <div class="card-header">

                    <h5 class="text-center">
                        پرچم
                    </h5>
                </div>
                <div class="card-body">

                    <ul id="icon-list">
                        @foreach(config('app.flag')['sample'] as $icon)

                            <li class="btn {{$icon}}" data-value="{{$icon}}"  data-dismiss="modal" aria-label="Close"></li>

                        @endforeach

                    </ul>

                </div>

            </div>


        </div>
    </div>
</div>


<script>


    $("#icon-list li").click(function () {

        $("[name*='icon']").val($(this).data('value'));
    });


</script>
