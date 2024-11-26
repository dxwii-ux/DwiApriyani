<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function meja(){
        return view('dataMeja');
    }
}
