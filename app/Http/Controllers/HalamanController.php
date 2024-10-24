<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class HalamanController extends Controller
{
    public function halamanUtama()
    {
        return view('halamanUtama');
    }
}
