<?php

use App\Models\Pengawas;
namespace App\Http\Controllers;

use App\Models\Pengawas;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
            $pengawas = Pengawas::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pengawas = Pengawas::orderBy('id', 'desc')->paginate(1000); // Pagination menampilkan 5 data
        }
        return view('pengawas.index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengawas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengawas::create([

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
        $pengawas = Pengawas::find($id);
        return view('pengawas.detail', compact('pengawas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengawas::find($id);

        return view('pengawas.edit', ['data' => $data]);
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
        $pengawas = Pengawas::find($id);
        $pengawas-> nama_lengkap = $request->nama_lengkap;
        $pengawas-> no_ktp = $request->no_ktp;
        $pengawas-> jenis_kelamin = $request->jenis_kelamin;
        $pengawas-> tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $pengawas-> no_tlp = $request->no_tlp;
        $pengawas-> alamat = $request->alamat;
        $pengawas-> nip = $request->nip;
        $pengawas->save();

        return redirect()->route('pengawas.index')
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
        Pengawas::find($id)->delete();
        return redirect()->route('pengawas.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
    public function tampil(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pengawas = Pengawas::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pengawas = Pengawas::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('pengawas.tampil', compact('pengawas'));
    }
}
