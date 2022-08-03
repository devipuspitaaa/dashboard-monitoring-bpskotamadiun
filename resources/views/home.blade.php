{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
    <br><br>
    <a class="btn btn-success" href="{{'/dashboard'}}"> Go to Web OPERA CANDI</a>
</div>
</div>
</div>
</div>
</div>
@endsection --}}
@extends('template')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Komulatif</h4>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                        </div>
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 53px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nama</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 73px;" aria-label="Position: activate to sort column ascending">Target</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 55px;" aria-label="Office: activate to sort column ascending">Realisasi</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">Persentase</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Nama</th>
                                                <th rowspan="1" colspan="1">Target</th>
                                                <th rowspan="1" colspan="1">Realisasi</th>
                                                <th rowspan="1" colspan="1">Persentase</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1" class="card-header" role="tab" id="heading1">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="nc-icon nc-simple-add"></i>
                                                    </a>
                                                    Nama Pengawas
                                                    <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                                        <div class="card-body">
                                                            Nama Petugas
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>Tokyo</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 65%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">650%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1" class="card-header" role="tab" id="heading1">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapseTwo">
                                                        <i class="nc-icon nc-simple-add"></i>
                                                    </a>
                                                    Nama Pengawas
                                                    <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                                        <div class="card-body">
                                                            Nama Petugas
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>Tokyo</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">90%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 42 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_full_numbers" id="datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item first disabled" id="datatable_first"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">First</a></li>
                                            <li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                            <li class="paginate_button page-item last" id="datatable_last"><a href="#" aria-controls="datatable" data-dt-idx="8" tabindex="0" class="page-link">Last</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Entry Realisasi</h4>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                        </div>
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 53px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nama</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">01/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">02/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">03/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">04/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">05/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">06/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">07/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">08/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">09/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">10/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">11/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">12/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">13/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">14/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">15/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">16/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">17/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">18/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">19/08/22</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 31px;" aria-label="Age: activate to sort column ascending">20/08/22</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1" class="card-header" role="tab" id="heading1">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapseTwo">
                                                        <i class="nc-icon nc-simple-add"></i>
                                                    </a>
                                                    Joko
                                                    <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                                        <div class="card-body">
                                                            Diana
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1" class="card-header" role="tab" id="heading1">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapseTwo">
                                                        <i class="nc-icon nc-simple-add"></i>
                                                    </a>
                                                    Farid
                                                    <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                                        <div class="card-body">
                                                            Irawan
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 42 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_full_numbers" id="datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item first disabled" id="datatable_first"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">First</a></li>
                                            <li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                            <li class="paginate_button page-item last" id="datatable_last"><a href="#" aria-controls="datatable" data-dt-idx="8" tabindex="0" class="page-link">Last</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    TABEL KOMULATIF
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NAMA PENGAWAS</th>
                                <th>TARGET</th>
                                <th>REALISASI</th>
                                <th>PERSENTASE</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                <td>Joko</td>
                                <td>12</td>
                                <td>-</td>
                                <td>-</td>

                            </tr>

                            <tr>
                                <td colspan="12" class="hiddenRow">
                                    <div class="accordian-body collapse" id="demo1">
                                        <table class="table table-striped">
                                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                                <td>NO</td>
                                                <td><b>NAMA PETUGAS<b></td>
                                                <td><b>TARGET<b></td>
                                                <td><b>REALISASI<b></td>
                                                <td><b>PERSENTASE<b></td>

                                            </tr>
                                            <tbody>
                                                <td>1</td>
                                                <td>Diana Safira</td>
                                                <td>3</td>
                                                <td>-</td>
                                                <td>-</td>
                                            <tbody>
                                                <td>2</td>
                                                <td>Budi Susanto</td>
                                                <td>3</td>
                                                <td>-</td>
                                                <td>-</td>
                                            <tbody>
                                                <td>3</td>
                                                <td>Mala Oktavia</td>
                                                <td>3</td>
                                                <td>-</td>
                                                <td>-</td>
                                            <tbody>
                                                <td>4</td>
                                                <td>Sinta Laila</td>
                                                <td>3</td>
                                                <td>-</td>
                                                <td>-</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
                </td>
                </tr>



                <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                    <td>Bimantara</td>
                    <td>12</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td colspan="6" class="hiddenRow">
                        <div id="demo2" class="accordian-body collapse">Demo2</div>
                    </td>
                </tr>
                <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Dracena</td>
                    <td>SP</td>
                    <td> New</td>
                </tr>
                <tr>
                    <td colspan="6" class="hiddenRow">
                        <div id="demo3" class="accordian-body collapse">Demo3 sadasdasdasdasdas</div>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    TABEL ENTRY REALISASI
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NAMA PENGAWAS</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                <td>Joko</td>
                                

                            </tr>

                            <tr>
                                <td colspan="12" class="hiddenRow">
                                    <div class="accordian-body collapse" id="demo1">
                                        <table class="table table-striped">
                                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                                <td>NO</td>
                                                <td><b>NAMA PETUGAS<b></td>
                                                <td><b>01/08/2022<b></td>
                                                <td><b>02/08/2022<b></td>
                                                <td><b>03/08/2022<b></td>
                                                <td><b>04/08/2022<b></td>
                                                <td><b>05/08/2022<b></td>
                                                <td><b>06/08/2022<b></td>
                                                <td><b>07/08/2022<b></td>
                                                <td><b>08/08/2022<b></td>
                                                <td><b>09/08/2022<b></td>
                                                <td><b>10/08/2022<b></td>
                                                <td><b>11/08/2022<b></td>
                                               

                                            </tr>
                                            <tbody>
                                                <td>1</td>
                                                <td>Diana Safira</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                
                                            <tbody>
                                                <td>2</td>
                                                <td>Budi Susanto</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                            <tbody>
                                                <td>3</td>
                                                <td>Mala Oktavia</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                            <tbody>
                                                <td>4</td>
                                                <td>Sinta Laila</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>3</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
                </td>
                </tr>



                <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                    <td>Bimantara</td>
                    <td>12</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td colspan="6" class="hiddenRow">
                        <div id="demo2" class="accordian-body collapse">Demo2</div>
                    </td>
                </tr>
                <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                    <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Dracena</td>
                    <td>SP</td>
                    <td> New</td>
                </tr>
                <tr>
                    <td colspan="6" class="hiddenRow">
                        <div id="demo3" class="accordian-body collapse">Demo3 sadasdasdasdasdas</div>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>
</div>
@endsection