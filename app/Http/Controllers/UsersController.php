<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataUser = Auth::user();
        return view('dashboard.profile', compact('dataUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataUser = Auth::user();
        return view('dashboard.edit', compact('dataUser'));
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

        // $val = $request->validate([
        //     'nama' => $request,
        //     'email' => 'required',
        //     'absen' => 'required',
        //     'id_kelas' => 'required',
        //     'id_jurusan' => 'required',
        //     'foto' => 'mimes:jpg,jpeg,png,bmp',
        // ], [
        //     'required' => ':attribute harus di isi agar tidak muncul miss komunikasi',
        //     'mimes' => ':attribute hanya menerima file jpg,jpng,png,bmp'
        // ]);

        $file = $request->foto;
        $gambar = $file->getClientOriginalName();
        $file->move(public_path('assets/img/fotoProfile'), $gambar);

        User::where('id', $id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'absen' => $request->absen,
            'foto' => $gambar,
        ]);

        return redirect(route('profile.show', $id))->with('message', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
