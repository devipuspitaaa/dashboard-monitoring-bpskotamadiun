@extends('template')
@section('content')
<br></br>
<br></br>

{{-- Input Data section begin --}}
<div class="col-md-12">

    <div id="message"></div>

    <div class="card ">
        <div class="card-header ">
            <center>
                <h4 class="card-title"><strong>Tambah Data Survei</strong></h4>
            </center>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('form.store') }}" class="form-horizontal">
                @csrf
                <div class="featured__controls">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nama Kelurahan</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="nama_kelurahan" name="nama_kelurahan" class="form-control" id="nama_kelurahan" aria-describedby="nama_kelurahan" placeholder="masukkan nama keluharan" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-3">
                            <div class="dropdown bootstrap-select show-tick dropup"><select class="selectpicker" data-style="btn btn-info btn-round" multiple="" title="Choose City" data-size="7" tabindex="-98">
                                    <option disabled=""> Multiple Options</option>
                                    <option value="2">Paris </option>
                                    <option value="3">Bucharest</option>
                                    <option value="4">Rome</option>
                                    <option value="5">New York</option>
                                    <option value="6">Miami </option>
                                    <option value="7">Piatra Neamt</option>
                                    <option value="8">Paris </option>
                                    <option value="9">Bucharest</option>
                                    <option value="10">Rome</option>
                                    <option value="11">New York</option>
                                    <option value="12">Miami </option>
                                    <option value="13">Piatra Neamt</option>
                                    <option value="14">Paris </option>
                                    <option value="15">Bucharest</option>
                                    <option value="16">Rome</option>
                                    <option value="17">New York</option>
                                    <option value="18">Miami </option>
                                    <option value="19">Piatra Neamt</option>
                                </select><button type="button" class="dropdown-toggle btn btn-info btn-round bs-placeholder" data-toggle="dropdown" role="button" title="Choose City" aria-expanded="false">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose City</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu" role="combobox" style="max-height: 287px; overflow: hidden; min-width: 228px; will-change: transform;">
                                    <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 287px; overflow-y: auto;">
                                        <ul class="dropdown-menu inner show">
                                            <li class="disabled"><a role="option" class="dropdown-item disabled" aria-disabled="true" tabindex="-1" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text"> Multiple Options</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Paris </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Bucharest</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Rome</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">New York</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Miami </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Piatra Neamt</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Paris </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Bucharest</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Rome</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">New York</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Miami </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Piatra Neamt</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Paris </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Bucharest</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Rome</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">New York</span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Miami </span></a></li>
                                            <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="nc-icon nc-check-2 check-mark"></span><span class="text">Piatra Neamt</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nama Survei</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="nama_survei" name="nama_survei" class="form-control" id="nama_survei" aria-describedby="nama_survei" placeholder="masukkan nama survei" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Total Target</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="total_target" name="total_target" class="form-control" id="total_target" aria-describedby="total_target" placeholder="masukkan total target" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Total Petugas</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="total_petugas" name="total_petugas" class="form-control" id="total_petugas" aria-describedby="total_petugas" placeholder="masukkan total petugas" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Total Pengawas</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="total_pengawas" name="total_pengawas" class="form-control" id="total_pengawas" aria-describedby="total_pengawas" placeholder="masukkan total pengawas" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Jangka Hari Penyelesaian</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="jh_penyelesaian" name="jh_penyelesaian" class="form-control" id="jh_penyelesaian" aria-describedby="jh_penyelesaian" placeholder="masukkan jangka hari selesai" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Target Petugas</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="target_petugas" name="target_petugas" class="form-control" id="target_petugas" aria-describedby="target_petugas" placeholder="masukkan target petugas" required>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {{-- Input Data section end --}}


    <script>

        $(function() {
            // total target / t.petugas / jangka waktu

            function perhitungan() {

                let total_target   = $("input[name='total_target']").val();
                let total_petugas  = $("input[name='total_petugas']").val();
                let jh_penyelesaian = $("input[name='jh_penyelesaian']").val();

                if ( (total_target > 0) && (total_petugas > 0) && (jh_penyelesaian > 0) ) {

                    let hasil = total_target / total_petugas / jh_penyelesaian;
                    $('input[name="target_petugas"]').val( hasil );

                    $('#message').fadeOut();

                } else {

                    let html = `<div class="alert alert-danger">Pemebritauan<br><small>Harap masukkan nilai yang valid</small></div>`;
                    $('#message').html(html).hide().fadeIn(1000);
                }
            }


            $('input[name="total_target"]').keyup(function() { perhitungan(); });
            $('input[name="total_petugas"]').keyup(function() { perhitungan(); });
            $('input[name="jh_penyelesaian"]').keyup(function() { perhitungan(); });

            
        });
    </script>
    @endsection