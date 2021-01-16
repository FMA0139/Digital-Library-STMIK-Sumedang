<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
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
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'cover'     => 'required|cover|mimes:png,jpg,jpeg',
        //     'lokasi'     => 'required',
        //     'content'   => 'required'
        // ]);

        //upload cover
        $cover = $request->file('cover');
        $cover->storeAs('public/cover', $cover->hashName());

        $buku = Buku::create([
            'judul'   => $request->judul,
            'isbnissn'   => $request->isbnissn,
            'pengarang'   => $request->pengarang,
            'penerbit'   => $request->penerbit,
            'tahun'   => $request->tahun,
            'jumlah'   => $request->jumlah,
            'deskripsi'   => $request->deskripsi,
            'lokasi'     => $request->lokasi,
            'cover'     => $cover->hashName()
        ]);

        if ($buku) {
            //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        // $this->validate($request, [
        //     'title'     => 'required',
        //     'content'   => 'required'
        // ]);

        //get data Blog by ID
        $buku = Buku::findOrFail($buku->id);

        if ($request->file('cover') == "") {

            $buku->update([
                'judul'   => $request->judul,
                'isbnissn'   => $request->isbnissn,
                'pengarang'   => $request->pengarang,
                'penerbit'   => $request->penerbit,
                'tahun'   => $request->tahun,
                'jumlah'   => $request->jumlah,
                'deskripsi'   => $request->deskripsi,
                'lokasi'     => $request->lokasi,
            ]);
        } else {

            //hapus old cover
            Storage::disk('local')->delete('public/cover/' . $buku->cover);

            //upload new cover
            $cover = $request->file('cover');
            $cover->storeAs('public/cover', $cover->hashName());

            $buku->update([
                'cover'     => $cover->hashName(),
                'judul'   => $request->judul,
                'isbnissn'   => $request->isbnissn,
                'pengarang'   => $request->pengarang,
                'penerbit'   => $request->penerbit,
                'tahun'   => $request->tahun,
                'jumlah'   => $request->jumlah,
                'deskripsi'   => $request->deskripsi,
                'lokasi'     => $request->lokasi
            ]);
        }

        if ($buku) {
            //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        Storage::disk('local')->delete('public/cover/' . $buku->cover);
        $buku->delete();

        if ($buku) {
            //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
