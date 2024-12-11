<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        $totalPendapatan = $transaksi->sum('total');
        return view('laporan', compact('transaksi', 'totalPendapatan'));
    }

    public function filter(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $transaksi = Transaksi::whereBetween('tanggal', [$request->tanggal_mulai, $request->tanggal_selesai])->get();
        $totalPendapatan = $transaksi->sum('total');

        return view('laporan.index', compact('transaksi', 'totalPendapatan', 'request'));
    }
}
