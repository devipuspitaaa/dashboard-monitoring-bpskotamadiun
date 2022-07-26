{{-- @extends('layouts.app')

@extends('template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            </div>

            <!-- Form Search -->

            <div class="float-left my-3 mx-4">
                <form action="{{route('form.tampil')}}" class="row g-3" method="GET">
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

                
        <div class="col-xl-12 col-md-2">
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
        </tr>
        @endforeach
        </table>
     @endsection