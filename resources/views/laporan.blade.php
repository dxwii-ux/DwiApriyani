@extends('layout')

@section('konten')
<div class="container mt-4">
    <h3 class="text-center mb-4">Laporan Transaksi</h3>

    <!-- Filter Form -->
    <form action="{{ route('laporan.filter') }}" method="post" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}">
            </div>
            <div class="col-md-4">
                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </div>
    </form>

    <!-- Tabel Transaksi -->
    <div class="card card-body shadow">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->menu->nama_menu }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>Rp {{ number_format($item->total, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Total Pendapatan -->
    <div class="mt-4">
        <h5>Total Pendapatan: <strong>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</strong></h5>
    </div>
</div>
@endsection
