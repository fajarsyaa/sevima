<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
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
        $kelas = Kelas::all();
        return view('dashboard.siswa.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jur = Jurusan::all();
        return view('dashboard.siswa.add', compact('jur'));
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
            'nis' => 'required|numeric',
            'phone' => 'required|numeric',
            'alamat' => 'required',
        ], [
            'required' => ':attribute harus di isi agar tidak muncul miss komunikasi',
            'numeric' => ':attribute harus angka'
        ]);

        $Siswa = Siswa::create([
            'name' => $request->name,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tahun_masuk' => date('Y-m-d'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'phone' => $request->phone,
            'jurusan_id' => $request->jurusan,
            'alamat' => $request->alamat,
            'kelas_id' => 1,
            'nis' => $request->nis
        ]);

        $dt = Siswa::where('id', $Siswa->id)->first();
        $dw = Jurusan::where('id', $dt->jurusan_id)->first();

        User::create([
            'name' => $request->name,
            'email' => 'mistermaqin' . rand(1, 1000) . "@gmail.com",
            'password' => Hash::make($request->nama),
            'level' => 'siswa',
            'siswa_id' => $Siswa->id,
            'kelas_id' => $dt->kelas,
            'jurusan_id' => $dw->id
        ]);

        return redirect()->back()->with('message', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataSiswa = Siswa::where('kelas', $id)->get();
        $dataJurusan = Jurusan::all();
        return view('dashboard.siswa.index', compact('dataSiswa', 'dataJurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
