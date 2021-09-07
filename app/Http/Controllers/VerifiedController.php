<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifidController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('verified',['user' => $user]);
    }
}
