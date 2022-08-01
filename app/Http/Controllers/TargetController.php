<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Models\Target;
use Carbon\Carbon;
use Auth;
use League\CommonMark\CommonMarkConverter;

class TargetController extends Controller
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
        $targets = Target::with('petugas')->get();

        $targets = Target::where([
            ['petugas_id', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('petugas_id', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('id', 'asc')
            ->simplePaginate(3);

        return view('target.index', compact('targets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $paginate = Target::orderBy('id', 'asc')->paginate(5); // Pagination menampilkan 5 data

        // if ($request->has('search')) { // Jika ingin melakukan pencarian judul
        //     $targets = Target::where('petugas_id', 'like', "%" . $request->search . "%")->paginate(5);
        // } else { // Jika tidak melakukan pencarian judul
        //     //fungsi eloquent menampilkan data menggunakan pagination
        //     $targets = Target::orderBy('id', 'asc')->paginate(5); // Pagination menampilkan 5 data
        // }
        // return view('target.index', ['target' => $targets,'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all(); //mendapatkan data dari tabel kelas
        return view('target.create', ['petugas' => $petugas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => $request->id,
            'tanggal' => Carbon::now(),
            'nama_petugas' => $request->nama_petugas,
            'target' => $request->target,
        ]);
        $targets = new Target;
        $targets->id = $request->get('id');
        $targets->tanggal = $request->get('tanggal');
        $targets->nama_petugas = $request->get('nama_petugas');
        $targets->target = $request->get('target');
        $targets->save();

        $petugas = new Petugas;
        $petugas->id = $request->get('Petugas');

        //fungsi eloquent untuk menambah data dengan relasi belongsTO
        $targets->petugas()->associate($petugas);
        $targets->save();


        // Target::create([
        //     'id' => $request->id,
        //     'tanggal' => Carbon::now(),
        //     'nama_petugas' => $request->nama_petugas,
        //     'target' => $request->target,
        // ]);
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
        $targets->tanggal = $request->tanggal;
        $targets->nama_petugas = $request->nama_petugas;
        $targets->target = $request->target;
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
