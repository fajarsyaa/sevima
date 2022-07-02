<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('dashboard.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nip' => 'required|numeric',
            'phone' => 'required|numeric',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,jpeg,png,bmp|max:2000',
        ], [
            'required' => ':attribute harus di isi agar tidak muncul miss komunikasi',
            'mimes' => ':attribute hanya menerima file jpg,jpng,png,bmp',
            'max' => ':attribute melebihi batas'
        ]);



        if (isset($request->foto)) {
            $file = $request->foto;
            $gambar = $file->getClientOriginalName();
            $file->move(public_path('assets/img/fotoProfile'), $gambar);
        } else {
            $gambar = $request->fotoLama;
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'foto' => $gambar,
            'level' => 'guru'
        ]);

        return redirect()->back()->with('message', 'Berhasil');
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
        // dd($dataUser->siswa);
        return view('dashboard.profil.profile', compact('dataUser'));
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



        if (isset($request->foto)) {
            $file = $request->foto;
            $gambar = $file->getClientOriginalName();
            $file->move(public_path('assets/img/fotoProfile'), $gambar);
        } else {
            $gambar = $request->fotoLama;
        }

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $gambar,
            'phone' => $request->phone,
            'alamat' => $request->alamat
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
