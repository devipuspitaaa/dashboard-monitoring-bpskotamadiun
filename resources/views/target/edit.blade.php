@extends('template')
@section('content')
<br /><br />
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Target
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
                <form method="post" action="{{ route('target.update', $data->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tanggal" class="formcontrol" id="tanggal"
                            value="{{ $data->tanggal }}" ariadescribedby="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="formcontrol" id="nama_petugas"
                            value="{{ $data->nama_petugas }}" ariadescribedby="nama_petugas">
                    </div>
                    <div class="form-group">
                        <label for="target">Jumlah Target</label>
                        <input type="text" name="target" class="formcontrol" id="target" value="{{ $data->target }}"
                            ariadescribedby="target">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection