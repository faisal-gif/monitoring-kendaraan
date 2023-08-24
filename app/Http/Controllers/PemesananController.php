<?php

namespace App\Http\Controllers;

use App\Exports\PemesananExport;
use App\Models\kendaraan;
use App\Models\pemesanan;
use App\Models\persetujuan;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pemesanan = pemesanan::with('kendaraan')->get();
        return view('pemesanan.index', compact('pemesanan'));
    }
    public function create()
    {
        $user = User::where('type', '0')->get();
        $kendaraan = kendaraan::all();

        return view('pemesanan.input-pemesanan', compact('user', 'kendaraan'));
    }
    public function store(Request $request)
    {
        $pemesan = pemesanan::create([
            'pemesan' => $request->pemesan,
            'kendaraan_id' => $request->kendaraan,
            'status' => 'menunggu',
            'tingkat_persetujuan' => 0
        ]);

        $pihak1 = persetujuan::create([
            'pemesanan_id' => $pemesan->id,
            'approver_id' => $request->pihak1,
            'status' => 'diajukan',
        ]);
        $pihak2 = persetujuan::create([
            'pemesanan_id' => $pemesan->id,
            'approver_id' => $request->pihak2,
            'status' => 'menunggu',
        ]);
    }
    public function excel()
    {
        return Excel::download(new PemesananExport, 'pemesanan.xlsx');
    }
}
