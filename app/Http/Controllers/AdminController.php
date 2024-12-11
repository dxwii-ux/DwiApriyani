<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->route('dashboardAdmin');
        }
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);

        $data_user = $request->only(['username', 'password']);

        if (auth()->guard('admin')->attempt($data_user)) {
            $request->session()->regenerate();
            $admin = auth()->guard('admin')->user();
            $request->session()->put('admin', $admin);
            $request->session()->put('role', $admin->role);
            return redirect()->route('dashboardAdmin')->with('success', 'Berhasil login!');
        } else {
            if (!auth()->guard('admin')->attempt(['username' => $request->username])) {
                session()->put('errors', collect(['username' => 'Username tidak ditemukan!']));
                return back()->withInput($request->only('username'));
            }
            session()->put('errors', collect(['password' => 'Password yang anda masukkan salah!']));
            return back()->withInput($request->only('username'));
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Berhasil logout');
    }

    public function dashboard()
    {
        if (!auth()->guard('admin')->check()) {
            return redirect('/login');
        }
        return view('dashboardAdmin');
    }
}
