<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = collect(User::where('level', 'guru'));
        $j_guru = count($guru);

        $user = collect(User::all());
        $j_user = count($user);

        $siswa = collect(Siswa::all());
        $j_siswa = count($siswa);
        return view('dashboard.index', compact('j_guru', 'j_user', 'j_siswa'));
    }
}
