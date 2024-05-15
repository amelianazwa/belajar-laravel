<?php

namespace App\Http\Controllers;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function menampilkan(){
        $merek = Merek::all();
        return view('mereks/index3', compact('merek'));
    }

    public function show($id){
        $merek = Merek::findOrFail($id);
        return view('mereks.showmerek', compact('merek'));
    }
}