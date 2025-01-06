<?php

namespace App\Http\Controllers;

use App\Models\pesananMod;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index() {
        $pesanan = pesananMod::all();
        return view('pesanan', ['pesananList' => $pesanan]);
    }
}
