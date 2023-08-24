<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\persetujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersetujuanController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $persetujuan = persetujuan::with('pemesanan.kendaraan')->where('approver_id', $user)->where('status', 'diajukan')->get();
        return view('persetujuan.index', compact('persetujuan'));
    }
    public function status($id, $status)
    {

        $tahap1 = persetujuan::find($id);
        $tahap1->status = $status;
        $tahap1->save();
        $count = persetujuan::where('pemesanan_id', $tahap1->pemesanan_id)->where('status', 'disetujui')->count();
        if ($status == 'ditolak') {
            $tahap0 = pemesanan::where('id', $tahap1->pemesanan_id)->first();
            $tahap0->status = 'ditolak';
            $tahap0->save();
        } elseif ($count == 1) {
            $tahap2 = persetujuan::where('pemesanan_id', $tahap1->pemesanan_id)->where('status', 'menunggu')->first();
            $tahap2->status = 'diajukan';
            $tahap2->save();
        } elseif ($count == 2) {
            $tahap3 = pemesanan::where('id', $tahap1->pemesanan_id)->first();
            $tahap3->status = 'disetujui';
            $tahap3->save();
        }
        return redirect()->back();
    }
}
