@extends("admin.rtl.app")


@section("content")

@include('admin.modal.menu')


    <div class="card">
        <div class="card-header">
            <i class="icon-note"></i> مدیریت  منو ها

        </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row"><div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                            <label>نمایش <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <a href="{{route('cats.create')}}" title="افزودن">
                                <i class="mdi mdi-plus" style="font-size: 30px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 50px;">شناسه</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">آیکون</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">عنوان</th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 22px;">زمان ثبت </th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 38px;">الویت</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 38px;">نامک</th>


                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 38px;">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 82px;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cats as $cat)

                                    <tr role="row" class="even">
                                <td class="sorting_1">1</td>
                                <td class="text-center">
                                    <i class="fa fa-home" style="font-size:24px"></i>
                                </td>
                                <td class="sorting_1">{{$cat->name}}</td>

                                <td>{{$cat->created_at}}</td>
                                        <td>{{$cat->order}}</td>
                                        <td>{{$cat->slug}}</td>


                                @if($cat->status==1)
                                            <td>
                                                <span class="badge badge-success">فعال</span>
                                            </td>
                                    @elseif($cat->status==0)
                                            <td>
                                                <span class="badge badge-danger">غیر فعال</span>
                                            </td>
                                        @endif
                                <td style="display: flex;align-items: center">
                                    <button class="btn btn-success"  title="جزییات"  data-toggle="modal" data-target="#createmodel">
                                        <i class="fa fa-search-plus"  ></i>
                                    </button>
                                    <a class="btn btn-info" href="{{route("cats.edit",["id"=>$cat->id])}}" title="ویرایش">
                                        <i class="fa fa-edit" title="ویرایش"></i>
                                    </a>
                                    <form style="margin-bottom: 0" action="{{route("cats.destroy",["id"=>$cat->id])}}" method="post" class="display-inline-block">
                                        {{method_field("DELETE")}}
                                        {{csrf_field()}}

                                        <button   class="btn btn-danger" title="حذف">
                                            <i class="fa fas fa-trash" ></i>
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
                        {{--<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">--}}

                                {{--{!! $cats->render() !!}--}}

                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection