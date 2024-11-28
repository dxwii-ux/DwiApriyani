<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function meja(){
        return view('meja');
    }
    public function index(){
        $meja = new Meja();

        $data_meja = $meja->paginate(10);

        $no_meja = $meja->all()->last();
        $no =$no_meja->id_meja;
        $no = substr($no,2);
        $no = intval($no)+1;
        switch(true){
            case $no < 10:
                $no ="MJ-00".$no;
                break;
            case $no < 100:
                $no ="MJ-0".$no;
                break;
            default:
                $no ="MJ-".$no;
                break;
        }


        return view('meja',[
            'meja'=>$data_meja,
            'no_meja'=>$no
        ]);
    }

    public function simpan(Request $request){
        $request->validate([
            'no_meja'=>'required',
            'kapasitas'=>'required',
            'status'=>'required'
        ]);


        $meja = new Meja();
        if($meja->create($request->all())){
            return redirect('/meja')->with('pesan','Data Berhasil ditambahkan');
        }
        return back()->with('pesan','Data gagal ditambahkan');
    }

    public function edit($no){

        $meja = new Meja();
        $edit_meja = $meja->find($no);

        $data_meja = $meja->paginate(10);
        return view('meja',[
            'meja'=>$data_meja,
            'edit'=>$edit_meja
        ]);
    }
    public function update(Request $request, $no){
        $request->validate([
            'kapasitas'=>'required',
            'status'=>'required'
        ]);

        $meja = new Meja();
        $meja->find($no)->update($request->all());
        return redirect('/meja');
    }
    public function delete($no){
        $meja = new Meja();
        $meja->find($no)->delete();
        return redirect('/meja');
    }
}
