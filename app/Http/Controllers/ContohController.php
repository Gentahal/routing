<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function ambil(){
        return view ('kontak');
    }

    public function kirim_data(){
        
    }
}