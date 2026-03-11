<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{

    function index()
    {
        $dados = Login::all();
        return view('login.list', ['dados' => $dados]);
    }
    
}
