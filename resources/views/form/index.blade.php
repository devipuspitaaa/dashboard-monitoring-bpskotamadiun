
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

                <div class="float-left my-3 mx-5">
                    <form action="{{route('form.index')}}" class="row g-3" method="GET">
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
                    <a class="btn btn-success" href="{{'/inputForm'}}"> Tambah Data</a>
                    <a class="btn btn-success" href="{{'/inputPegawai'}}"> Input Petugas</a>
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
                        <th>Nama Kelurahan</th>
                        <th>Nama Survei</th>
                        <th>Total Target</th>
                        <th>Total Target Revisi</th>
                        <th>Total Petugas</th>
                        <th>Total Petugas Revisi</th>
                        <th>Jangka Hari Penyelesaian</th>
                        <th>Jangka Hari Penyelesaian Revisi</th>
                        <th>Target Petugas</th>
                        <th width="250px">Action</th>
                    </tr>
            @foreach ($form as $data)
            <tr>

            <td>{{ $data->nama_kelurahan }}</td>
            <td>{{ $data->nama_survei }}</td>
            <td>{{ $data->total_target }}</td>
            <td>{{ $data->ttl_target_revisi }}</td>
            <td>{{ $data->total_petugas }}</td>
            <td>{{ $data->ttl_petugas_revisi }}</td>
            <td>{{ $data->jh_penyelesaian }}</td>
            <td>{{ $data->jhp_revisi }}</td>
            <td>{{ $data->target_petugas }}</td>

                <td>
                <form action="{{ route('form.destroy',$data->id) }}" method="POST">
                    
                    <a class="btn btn-primary" href="{{ route('form.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form></td>
                </td>
            </tr>
            @endforeach
            </table>
        </div>
@endsection

