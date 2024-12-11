@extends('layout')

@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Order</h5>
        </div>

        <!-- Flexibel Konten -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="{{ route('order.simpan') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_pesanan" class="form-label text-black-50">ID Pesanan</label>
                        <input type="text" name="id_pesanan" id="id_pesanan" class="form-control" value="{{ $id_pesanan }}" readonly>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_menu" class="form-label text-black-50">Menu</label>
                        <select name="id_menu" id="id_menu" class="form-select">
                            <option value="">Pilih Menu</option>
                            @foreach ($menus as $menu)
                            <option value="{{ $menu->id_menu }}">{{ $menu->nama_menu }}</option>
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
                        <label for="jumlah" class="form-label text-black-50">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan jumlah" min="1">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_user" class="form-label text-black-50">Pelayan</label>
                        <select name="id_user" id="id_user" class="form-select">
                            <option value="{{ $current_user->id }}">{{ $current_user->name }}</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-sm btn-danger bg-gradient px-5">Batal <i class="bi-x"></i></button>
                        <button type="submit" class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card card-body bg-white mt-3 border-0 shadow">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Menu</th>
                        <th>Pelanggan</th>
                        <th>Jumlah</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="align-middle">
                        <td>{{ $order->id_pesanan }}</td>
                        <td>{{ $order->menu->nama_menu }}</td>
                        <td>{{ $order->pelanggan->nama }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>
                            <a href="{{ route('order.edit', $order->id_pesanan) }}" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
                            <a href="{{ route('order.hapus', $order->id_pesanan) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus pesanan ini?');">
                                <i class="bi-trash small"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3">
                {{ $orders->links() }}
            </div>
        </div>
        <!-- Akhir Flexibel Konten -->
    </div>
</div>
@endsection
