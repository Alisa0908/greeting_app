<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($greeting)
    {
        switch ($greeting) {
            case 'morning':
                $time = '朝';
                $msg = 'おはようございます';
                break;
            case 'afternoon':
                $time = '昼';
                $msg = 'こんにちは';
                break;
            case 'evening':
                $time = '夕方';
                $msg = 'こんばんは';
                break;
            case 'night':
                $time = '夜';
                $msg = 'おやすみ';
                break;
            default:
                $time = 'その他';
                $msg = '正しく入力して下さい';
                break;
        }
            
        return view('practice.greeting', ['time'=>$time, 'msg'=>$msg]);
    }
}
