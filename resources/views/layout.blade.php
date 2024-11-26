<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK RESTO</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class=" bg-body-tertiary">
    <div id="main" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column  bg-primary bg-gradient shadow vh-100">
            <div class="logo">
                <img src="/img/food-restaurant-icon-logo-free-design-template-81462dacdb7f33a44518abaa6628b15f_screen.jpg" alt="" srcset="">
            </div>
            <div class="menu p-2 d-flex flex-column gap-2">
                <a href="/dashboard"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50 active">
                    <span class="">Dashboard</span>
                    <i class="bi-speedometer2 "></i>
                </a>
                <a href="/dataMeja"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Data Meja</span>
                    <i class="bi bi-person-gear "></i>
                </a>
                <a href="/menu"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Data Barang</span>
                    <i class="bi-bag "></i>
                </a>
                <a href=""
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Data Order</span>
                    <i class="bi-cart "></i>
                </a>
                <a href=""
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Data Transaksi</span>
                    <i class="bi-cart "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Laporan</span>
                    <i class="bi-table "></i>
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