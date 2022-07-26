{{-- @extends('layouts.app')

@extends('template')
@section('content')
<div class="row g-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                </div>
                {{-- <div class="float-right my-3 mx-5">
                    <a class="btn btn-success" href="{{'/inputForm'}}"> Tambah Pengumuman</a>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-12 col-md-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <br>
        <table class="table table-bordered">

            <tr>
        
            <h2 class="gold-text tm-welcome-header-2" href="{{'/'}}">
                <span style="color: #0000FF">Form Input Data</span>
            </h2>
            <br>

                <td><b>{{ $data->nama_kelurahan }}</b><br><br>
                {{ $data->nama_survei }}
                {{ $data->total_target }}
                {{ $data->ttl_target_revisi }}
                {{ $data->total_petugas }}
                {{ $data->ttl_petugas_revisi }}
                {{ $data->jh_penyelesaian }}
                {{ $data->jhp_revisi }}
                {{ $data->target_petugas }}


                {{-- <td>
                <form action="{{ route('form.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('form.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form></td> --}}
                </td>
            </tr>
            </table>
        </div>
        <br>
        <br>
     </div>
     @endsection