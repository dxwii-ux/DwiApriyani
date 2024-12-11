<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        if(auth()->guard('admin')->user()->role != 'waiter') {
            return redirect('dashboard')->with('error', 'Anda tidak mempunyai permission untuk masuk ke halaman Order!');
        }
        
        $orders = Pesanan::with(['menu', 'user', 'pelanggan'])->paginate(10);
        $menus = Menu::all();
        $pelanggans = Pelanggan::all();
        $current_user = auth()->guard('admin')->user();
        
        $last_order = Pesanan::orderBy('id_pesanan', 'desc')->first();
        $next_number = $last_order ? (int)substr($last_order->id_pesanan, 3) + 1 : 1;
        $formatted_number = sprintf("PS-%03d", $next_number);

        return view('order', [
            'orders' => $orders,
            'menus' => $menus,
            'pelanggans' => $pelanggans,
            'id_pesanan' => $formatted_number,
            'current_user' => $current_user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pesanan' => 'required|unique:pesanans,id_pesanan',
            'id_menu' => 'required|exists:menus,id_menu',
            'id_pelanggan' => 'required|exists:pelanggans,id_pelanggan',
            'jumlah' => 'required|numeric|min:1',
            'id_user' => 'required|exists:users,id'
        ]);

        try {
            $pesanan = Pesanan::create([
                'id_pesanan' => $request->id_pesanan,
                'id_menu' => $request->id_menu,
                'id_pelanggan' => $request->id_pelanggan,
                'jumlah' => $request->jumlah,
                'id_user' => $request->id_user
            ]);

            if ($pesanan) {
                return redirect()->route('order')->with('success', 'Pesanan berhasil ditambahkan!');
            }
            return back()->with('error', 'Gagal menambahkan pesanan')->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan pesanan: ' . $e->getMessage())->withInput();
        }
    }

    public function edit_data($id_pesanan) 
    {
        $order = Pesanan::with(['menu', 'user', 'pelanggan'])->find($id_pesanan);
        if (!$order) {
            return back()->with('error', 'Pesanan tidak ditemukan');
        }

        $orders = Pesanan::with(['menu', 'user', 'pelanggan'])->paginate(10);
        $menus = Menu::all();
        $pelanggans = Pelanggan::all();
        $current_user = auth()->guard('admin')->user();

        return view('order', [
            'orders' => $orders,
            'menus' => $menus,
            'pelanggans' => $pelanggans,
            'edit' => $order,
            'current_user' => $current_user
        ]);
    }

    public function update(Request $request, $id_pesanan) 
    {
        $request->validate([
            'id_menu' => 'required|exists:menus,id_menu',
            'id_pelanggan' => 'required|exists:pelanggans,id_pelanggan',
            'jumlah' => 'required|numeric|min:1',
            'id_user' => 'required|exists:users,id'
        ]);

        try {
            $pesanan = Pesanan::find($id_pesanan);
            if (!$pesanan) {
                return back()->with('error', 'Pesanan tidak ditemukan');
            }

            $updated = $pesanan->update([
                'id_menu' => $request->id_menu,
                'id_pelanggan' => $request->id_pelanggan,
                'jumlah' => $request->jumlah,
                'id_user' => $request->id_user
            ]);

            if ($updated) {
                return redirect()->route('order')->with('success', 'Pesanan berhasil diupdate');
            }
            return back()->with('error', 'Gagal mengupdate pesanan')->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate pesanan: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id_pesanan)
    {
        try {
            $pesanan = Pesanan::find($id_pesanan);
            if (!$pesanan) {
                return back()->with('error', 'Pesanan tidak ditemukan');
            }

            if ($pesanan->delete()) {
                return redirect()->route('order')->with('success', 'Pesanan berhasil dihapus!');
            }
            return back()->with('error', 'Gagal menghapus pesanan');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
