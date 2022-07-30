<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;


class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $targets = Target::where('nama_lengkap', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $targets = Target::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('target.index', compact('targets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('target.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Target::create([
            'id' => $request->id,
            'nama_petugas' => $request->nama_petugas,
            'target' => $request->target,
        ]);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('target.index')
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
        $targets = Target::find($id);
        return view('target.detail', compact('target'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Target::find($id);

        return view('target.edit', ['data' => $data]);
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
        $targets = Target::find($id);
        $targets-> nama_petugas = $request->nama_petugas;
        $targets-> target = $request->target;
        $targets->save();

        return redirect()->route('target.index')
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
        Target::find($id)->delete();
        return redirect()->route('target.index')
            ->with('success', 'Data Berhasil Dihapus');
    }

    public function tampil(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $targets = Target::where('nama_petugas', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $targets = Target::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('target.tampil', compact('target'));
    }
}
