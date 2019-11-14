@extends("admin.rtl.app")

@section("content")
    <div class="card">
        <div class="card-header">
            <i class="icon-note"></i> مدیریت  آهنگ ها

        </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>جستجو<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 50px;">شناسه</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">عکس</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">عنوان</th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 52px;">زمان ثبت </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 38px;">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 82px;">عملیات</th></tr>
                            </thead>
                            <tbody>

                            @foreach($musics as $music)
                            <tr role="row" class="even">

                                <td class="sorting_1">{{$music->id}}</td>
                                <td class="text-center">
                                    <i class="fa fa-paypal" style="font-size:24px"></i>
                                </td>
                                <td class="sorting_1">{{$music->title}} </td>

                                <td>2012/06/01</td>

                                @if($music->status==1)
                                    <td>
                                        <span class="badge badge-success">فعال</span>
                                    </td>
                                @elseif($music->status==0)
                                    <td>
                                        <span class="badge badge-danger">غیر فعال</span>
                                    </td>
                                @endif
                                <td>
                                    <a class="btn btn-success" href="#">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{route("musics.edit",["id"=>$music->id])}}" title="ویرایش">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("musics.destroy",["id"=>$music->id])}}" method="post" class="display-inline-block">
                                        {{method_field("DELETE")}}
                                        {{csrf_field()}}

                                        <button   class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">قبل</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">بعد</a></li></ul></div></div></div></div>
        </div>
    </div>

@endsection