@extends('template')
@section('content')
<br /><br />
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
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
                <form method="post" action="{{ route('pengawas.update', $data->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    {{-- <div class="form-group">
                        <label for="id">Id Petani : </label>
                        <input type="text" name="id" class="form-control" id="id" value="{{$data->id}}"
                            aria-describedby="id">
                    </div> --}}

                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="nama_lengkap" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{$data->nama_lengkap}}"
                            aria-describedby="nama_lengkap">
                    </div>

                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="no_ktp" name="no_ktp" class="form-control" id="no_ktp" value="{{$data->no_ktp}}"
                            aria-describedby="no_ktp">
                    </div>

                    <div class="form-group">
                        <label for="tempat_tanggal_lahir">Jenis Kelamin</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                        value="L" required>
                                    Laki - Laki
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                        value="P" required>
                                    Perempuan
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                        <input type="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control" id="tempat_tanggal_lahir"
                            value="{{$data->tempat_tanggal_lahir}}" aria-describedby="tempat_tanggal_lahir">
                    </div>

                    <div class="form-group">
                        <label for="no_tlp">No Telepon</label>
                        <input type="no_tlp" name="no_tlp" class="form-control" id="no_tlp"
                            value="{{$data->no_tlp}}" aria-describedby="no_tlp">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat"
                            value="{{$data->alamat}}" aria-describedby="alamat">
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="nip" name="nip" class="form-control" id="nip"
                            value="{{$data->nip}}" aria-describedby="nip">
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success" href="{{ route('pengawas.index') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection