<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jam;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::where('name', Auth::user()->name)->first();
        return view('dashboard.absen.index', compact('data'));
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

        Absensi::create([
            'id_siswa' => $request->id_siswa,
            'tanggal' => $request->tanggal,
            'ket' => $request->ket,
            'id_jam' => $request->id_jam,
        ]);

        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::where('kelas', $id)->get();
        return view('dashboard.dataAbsen.perkelas', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $file = $request->foto;
        $gambar = $file->getClientOriginalName();
        $file->move(public_path('assets/img/Sk'), $gambar);

        $jam = Jam::all();
        $now = strtotime(date("h:i:s"));

        foreach ($jam as $jm) {
            $mulai = strtotime($jm->mulai);
            $selesai = strtotime($jm->selesai);
            $p = $now . "/" . $mulai . "/" . $selesai;

            if ($now > $mulai && $now < $selesai) {
                Absensi::create([
                    'id_siswa' => $id,
                    'tanggal' => date(now()),
                    'ket' => 'izin',
                    'foto' => $gambar,
                    'id_jam' => $jm->id,
                ]);
            }
        }
        return redirect()->back()->with('message', 'Berhasil');
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

    function perkelas()
    {
        $data = Kelas::all();
        return view('dashboard.dataAbsen.index', compact('data'));
    }
}
