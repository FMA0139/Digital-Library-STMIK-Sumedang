<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Profil;
use App\Models\Buku;
use App\Models\Info;
use App\Models\BukuTamu;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profil = Profil::all();
        $buku = Buku::latest()->paginate(8);
        return view('welcome.index', compact('profil', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bukusearch(Request $request)
    {
        $profil = Profil::all();
        $buku = Buku::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('judul', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('isbnissn', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('pengarang', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('tahun', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('penerbit', 'LIKE', '%' . $term . '%')->get();
                    $query->orWhere('lokasi', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);
        return view('welcome.bukumedia', compact('profil', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bukumedia()
    {
        $profil = Profil::all();
        $buku = Buku::latest()->paginate(9);
        return view('welcome.bukumedia', compact('profil', 'buku'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku, $id)
    {
        $profil = Profil::all();
        $buku = Buku::findOrFail($id);
        return view('welcome.show', compact('profil', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {
        $profil = Profil::all();
        return view('welcome.profil', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengunjung()
    {
        $profil = Profil::all();
        $pengunjung = BukuTamu::paginate(10);
        return view('welcome.pengunjung', compact('profil', 'pengunjung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bukutamu = BukuTamu::create([
            'nim'   => $request->nim,
            'nama'   => $request->nama,
            'kelas'   => $request->kelas,
            'prodi'   => $request->prodi
        ]);

        if ($bukutamu) {
            //redirect dengan pesan sukses
            return redirect()->route('pengunjung')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pengunjung')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
