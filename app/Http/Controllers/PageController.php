<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function edpost(Request $request){
        $nim = $request->nim;
        $nama = $request->nama;
        return view('edpost',compact('nim','nama'));
    }
}
