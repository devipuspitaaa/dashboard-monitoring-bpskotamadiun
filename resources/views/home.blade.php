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
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                name="datatable_length" aria-controls="datatable"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search"
                                                class="form-control form-control-sm" placeholder="Search records"
                                                aria-controls="datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
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

                                            @foreach ( $dt_entry AS $kolom )
                                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>{{ $kolom['infopengawas']->nama_lengkap }}</td>
                                                <td>



                                                    @php

                                                    $survey = 0;
                                                    $total = 0;

                                                    foreach ( $kolom['infopetugas'] AS $nomor => $kolom_petugas ) {

                                                    if ( $dt_survey ) {

                                                    $survey += ($dt_survey->jh_penyelesaian *
                                                    $dt_survey->target_petugas);
                                                    }



                                                    foreach ( $kolom_petugas['target'] AS $kolom_target ) {

                                                    $total += $kolom_target->target;
                                                    }
                                                    }

                                                    // if ( $dt_survey ) {

                                                    // $survey = $dt_survey->jh_penyelesaian *
                                                    $dt_survey->target_petugas;
                                                    // }

                                                    @endphp
                                                    {{ $survey }}
                                                </td>
                                                <td>{{ $total }}</td>
                                                <td>
                                                    @php
                                                    $persen = 0;
                                                    $progress = 0;
                                                    $color = "warning";
                                                    if ( $survey != 0 && $total != 0 ) {

                                                    $persen = $total / $survey * 100;

                                                    if ( $persen == 100 ) {

                                                    $progress = $persen;
                                                    $color = "info";
                                                    } else {

                                                    $progress = $persen + 20;
                                                    }
                                                    }
                                                    @endphp
                                                    <div class="progress">
                                                        {{-- <div class="progress-bar <strong>bg-success</strong>"
                                                            role="progressbar" style="width: 100%" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">

                                                        </div> --}}
                                                        <div class="progress-bar  progress-bar-animated bg-{{ $color }}"
                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: {{ $progress }}%">
                                                            <b>{{ number_format($persen, 2).' %' }}</b>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo1">
                                                        <table class="table table-borderless">
                                                            <tr data-toggle="collapse" data-target="#demo1"
                                                                class="accordion-toggle">
                                                                <td>NO</td>
                                                                <td><b>NAMA PETUGAS<b></td>
                                                                <td><b>TARGET<b></td>
                                                                <td><b>REALISASI<b></td>
                                                                <td><b>PERSENTASE<b></td>

                                                            </tr>

                                                            @foreach ( $kolom['infopetugas'] AS $nomor => $kolom_petugas
                                                            )
                                                            <tbody>
                                                                <td>{{ $nomor + 1 }}</td>
                                                                <td>{{ $kolom_petugas['petugas']->nama_lengkap }}</td>
                                                                <td>
                                                                    @php

                                                                    $survey = 0;

                                                                    if ( $dt_survey ) {

                                                                    $survey = $dt_survey->jh_penyelesaian *
                                                                    $dt_survey->target_petugas;
                                                                    }

                                                                    @endphp
                                                                    {{ $survey }}
                                                                </td>

                                                                @php

                                                                $total = 0;
                                                                foreach ( $kolom_petugas['target'] AS $kolom_target ) {

                                                                $total += $kolom_target->target;
                                                                }
                                                                @endphp
                                                                <td>{{ $total }}</td>
                                                                <td>

                                                                    @php
                                                                    $persen = 0;
                                                                    $progress = 0;
                                                                    $color = "bg-warning";
                                                                    if ( $survey != 0 && $total != 0 ) {

                                                                    $persen = $total / $survey * 100;

                                                                    if ( $persen == 100 ) {

                                                                    $progress = $persen;
                                                                    $color = "";
                                                                    } else {

                                                                    $progress = $persen + 20;
                                                                    }
                                                                    }
                                                                    @endphp
                                                                    <div class="progress">
                                                                        <div class="progress-bar  progress-bar-animated {{ $color }}"
                                                                            role="progressbar" aria-valuenow="75"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $progress }}%">
                                                                            <b>{{ number_format($persen, 2).' %' }}</b>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                name="datatable_length" aria-controls="datatable"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search"
                                                class="form-control form-control-sm" placeholder="Search records"
                                                aria-controls="datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-condensed table-striped">

                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>NAMA PENGAWAS</th>

                                                @foreach ( $kolomTable AS $isi_kolom )
                                                <th>{{ $isi_kolom->tanggal }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $dt_entry AS $kolom )
                                            <tr data-toggle="collapse"
                                                data-target="#demo-{{ $kolom['infopengawas']->id }}"
                                                class="accordion-toggle">
                                                <td><i class="nc-icon nc-simple-add"></i></td>
                                                <td>{{ $kolom['infopengawas']->nama_lengkap }}</td>

                                                @foreach ( $kolomTable AS $isi_kolom )

                                                @php
                                                $total = 0;
                                                @endphp
                                                @foreach ( $kolom['infopetugas'] AS $nomor => $kolom_petugas )

                                                @php
                                                foreach ( $kolom_petugas['target'] AS $kolom_target ) {

                                                if ( $isi_kolom->tanggal == $kolom_target->tanggal ) {

                                                $total += $kolom_target->target;
                                                }
                                                }

                                                @endphp



                                                @endforeach
                                                <td><b>{{ $total }}</b></td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td colspan="12" class="hiddenRow">
                                                    <div class="accordian-body collapse"
                                                        id="demo-{{ $kolom['infopengawas']->id }}">
                                                        <table class="table table-borderless">
                                                            <tr data-toggle="collapse"
                                                                data-target="#demo-{{ $kolom['infopengawas']->id }}"
                                                                class="accordion-toggle">
                                                                <td>NO</td>
                                                                <td><b>NAMA PETUGAS<b></td>

                                                                @foreach ( $kolomTable AS $isi_kolom )
                                                                <td><b>{{ date('l', strtotime($isi_kolom->tanggal))[0]
                                                                        }}</b></td>
                                                                @endforeach


                                                            </tr>

                                                            @foreach ( $kolom['infopetugas'] AS $nomor => $kolom_petugas
                                                            )
                                                            <tbody>
                                                                <td>{{ $nomor + 1 }}</td>
                                                                <td>{{ $kolom_petugas['petugas']->nama_lengkap }}</td>

                                                                @foreach ( $kolomTable AS $isi_kolom )


                                                                @php

                                                                $target = 0;
                                                                foreach ( $kolom_petugas['target'] AS $kolom_target ) {

                                                                if ( $isi_kolom->tanggal == $kolom_target->tanggal ) {

                                                                $target = $kolom_target->target;
                                                                }
                                                                }

                                                                @endphp

                                                                <td><b>{{ $target }}</b></td>





                                                                @endforeach
                                                            </tbody>
                                                            @endforeach

                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
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