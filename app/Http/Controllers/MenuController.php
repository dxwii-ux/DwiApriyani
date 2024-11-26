<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view('menu');
    }
    public function index(){
        $menu = new Menu();

        $data_menu = $menu->paginate(10);

        $id_menu = $menu->all()->last();
        $id =$id_menu->id_menu;
        $no = substr($id,2);
        $no = intval($no)+1;
        switch(true){
            case $no < 10:
                $no ="M-00".$no;
                break;
            case $no < 100:
                $no ="M-0".$no;
                break;
            default:
                $no ="M-".$no;
                break;
        }


        return view('menu',[
            'menu'=>$data_menu,
            'id_menu'=>$no
        ]);
    }

    public function simpan(Request $request){
        $request->validate([
            'nama_menu'=>'required',
            'harga'=>'required'
        ]);


        $menu = new Menu();
        if($menu->create($request->all())){
            return redirect('/menu')->with('pesan','Data Berhasil ditambahkan');
        }
        return back()->with('pesan','Data gagal ditambahkan');
    }

    public function edit($id){

        $menu = new Menu();
        $edit_menu = $menu->find($id);

        $data_menu = $menu->paginate(10);
        return view('menu',[
            'menu'=>$data_menu,
            'edit'=>$edit_menu
        ]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_menu'=>'required',
            'harga'=>'required'
        ]);

        $menu = new Menu();
        $menu->find($id)->update($request->all());
        return redirect('/menu');
    }
    public function delete($id){
        

        $menu = new Menu();
        $menu->find($id)->delete();
        return redirect('/menu');
    }
}
