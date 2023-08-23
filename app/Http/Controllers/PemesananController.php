<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $user = User::where('role', 'user')->get();
        $kendaraan = kendaraan::all();

        return view('pemesanan.input-pemesanan', compact('user', 'kendaraan'));
    }
    public function index()
    {
    }
}
