<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTO</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="bg-body-tertiary">
    <div id="main" class="d-flex">
        <!-- Sidebar -->
        @if(auth()->guard('admin')->user()->role === 'admin' || auth()->guard('admin')->user()->role === 'waiter' || auth()->guard('admin')->user()->role === 'kasir')
        <div id="sidebar" class="d-flex flex-column vh-100" style="background-color: #93C6E7">
            <div class="text-center fw-bold mb-2 px-4 text-black-50">
                <span class="fs-4">Resto</span>
            </div>
            <hr>
            <div class="menu p-2 d-flex flex-column gap-2">
                <a href="{{ route('dashboardAdmin') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50 active">
                    <span>Dashboard</span>
                </a>
                @if(auth()->guard('admin')->user()->role === 'admin')
                <a href="{{ route('meja') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Meja</span>
                </a>
                @endif
                @if(auth()->guard('admin')->user()->role === 'admin' || auth()->guard('admin')->user()->role === 'waiter')
                <a href="{{ route('menu') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Menu</span>
                </a>
                @endif
                @if(auth()->guard('admin')->user()->role === 'waiter')
                <a href="{{ route('order') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Order</span>
                </a>
                @endif
                @if(auth()->guard('admin')->user()->role === 'kasir')
                <a href="{{ route('transaksi') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Transaksi</span>
                </a>
                @endif
                @if(auth()->guard('admin')->user()->role === 'owner' || auth()->guard('admin')->user()->role === 'waiter' || auth()->guard('admin')->user()->role === 'kasir')
                <a href="{{ route('laporan') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Laporan</span>
                </a>
                @endif
                @if(auth()->guard('admin')->user()->role === 'waiter' || auth()->guard('admin')->user()->role === 'kasir' || auth()->guard('admin')->user()->role === 'admin')
                <a href="{{ route('pelanggan') }}" class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span>Pelanggan</span>
                </a>
                @endif
            </div>
            <div class="logout p-2 mt-auto">
                <a href="{{ route('logout') }}" class="btn btn-danger w-100 d-flex px-3 justify-content-between align-content-center">
                    <span>Logout</span>
                    <i class="bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        @endif
        <!-- Akhir Sidebar -->

        <!-- Konten Utama -->
        @yield('konten')
        <!-- Akhir Konten Utama -->
    </div>
</body>

</html>