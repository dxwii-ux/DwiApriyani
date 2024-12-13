@extends('layout')

@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Transaksi</h5>
        </div><!-- Akhir header -->

        <!-- Form Input Transaksi -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_transaksi" class="form-label text-black-50">ID Transaksi</label>
                        <input type="text" name="id_transaksi" id="id_transaksi" class="form-control"
                            placeholder="Masukkan ID Transaksi" value="{{ $edit->id_transaksi ?? '' }}" readonly>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_pesanan" class="form-label text-black-50">ID Pesanan</label>
                        <input type="text" name="id_pesanan" id="id_pesanan" class="form-control"
                            placeholder="Masukkan ID Pesanan" value="{{ $edit->id_pesanan ?? '' }}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="bayar" class="form-label text-black-50">Bayar</label>
                        <input type="text" name="bayar" id="bayar" class="form-control"
                            placeholder="Masukkan Jumlah Bayar" value="{{ $edit->bayar ?? '' }}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="total" class="form-label text-black-50">Total</label>
                        <input type="text" name="total" id="total" class="form-control"
                            placeholder="Total Transaksi" value="{{ $edit->total ?? '' }}" readonly>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i class="bi-trash"></i></a>
                        <button class="btn btn-sm btn-success bg-gradient px-5">Batal <i class="bi-x"></i></button>
                        <button class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabel Transaksi -->
        <div class="card card-body bg-white mt-3 border-0 shadow">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Pesanan</th>
                        <th>Bayar</th>
                        <th>Total</th>
                        <th>Kelola</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi  as $item)
<tr class="align-middle">
    <td>{{ $item->id_transaksi }}</td>
    <td>{{ $item->id_pesanan }}</td>
    <td>{{ $item->bayar }}</td>
    <td>{{ $item->total }}</td>
    <td>
        <a href="/transaksi/edit/{{ $item->id_transaksi }}" class="btn btn-sm btn-success">
            <i class="bi-pencil small"></i>
        </a>
    </td>
</tr>
@endforeach

                </tbody>
            </table>
        </div>
        <!-- Akhir Tabel Transaksi -->
    </div>
</div>
<!-- Akhir Konten Utama -->
@endsection
