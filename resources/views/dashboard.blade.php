@extends('layout')

@section('konten')
    <div id="konten-utama">
        <div class="container-fluid">
            <div class="header d-flex w-100 py-3">
                <h5 class="h4 fw-bold text-black-50 text-uppercase">Dashboard</h5>
            </div><!-- Akhir header -->

            <!-- Flexibel Konten -->
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card bg-primary bg-gradient text-white shadow border-0">
                        <div class="card-body d-flex align-items-center ">
                            <i class="bi bi-person-video  px-4" style="font-size: 48px;"></i>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Pelanggan</span>
                                <span class=" text-white fw-bold" style="font-size: 2rem;">100</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card bg-warning bg-gradient text-white shadow border-0">
                        <div class="card-body d-flex align-items-center ">
                            <i class="bi bi-box  px-4" style="font-size: 48px;"></i>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Total barang</span>
                                <span class=" text-white fw-bold" style="font-size: 2rem;">10</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card bg-info bg-gradient text-white shadow border-0">
                        <div class="card-body d-flex align-items-center ">
                            <i class="bi bi-cart-dash  px-4" style="font-size: 48px;"></i>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Total transaksi</span>
                                <span class=" text-white fw-bold" style="font-size: 2rem;">90</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card bg-dark bg-gradient text-white shadow border-0">
                        <div class="card-body d-flex align-items-center ">
                            <i class="bi bi-currency-dollar  px-4" style="font-size: 48px;"></i>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Pendapatan</span>
                                <span class=" text-white fw-bold" style="font-size: 2rem;">1000000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 col-12">
                    <div class="card card-body bg-white shadow border-0">
                        <h5 class="h6 text-black-50">10 Best Seller</h5>
                        <table class="table table-sm table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>M-001</td>
                                    <td>Ayam Bakar</td>
                                </tr>
                                <tr>
                                    <td>M-002</td>
                                    <td>Ikan Bakar</td>
                                </tr>
                                <tr>
                                    <td>M-003</td>
                                    <td>Iga Bakar</td>
                                </tr>
                                <tr>
                                    <td>M-004</td>
                                    <td>Sate Ayam</td>
                                </tr>
                                <tr>
                                    <td>M-005</td>
                                    <td>Sate Sapi</td>
                                </tr>
                                <tr>
                                    <td>M-006</td>
                                    <td>Sate Maranggi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-8 col-12 mt-lg-0 mt-4">
                    <div class="card card-body bg-white shadow border-0">
                        <h5 class="h6 text-black-50">Pencapaian penjualan 2024</h5>
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Jml Transaksi</th>
                                    <th>Jml Produk</th>
                                    <th>Total Pendapatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>January</td>
                                    <td>90</td>
                                    <td>1800</td>
                                    <td>2000000</td>
                                </tr>
                                <tr>
                                    <td>January</td>
                                    <td>90</td>
                                    <td>1800</td>
                                    <td>2000000</td>
                                </tr>
                                <tr>
                                    <td>January</td>
                                    <td>90</td>
                                    <td>1800</td>
                                    <td>2000000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- Summary -->
            <!-- Akhir Flexibel Konten -->
        </div>
    </div>
    <!-- Akhir Konten Utama -->
    </div>
    </body>

    </html>
@endsection
