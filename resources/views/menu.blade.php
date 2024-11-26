@extends('layout')

@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Data Menu</h5>
        </div><!-- Akhir header -->

        <!-- Flexibel Konten -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_menu" class="form-label text-black-50">ID Barang</label>
                        <input type="text" name="id_menu" id="id_menu" class="form-control bg-body-tertiary"
                            placeholder="Masukkan  ID Menu" readonly value="{{$edit->id_menu??$id_menu}}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="nama_menu" class="form-label text-black-50">Nama Barang</label>
                        <input type="text" name="nama_menu" id="nama_menu" class="form-control"
                            placeholder="Masukkan Nama Menu" value="{{$edit->nama_menu??""}}">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="harga" class="form-label text-black-50">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control"
                            placeholder="Masukkan harga" value="{{$edit->harga??""}}">
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
                        <th>ID Menu</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($menu as $item)
                    <tr class="align-middle">
                        <td>{{$item->id_menu}}</td>
                        <td>{{$item->nama_menu}}</td>
                        <td>{{$item->harga}}</td>
                        <td>
                            <a href="/menu/edit/{{$item->id_menu}}" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
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
        