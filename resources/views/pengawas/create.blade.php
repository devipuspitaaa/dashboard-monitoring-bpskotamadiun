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
                <form method="post" action="{{ route('pengawas.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="featured__controls">

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="nama_lengkap" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                aria-describedby="nama_lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="no_ktp">No KTP</label>
                            <input type="no_ktp" name="no_ktp" class="form-control" id="no_ktp"
                                aria-describedby="no_ktp" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                aria-describedby="jenis_kelamin" required>
                        </div>


                        <div class="form-group">
                            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                            <input type="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control"
                                id="tempat_tanggal_lahir" aria-describedby="tempat_tanggal_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="no_tlp">No Telepon</label>
                            <input type="no_tlp" name="no_tlp" class="form-control" id="no_tlp"
                                aria-describedby="no_tlp" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" class="form-control"
                                id="alamat" aria-describedby="alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="nip" name="nip" class="form-control"
                                id="nip" aria-describedby="nip" required>
                        </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>


        {{-- Input Data section end --}}
        @endsection