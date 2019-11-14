@extends("admin.app")

{{inject('admin','portfolios')}}

@section("content")
    <div id="loading-div">
        <div class="sk-chasing-dots">
            <div class="sk-child sk-dot1"></div>
            <div class="sk-child sk-dot2"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <i class="icon-note"></i> {{$trans['ManagePortfolios']}}

        </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="margin-bottom">
                    <div class="row">
                        <div class="col-sm-12 col-md-2">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                <label>{{$trans['Show']}}</label>
                                <select id="filterCount" data-parent="portfolio" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="2">2</option>
                                    <option value="5">5</option>
                                    <option value="10 ">10</option>
                                    <option value="100">100</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-10">
                            @include("admin.section.Add",['route'=>route('portfolios.create')])
                        </div>
                    </div>
                </div>
                <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 50px;">شناسه</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">عکس</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 70px;">عنوان</th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 52px;">زمان ثبت </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 38px;">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 82px;">عملیات</th></tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">



                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            <span>{{$trans['CountAllShow']}} : </span>
                            <span id="count"></span>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection