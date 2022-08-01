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
                    <h2>Tambah Target</h2>
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
                <form method="post" action="{{ route('target.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="featured__controls">
                        {{-- <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="tanggal" name="tanggal" class="form-control" id="tanggal"
                                aria-describedby="tanggal" required>
                        </div> --}}

                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <select name="nama_petugas" id="nama_petugas" class="form-control">
                                <option selected disabled>Pilih Petugas</option>
                                @foreach($petugas as $petugas)
                                <option value="{{$petugas->nama_lengkap}}">{{$petugas->nama_lengkap}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="target">Jumlah Target</label>
                            <input type="target" name="target" class="form-control" id="target"
                                aria-describedby="target" required>
                        </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>


        {{-- Input Data section end --}}
        @endsection