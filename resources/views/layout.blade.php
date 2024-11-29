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
<body class=" bg-body-tertiary"  >
    <div id="main" class="d-flex" >
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column vh-100" style="background-color: #93C6E7">
            <div class="text-center fw-bold mb-2 justify-content-between align-items-center px-4 text-black-50">
                <span class="fs-4">Resto</span>
              </div>
            <hr>
            <div class="menu p-2 d-flex flex-column gap-2">
                <a href="/dashboard"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50 active ">
                    <span class="">Dashboard</span>
                </a>
                <a href="/meja"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Meja</span>
                </a>
                <a href="/menu"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Menu</span>
                </a>
                <a href="/pelanggan"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Pelanggan</span>
                </a>
                <a href=""
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Order</span>
                </a>
                <a href=""
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Transaksi</span>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Laporan</span>
                </a>
            </div>
            <div class="logout p-2 mt-auto">
                <a href="logout" class="btn btn-danger w-100 d-flex px-3 justify-content-between align-content-center">
                    <span>Logout</span>
                    <i class="bi-arrow-right-circle"></i>
                </a>
            </div>
            
        </div>
        <!-- Akhir Sidebar -->
        <!-- Konten Utama -->
        @yield('konten')
        <!-- Akhir Konten Utama -->
    </div>
</body>
</html>