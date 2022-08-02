@extends('template')
@section('content')
<br></br>
<br></br>
<br></br>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <center>
                <h2 class="card-title"><strong> DATA TARGET PETUGAS</strong> </h2>
            </center>
            <br>
            <form>
                <div class="float-left my-2 mx-3">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Cari...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
            </form>
            <a class="btn btn-success" href="{{ route('target.create') }}"> Tambah Data</a>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Petugas</th>
                    <th>Jumlah Target</th>
                    <th width="250px">Action</th>
                </tr>
                @foreach ($targets as $data)
                <tr>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->nama_petugas}}</td>
                    <td>{{ $data->target }}</td>
                    <td>
                        <form action="{{ route('target.destroy',$data->id) }}" method="POST">
                            <a href="{{ route('target.edit',$data->id) }}">
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>

                        {{-- <form action="{{ route('target.destroy',$data->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('target.edit',$data->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        --}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection