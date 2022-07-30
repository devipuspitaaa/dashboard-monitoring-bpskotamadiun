

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
                            {{-- <div class="form-group">
                                <label for="id">Id : </label>
                                <input  type="text" name="id" class="form-control" id="disabledTextInput" aria-describedby="id" >
                            </div> --}}

                            <div class="form-group">
                                <label for="nama_kelurahan">Nama Kelurahan</label>
                                <input type="nama_kelurahan" name="nama_kelurahan" class="form-control" id="nama_kelurahan" aria-describedby="nama_kelurahan" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_survei">Nama Survei</label>
                                <input type="nama_survei" name="nama_survei" class="form-control" id="nama_survei" aria-describedby="nama_survei" required>
                            </div>

                            <div class="form-group">
                                <label for="total_target">Total Target</label>
                                <input type="total_target" name="total_target" class="form-control" id="total_target" aria-describedby="total_target" required>
                            </div>


                            <div class="form-group">
                                <label for="total_petugas">Total Petugas</label>
                                <input type="total_petugas" name="total_petugas" class="form-control" id="total_petugas" aria-describedby="total_petugas" required>
                            </div>

                            <div class="form-group">
                                <label for="total_pengawas">Total Pengawas</label>
                                <input type="total_pengawas" name="total_pengawas" class="form-control" id="total_pengawas" aria-describedby="total_pengawas" required>
                            </div>

                            <div class="form-group">
                                <label for="jh_penyelesaian">Jangka Hari Penyelesaian</label>
                                <input type="jh_penyelesaian" name="jh_penyelesaian" class="form-control" id="jh_penyelesaian" aria-describedby="jh_penyelesaian" required>
                            </div>

                            <div class="form-group">
                                <label for="target_petugas">Target Petugas</label>
                                <input type="target_petugas" name="target_petugas" class="form-control" id="target_petugas" aria-describedby="target_petugas" required>
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>


                        </div>
                    </div>
                </div>


    {{-- Input Data section end --}}
@endsection

