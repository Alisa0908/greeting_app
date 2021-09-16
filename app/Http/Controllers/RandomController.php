<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function rand()
    {
        $rands = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $rand = $rands[array_rand($rands, 1)]; //array_rand関数は､キーをかえすから､$配列名[キーの数字] という形にする必要あり. さらに､1は省略可能である
        return view('practice.random', ['msg'=>$rand]);
    }
}
