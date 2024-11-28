@extends('layout')

@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Meja</h5>
        </div><!-- Akhir header -->

        <!-- Flexibel Konten -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="no_meja" class="form-label text-black-50">Nomor Meja</label>
                        <input type="text" name="no_meja" id="no_meja" class="form-control"
                            placeholder="Masukkan Nama Meja" value="{{$edit->no_meja??""}}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="kapasitas" class="form-label text-black-50">Kapasitas</label>
                        <input type="text" name="kapasitas" id="kapasitas" class="form-control"
                            placeholder="Masukkan Kapasitas" value="{{$edit->kapasitas??""}}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="kapasitas" class="form-label text-black-50">Status</label>
                        <input type="text" name="kapasitas" id="kapasitas" class="form-control"
                            placeholder="Masukkan Kapasitas" value="{{$edit->status??""}}">
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i class="bi-trash"></i></a>
                        <button class="btn btn-sm btn-success bg-gradient px-5">Batal <i class="bi-x"></i></button>
                        <button class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card card-body bg-white mt-3 border-0 shadow">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>Nomor Meja</th>
                        <th>Kapasitas</th>
                        <th>Status</th>
                        <th>Kelola</th>
                    </tr>
                    @foreach ($meja as $item)
                    <tr class="align-middle">
                        <td>{{$item->no_meja}}</td>
                        <td>{{$item->kapasitas}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <a href="/meja/edit/{{$item->no_meja}}" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </thead>
                
            </table>
        </div>
        <!-- Akhir Flexibel Konten -->
    </div>
</div>
<!-- Akhir Konten Utama -->
</div>
</body>

</html>
@endsection
        