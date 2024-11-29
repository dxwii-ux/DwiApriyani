@extends('layout')

@section('konten')
    <div id="konten-utama">
        <div class="container-fluid">
            <div class="header d-flex w-100 py-3">
                <h5 class="h4 fw-bold text-black-50 text-uppercase">Dashboard</h5>
            </div><!-- Akhir header -->

            <!-- Flexibel Konten -->
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
            </div> <!-- Summary -->
            <!-- Akhir Flexibel Konten -->
        </div>
    </div>
    <!-- Akhir Konten Utama -->
    </div>
    </body>

    </html>
@endsection
