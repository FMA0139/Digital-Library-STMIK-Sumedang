<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
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
        $anggota = User::all();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],

            //     'foto'     => 'required|foto|mimes:png,jpg,jpeg',
            //     'lokasi'     => 'required',
            //     'content'   => 'required'
        ]);

        //upload foto
        $foto = $request->file('foto');
        $foto->storeAs('public/foto', $foto->hashName());

        $anggota = User::create([
            'name'   => $request->name,
            'nim'   => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tgl_lahir'   => $request->tgl_lahir,
            'jk'   => $request->jk,
            'alamat'   => $request->alamat,
            'tlp'   => $request->tlp,
            'prodi'     => $request->prodi,
            'foto'     => $foto->hashName()
        ]);

        if ($anggota) {
            //redirect dengan pesan sukses
            return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('anggota.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(User $anggota)
    {
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $anggota)
    {
        // $this->validate($request, [
        //     'title'     => 'required',
        //     'content'   => 'required'
        // ]);

        //get data Blog by ID
        $anggota = User::findOrFail($anggota->id);

        if ($request->file('foto') == "") {

            $anggota->update([
                'name'   => $request->name,
                'nim'   => $request->nim,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'tgl_lahir'   => $request->tgl_lahir,
                'jk'   => $request->jk,
                'alamat'   => $request->alamat,
                'tlp'   => $request->tlp,
                'prodi'     => $request->prodi,
            ]);
        } else {

            //hapus old foto
            Storage::disk('local')->delete('public/foto/' . $anggota->foto);

            //upload new foto
            $foto = $request->file('foto');
            $foto->storeAs('public/foto', $foto->hashName());

            $anggota->update([
                'foto'     => $foto->hashName(),
                'name'   => $request->name,
                'nim'   => $request->nim,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'tgl_lahir'   => $request->tgl_lahir,
                'jk'   => $request->jk,
                'alamat'   => $request->alamat,
                'tlp'   => $request->tlp,
                'prodi'     => $request->prodi,
            ]);
        }

        if ($anggota) {
            //redirect dengan pesan sukses
            return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('anggota.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $anggota = User::findOrFail($id);
        Storage::disk('local')->delete('public/foto/' . $anggota->foto);
        $anggota->delete();

        if ($anggota) {
            //redirect dengan pesan sukses
            return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('anggota.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
