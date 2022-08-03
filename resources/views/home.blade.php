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
<br /><br /><br /><br />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Komulatif</h3>
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
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>Joko</td>
                                                <td>12</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo1">
                                                        <table class="table table-borderless">
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
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>2</td>
                                                                <td>Budi Susanto</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>3</td>
                                                                <td>Mala Oktavia</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>4</td>
                                                                <td>Sinta Laila</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>Dwi</td>
                                                <td>12</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo2">
                                                        <table class="table table-borderless">
                                                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                                                <td>NO</td>
                                                                <td><b>NAMA PETUGAS<b></td>
                                                                <td><b>TARGET<b></td>
                                                                <td><b>REALISASI<b></td>
                                                                <td><b>PERSENTASE<b></td>

                                                            </tr>
                                                            <tbody>
                                                                <td>1</td>
                                                                <td>Viranda Lisa</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>2</td>
                                                                <td>Budi Suprapto</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>3</td>
                                                                <td>Jalla Maharini</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>4</td>
                                                                <td>Laila Vika</td>
                                                                <td>3</td>
                                                                <td>-</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar <strong>bg-success</strong>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Entry Realisasi</h3>
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
                                    <table class="table table-condensed table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>NAMA PENGAWAS</th>
                                                <th>01/08/22</th>
                                                <th>02/08/22</th>
                                                <th>03/08/22</th>
                                                <th>04/08/22</th>
                                                <th>05/08/22</th>
                                                <th>08/08/22</th>
                                                <th>09/08/22</th>
                                                <th>10/08/22</th>
                                                <th>11/08/22</th>
                                                <th>12/08/22</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>Joko</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo3">
                                                        <table class="table table-borderless">
                                                            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                                                                <td>NO</td>
                                                                <td><b>NAMA PETUGAS<b></td>
                                                                <td><b>M<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>W<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>F<b></td>
                                                                <td><b>M<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>W<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>F<b></td>
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
                                                            </tbody>
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
                                                            </tbody>
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
                                                            </tbody>
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
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-toggle="collapse" data-target="#demo4" class="accordion-toggle">
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>Dwi</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo4">
                                                        <table class="table table-borderless">
                                                            <tr data-toggle="collapse" data-target="#demo4" class="accordion-toggle">
                                                                <td>NO</td>
                                                                <td><b>NAMA PETUGAS<b></td>
                                                                <td><b>M<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>W<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>F<b></td>
                                                                <td><b>M<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>W<b></td>
                                                                <td><b>T<b></td>
                                                                <td><b>F<b></td>

                                                            </tr>
                                                            <tbody>
                                                                <td>1</td>
                                                                <td>Viranda Lisa</td>
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
                                                            </tbody>
                                                            <tbody>
                                                                <td>2</td>
                                                                <td>Budi Suprapto</td>
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
                                                            </tbody>
                                                            <tbody>
                                                                <td>3</td>
                                                                <td>Jalla Maharini</td>
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
                                                            </tbody>
                                                            <tbody>
                                                                <td>4</td>
                                                                <td>Laila Vika</td>
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
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection