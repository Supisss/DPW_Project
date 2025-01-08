<?php

namespace App\Http\Controllers;

use App\Models\loginMod;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index ()
    {
        $loginDex = loginMod::get();
        return view('login', ['loginDex' => $loginDex]);
    }

    public function create()
    {
        $login = loginMod::all();
        return view('login', ['login' => $login]);
    }//loginCreate
}
