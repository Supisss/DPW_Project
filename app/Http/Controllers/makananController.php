<?php

namespace App\Http\Controllers;

use App\Models\makananMod;
use Illuminate\Http\Request;

class makananController extends Controller
{
    public function index() 
    {
        $makanan = makananMod::all();
        return view('makanan', ['makananList' => $makanan]);
    }
}
