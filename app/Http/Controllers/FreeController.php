<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeController extends Controller
{
    public function free($word)
    {
        return view('practice.free', ['msg'=>$word]);
    }
}
