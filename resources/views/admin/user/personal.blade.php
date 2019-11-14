


@extends("admin.app")

@section("content")
    <div class="page-content container-fluid">

        <div class="row">



            <div class="col-md-4">
                <div class="card">
                    <div class="border-bottom p-3">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Sharemodel" style="width: 100%">
                            <i class="ti-share mr-2"></i> اشتراک گذاری
                        </button>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="کارمند مورد نظر ..." aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <button class="btn btn-info">جستجو</button>
                                </div>
                            </div>
                        </form>
                        <div class="list-group mt-4">
                            <a href="javascript:void(0)" class="list-group-item active"><i class="ti-layers mr-2"></i> همه کارمندان </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-star mr-2"></i> کارمندان برگزیده</a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-bookmark mr-2"></i> کارمندان جدید</a>
                        </div>
                        <h4 class="card-title mt-4"> وظفیه ها</h4>
                        <div class="list-group">
                            <a href="javascript:void(0)" class="list-group-item">
                                <i class="ti-flag-alt-2 mr-2"></i> انجام شده
                                <span class="badge badge-info float-right">20</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-notepad mr-2"></i> در حال بررسی
                                <span class="badge badge-success float-right">12</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-target mr-2"></i> در انتظار تایید
                                <span class="badge badge-dark float-right">22</span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item"><i class="ti-comments mr-2"></i> بسته شده
                                <span class="badge badge-danger float-right">101</span>
                            </a>
                        </div>
                        <h4 class="card-title mt-4">موارد بیشتر</h4>
                        <div class="list-group">

                            <a href="javascript:void(0)" class="list-group-item">
                                <span class="badge badge-success mr-2"><i class="ti-share-alt"></i></span> بازگردانی کارمندان
                            </a>

                            <a href="javascript:void(0)" class="list-group-item">
                                <span class="badge badge-danger mr-2"><i class="ti-trash"></i></span> پاک کردن همه کارمندان
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center mb-4">
                            <h4 class="card-title">همه کارمندان</h4>
                            <div class="ml-auto">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createmodel">
                                        کارمند جدید
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="file_export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="dt-buttons">
                                    <button class="dt-button buttons-copy buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Copy</span></button> <button class="dt-button buttons-csv buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>PDF</span></button> <button class="dt-button buttons-print btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Print</span></button> </div><div id="file_export_filter" class="dataTables_filter"><label>جستجو:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="file_export"></label></div><table id="file_export" class="table table-bordered nowrap display dataTable no-footer" role="grid" aria-describedby="file_export_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" : activate to sort column descending" style="width: 0px;"> </th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">نام و نام خانوداگی</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 0px;">ایمیل</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 0px;">موبایل</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 0px;">نقش</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">سن</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Joining date: activate to sort column ascending" style="width: 0px;">سابقه فعالیت</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Salery: activate to sort column ascending" style="width: 0px;">موجودی</th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation2" required="">
                                                <label class="custom-control-label" for="customControlValidation2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span> </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation3" required="">
                                                <label class="custom-control-label" for="customControlValidation3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span> </td>
                                        <td>26</td>
                                        <td>10-09-2014</td>
                                        <td>$1800</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation4" required="">
                                                <label class="custom-control-label" for="customControlValidation4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>28</td>
                                        <td>1-10-2013</td>
                                        <td>$2200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation5" required="">
                                                <label class="custom-control-label" for="customControlValidation5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>hritik@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>25</td>
                                        <td>2-10-2017</td>
                                        <td>$200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation6" required="">
                                                <label class="custom-control-label" for="customControlValidation6"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>john@gmail.com</td>
                                        <td>+567 456 789</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>23</td>
                                        <td>10-9-2015</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation7" required="">
                                                <label class="custom-control-label" for="customControlValidation7"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>pawandeep@gmail.com</td>
                                        <td>+678 456 789</td>
                                        <td><span class="label label-warning">Chairman</span></td>
                                        <td>29</td>
                                        <td>10-5-2013</td>
                                        <td>$1500</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation8" required="">
                                                <label class="custom-control-label" for="customControlValidation8"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>ritesh@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span></td>
                                        <td>35</td>
                                        <td>05-10-2012</td>
                                        <td>$3200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation9" required="">
                                                <label class="custom-control-label" for="customControlValidation9"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30"> Salman Khan</a>
                                        </td>
                                        <td>salman@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span></td>
                                        <td>27</td>
                                        <td>11-10-2014</td>
                                        <td>$1800</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation10" required="">
                                                <label class="custom-control-label" for="customControlValidation10"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30">  امین نوربقایی</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>18</td>
                                        <td>12-5-2017</td>
                                        <td>$100</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation11" required="">
                                                <label class="custom-control-label" for="customControlValidation11"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="app-contact-detail.html"><img src="/public/admin/img/general/1.png" alt="user" class="rounded-circle" width="30"> امین نوربقایی</a>
                                        </td>
                                        <td>sonu@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>36</td>
                                        <td>18-5-2009</td>
                                        <td>$4200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr></tbody>
                                </table><div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Showing 1 to 10 of 24 entries</div><div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="file_export_previous"><a href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="file_export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="file_export_next"><a href="#" aria-controls="file_export" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix mr-2"></i> Share With</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                            <input type="text" class="form-control" placeholder="Enter Name Here" aria-label="Username">
                        </div>
                        <div class="row">
                            <div class="col-3 text-center">
                                <a href="#Whatsapp" class="text-success">
                                    <i class="display-6 mdi mdi-whatsapp"></i><br><span class="text-muted">Whatsapp</span>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="#Facebook" class="text-info">
                                    <i class="display-6 mdi mdi-facebook"></i><br><span class="text-muted">Facebook</span>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="#Instagram" class="text-danger">
                                    <i class="display-6 mdi mdi-instagram"></i><br><span class="text-muted">Instagram</span>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="#Skype" class="text-cyan">
                                    <i class="display-6 mdi mdi-skype"></i><br><span class="text-muted">Skype</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form style="text-align: right">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt mr-2"></i> کارمند جدید</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                            <input type="text" class="form-control" placeholder="نام و نام خانوادگی" aria-label="name">
                        </div>
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                            <input type="text" class="form-control" placeholder="موبایل" aria-label="no">
                        </div>
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب عکس</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                        <button type="submit" class="btn btn-success"><i class="ti-save"></i> افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
