@extends('layout')

@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Transaksi</h5>
        </div>

        <!-- Form Transaksi -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="{{ route('transaksi.simpan') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_order" class="form-label text-black-50">Order</label>
                        <select name="id_order" id="id_order" class="form-select">
                            <option value="">Pilih Order</option>
                            @foreach ($orders as $order)
                            <option value="{{ $order->id_pesanan }}">{{ $order->menu->nama_menu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_pelanggan" class="form-label text-black-50">Pelanggan</label>
                        <select name="id_pelanggan" id="id_pelanggan" class="form-select">
                            <option value="">Pilih Pelanggan</option>
                            @foreach ($pelanggans as $pelanggan)
                            <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="total_harga" class="form-label text-black-50">Total Harga</label>
                        <input type="number" name="total_harga" id="total_harga" class="form-control" placeholder="Masukkan total harga" min="0">
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-sm btn-danger bg-gradient px-5">Batal <i class="bi-x"></i></button>
                        <button type="submit" class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
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
                        <th>Order</th>
                        <th>Pelanggan</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksis as $transaksi)
                    <tr class="align-middle">
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->order->menu->nama_menu }}</td>
                        <td>{{ $transaksi->pelanggan->nama }}</td>
                        <td>{{ $transaksi->total_harga }}</td>
                        <td>
                            <a href="{{ route('transaksi.hapus', $transaksi->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus transaksi ini?');">
                                <i class="bi-trash small"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3">
                {{ $transaksis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
