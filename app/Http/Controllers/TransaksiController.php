<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
{
    $transaksi = Transaksi::with(['order', 'pelanggan', 'user'])->paginate(10);
    $orders = Pesanan::all();
    $pelanggans = Pelanggan::all();
    $users = Admin::where('role', 'kasir')->get();

    return view('transaksi', compact('transaksi', 'orders', 'pelanggans', 'users'));
}


    public function simpan(Request $request)
    {
        $request->validate([
            'id_order' => 'required',
            'id_pelanggan' => 'required',
            'total_harga' => 'required|numeric|min:0',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi')->with('success', 'Transaksi berhasil disimpan!');
    }
    public function hapus($id)
{
    $transaksi = Transaksi::find($id);

    if (!$transaksi) {
        return redirect()->route('transaksi')->with('error', 'Transaksi tidak ditemukan!');
    }

    $transaksi->delete();

    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil dihapus!');
}

}
