

@extends('template')
@section('content')
<br></br>
<br></br>

{{-- Input Data section begin --}}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tambah Data</h2>
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
                    </div>
                    <form method="post" action="{{ route('form.store') }}" id="myForm">
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
                            <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>


    {{-- Input Data section end --}}
@endsection

