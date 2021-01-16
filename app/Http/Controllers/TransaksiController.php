<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
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
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
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

        $transaksi = Transaksi::create([
            'id_buku'   => $request->id_buku,
            'id_anggota'   => $request->id_anggota,
            'tgl_pinjam'   => $request->tgl_pinjam,
            'tgl_kembali'   => $request->tgl_kembali,
            'status'   => $request->status,
            'ket'   => $request->ket
        ]);

        if ($transaksi) {
            //redirect dengan pesan sukses
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('transaksi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        // $this->validate($request, [
        //     'title'     => 'required',
        //     'content'   => 'required'
        // ]);

        //get data Blog by ID
        $transaksi = Transaksi::findOrFail($transaksi->id);

        $transaksi->update([
            'id_buku'   => $request->id_buku,
            'id_anggota'   => $request->id_anggota,
            'tgl_pinjam'   => $request->tgl_pinjam,
            'tgl_kembali'   => $request->tgl_kembali,
            'status'   => $request->status,
            'ket'   => $request->ket
        ]);


        if ($transaksi) {
            //redirect dengan pesan sukses
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('transaksi.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $transaksi = Transaksi::findOrFail($id);
        Storage::disk('local')->delete('public/cover/' . $transaksi->cover);
        $transaksi->delete();

        if ($transaksi) {
            //redirect dengan pesan sukses
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('transaksi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
