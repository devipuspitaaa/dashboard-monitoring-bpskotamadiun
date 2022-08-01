@extends('template')
@section('content')
<br></br>
<br></br>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Data Petugas </h4>
            <a class="btn btn-success" href="{{'/inputPetugas'}}"> Tambah Data</a>
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
                        @foreach ($petugas as $data)
                        <tr>

                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->no_ktp }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->tempat_tanggal_lahir }}</td>
                            <td>{{ $data->no_tlp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->nip }}</td>


                            <td>
                                <form action="{{ route('petugas.destroy',$data->id) }}" method="POST">
                                    <a href="{{ route('petugas.edit',$data->id) }}">
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
</div>
</div>
@endsection