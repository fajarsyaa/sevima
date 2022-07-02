<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jam;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
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
        $data = Siswa::where('id', Auth::user()->siswa_id)->first();
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
            'siswa_id' => $request->id_siswa,
            'tanggal' => $request->tanggal,
            'ket' => $request->ket,
            'jam_id' => $request->id_jam,
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
        $data = Jurusan::all();
        $kls = Kelas::where('id', $id)->first();
        return view('dashboard.dataAbsen.perkelas', compact('data', 'kls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idK, $idJ)
    {
        $now = date('Y-m-d');
        $datas = Siswa::where('jurusan_id', $idJ)->where('kelas_id', $idK)->get();
        $jam = Jam::all();
        $absen = DB::table('absensis')
            ->select('*')
            ->rightJoin('jams', 'jams.id', '=', 'jam_id')
            ->where('absensis.tanggal', $now)
            ->get();

        $jam = DB::table('jams')->get();

        $data_absen = null;



        foreach ($datas as $keys => $values) {
            foreach ($absen as $keya => $valuea) {
                if ($valuea->siswa_id == $values->id) {
                    unset($datas[$keys]);
                    $data_absen[$values->id] = [
                        "nama_siswa" => $values->name,
                    ];
                    foreach ($jam as $keyj => $valuej) {
                        if ($valuej->id == $valuea->jam_id) {
                            $data_absen[$values->id][$valuej->type] = "yes";
                        } else {
                            $data_absen[$values->id][$valuej->type] = "no";
                        }
                    }
                }
            }
        }
        // dd($data_absen);


        return view('dashboard.dataAbsen.cek', compact('data_absen', 'datas', 'jam'));
        // return view('dashboard.dataAbsen.data', compact('datas', 'jam'));
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
        $request->validate([
            'foto' => 'required|max:2000|mimes:png,jpg'
        ], [
            'required' => ':attribute harus di isi agar tidak muncul miss komunikasi',
            'mimes' => ':attribute hanya menerima file jpg,jpng,png,bmp',
            'max' => ':attribute max 2 mb'
        ]);

        $file = $request->foto;
        $gambar = $file->getClientOriginalName();
        $file->move(public_path('assets/img/Sk'), $gambar);

        $jam = Jam::all();
        $now = strtotime(date("h:i:s"));

        foreach ($jam as $jm) {
            $mulai = strtotime($jm->mulai);
            $selesai = strtotime($jm->selesai);


            if ($now > $mulai && $now < $selesai) {
                Absensi::create([
                    'siswa_id' => $id,
                    'tanggal' => date(now()),
                    'ket' => 'izin',
                    'foto' => $gambar,
                    'jam_id' => $jm->id,
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

    public function absenQr(Request $request)
    {
        $jam = Jam::all();
        $now = strtotime(date("h:i:s"));
        $tanggal = date('Y-m-d');
        // check id
        $cekQR = Siswa::where('id', $request->id)->first();
        if ($cekQR) {
            // check absen
            $cekAbsen = Absensi::where('siswa_id', $request->id)->where('tanggal', $tanggal)->first();

            if (isset($cekAbsen->jam_id) == 1) {
                $data = [
                    "status" => "gagal",
                    "pesan" => "Anda sudah absen"
                ];
                return $data;
                exit;
            } elseif (isset($cekAbsen->jam_id) == 2) {
                $data = [
                    "status" => "gagal",
                    "pesan" => "Anda sudah absen untuk pulang"
                ];
                return $data;
                exit;
            }
        } else {
            // gagal
            $data = [
                "status" => "gagal",
                "pesan" => "QR code tidak valid"
            ];
            return $data;
            exit;
        }


        foreach ($jam as $jm) {
            $mulai = strtotime($jm->mulai);
            $selesai = strtotime($jm->selesai);

            if ($now > $mulai && $now < $selesai) {
                Absensi::create([
                    'siswa_id' => $request->id,
                    'tanggal' => date(now()),
                    'ket' => 'masuk',
                    'jam_id' => $jm->id,
                ]);
            }
        }

        $data = [
            "status" => "berhasil",
            "pesan" => "berhasil absen"
        ];

        return $data;
    }

    function perkelas()
    {
        $data = Kelas::all();
        return view('dashboard.dataAbsen.index', compact('data'));
    }
}
