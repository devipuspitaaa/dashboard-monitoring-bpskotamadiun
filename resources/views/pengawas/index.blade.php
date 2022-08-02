@extends('template')
@section('content')
<br></br>
<br></br>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <center>
                <h2 class="card-title"><strong> DATA PENGAWAS</strong> </h2>
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
            <a class="btn btn-success" href="{{ route('pengawas.create') }}"> Tambah Data</a>
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
                                Nama Lengkap
                            </th>
                            <th>
                                No KTP
                            </th>
                            <th>
                                Jenis Kelamin
                            </th>
                            <th>
                                Tanggal Lahir
                            </th>
                            <th>
                                No. Telepon
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                NIP
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengawas as $data)
                        <tr>

                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->no_ktp }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->tempat_tanggal_lahir }}</td>
                            <td>{{ $data->no_tlp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->nip }}</td>


                            <td>
                                <form action="{{ route('pengawas.destroy',$data->id) }}" method="POST">
                                    <a href="{{ route('pengawas.edit',$data->id) }}">
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
        <!-- Form Search -->

    </div>
    <!-- End Form Search -->
</div>
</div>
@endsection