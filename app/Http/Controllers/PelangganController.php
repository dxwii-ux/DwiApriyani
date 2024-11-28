<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = new Pelanggan();

        $data_pelanggan = $pelanggan->paginate(10);

        $id_pelanggan = $pelanggan->all()->last();
        $id =$id_pelanggan->id_pelanggan;
        $no = substr($id,2);
        $no = intval($no)+1;
        switch(true){
            case $no < 10:
                $no ="P-00".$no;
                break;
            case $no < 100:
                $no ="P-0".$no;
                break;
            default:
                $no ="P-".$no;
                break;
        }


        return view('pelanggan',[
            'pelanggan'=>$data_pelanggan,
            'id_pelanggan'=>$no
        ]);
    }

    public function simpan(Request $request){
        $request->validate([
            'nama_pelanggan'=>'required',
            'jenis_kelamin'=>'required',
            'telepon'=>'required',
            'alamat'=>'required'
        ]);


        $pelanggan = new Pelanggan();
        if($pelanggan->create($request->all())){
            return redirect('/pelanggan')->with('pesan','Data Berhasil ditambahkan');
        }
        return back()->with('pesan','Data gagal ditambahkan');
    }

    public function edit($id){

        $pelanggan = new Pelanggan();
        $edit_pelanggan = $pelanggan->find($id);

        $data_pelanggan = $pelanggan->paginate(10);
        return view('pelanggan',[
            'pelanggan'=>$data_pelanggan,
            'edit'=>$edit_pelanggan
        ]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_pelanggan'=>'required',
            'jenis_kelamin'=>'required',
            'telepon'=>'required',
            'alamat'=>'required'
        ]);

        $pelanggan = new Pelanggan();
        $pelanggan->find($id)->update($request->all());
        return redirect('/pelanggan');
    }
    public function hapus($id){
        $pelanggan = new Pelanggan();
        $pelanggan->find($id)->delete();
        return redirect('/pelanggan');
    }
}
