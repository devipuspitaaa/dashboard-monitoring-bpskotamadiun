@extends('template')
@section('content')
<br></br>
<br></br>
<br></br>
<div class="row g-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
        </div>

        <!-- Form Search -->
        <div class="section-title">
            <center>
                <h3>Data Target Petugas</h3>
            </center>
        </div>
        <form>
            <div class="float-left my-3 mx-5">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari data</button>
                    </span>
                </div>
        </form>
    </div>
    <!-- End Form Search -->
    <div class="float-right my-3 mx-5">
        <a class="btn btn-success" href="{{'/inputTarget'}}"> Tambah Data</a>
    </div>
</div>
</div>
<div class="col-xl-12 col-md-2">
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
            <td>{{ $data->petugas->nama_lengkap }}</td>
            <td>{{ $data->target }}</td>
            <td>
                <form action="{{ route('target.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('target.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
