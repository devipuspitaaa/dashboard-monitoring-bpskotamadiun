
@extends('template')
@section('content')
<br></br>
<br></br>
<br></br>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <center>
                <h2 class="card-title"> Data Survei </h2>
            </center>
            <form>
                <div class="float-left my-2 mx-3">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Cari...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
            </form>
            <a class="btn btn-success my-2" href="{{'/inputForm'}}"> Tambah Data</a>

        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

        <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>
                                Nama Kelurahan
                            </th>
                            <th>
                                Nama Survei
                            </th>
                            <th>
                                Total Target
                            </th>
                            <th>
                                Total Petugas
                            </th>
                            <th>
                                Total Pengawas
                            </th>
                            <th>
                                Jangka Hari Penyelesaian
                            </th>
                            <th>
                                Target Petugas
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
            @foreach ($form as $data)
            <tr>

            <td>{{ $data->nama_kelurahan }}</td>
            <td>{{ $data->nama_survei }}</td>
            <td>{{ $data->total_target }}</td>
            <td>{{ $data->total_petugas }}</td>
            <td>{{ $data->total_pengawas }}</td>
            <td>{{ $data->jh_penyelesaian }}</td>
            <td>{{ $data->target_petugas }}</td>

                <td>
                <form action="{{ route('form.destroy',$data->id) }}" method="POST">
                                    <a href="{{ route('form.edit',$data->id) }}">
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
          
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
</div>
@endsection

