<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pegawais = Pegawai::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pegawais = Pegawai::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pegawai::create([
            'id' => $request->id,
            'nama_lengkap' => $request->nama_lengkap,
            'no_ktp' => $request->no_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'nip' => $request->nip,
        ]);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('pegawai.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawais = Pegawai::find($id);
        return view('pegawai.detail', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pegawai::find($id);

        return view('pegawai.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawais = Pegawai::find($id);
        $pegawais-> nama_lengkap = $request->nama_lengkap;
        $pegawais-> no_ktp = $request->no_ktp;
        $pegawais-> jenis_kelamin = $request->jenis_kelamin;
        $pegawais-> tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $pegawais-> no_tlp = $request->no_tlp;
        $pegawais-> alamat = $request->alamat;
        $pegawais-> nip = $request->nip;
        $pegawais->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
    public function tampil(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pegawais = Pegawai::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pegawais = Pegawai::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('pegawai.tampil', compact('pegawai'));
    }
}
