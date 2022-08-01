<?php

use App\Models\Petugas;
namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $petugas = Petugas::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $petugas = Petugas::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Petugas::create([
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
        return redirect()->route('pengawas.index')
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
        $petugas = Petugas::find($id);
        return view('petugas.detail', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Petugas::find($id);

        return view('petugas.edit', ['data' => $data]);
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
        $petugas = Petugas::find($id);
        $petugas-> nama_lengkap = $request->nama_lengkap;
        $petugas-> no_ktp = $request->no_ktp;
        $petugas-> jenis_kelamin = $request->jenis_kelamin;
        $petugas-> tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $petugas-> no_tlp = $request->no_tlp;
        $petugas-> alamat = $request->alamat;
        $petugas-> nip = $request->nip;
        $petugas->save();

        return redirect()->route('petugas.index')
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
        Petugas::find($id)->delete();
        return redirect()->route('petugas.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
    public function tampil(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $petugas = Petugas::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $petugas = Petugas::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('petugas.tampil', compact('petugas'));
    }
}
