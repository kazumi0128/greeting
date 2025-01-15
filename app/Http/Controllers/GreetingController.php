<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController
{
    public function morning()
    {
        $title = '朝のあいさつ';
        $message = 'おはようございます';
        return view('greeting', compact('title','message'));
    }

    public function afternoon()
    {
        $title = '昼のあいさつ';
        $message = 'こんにちは';
        return view('greeting', compact('title','message'));
    }

    public function evening()
    {
        $title = '夕方のあいさつ';
        $message = 'こんばんは';
        return view('greeting', compact('title','message'));
    }

    public function night()
    {   $title = '夜のあいさつ';
        $message = 'おやすみ';
        return view('greeting', compact('title','message'));
    }

    public function freeword($message)
    {
        $title='自由なメッセージ';
        $message = $message;
        return view('greeting', compact('title','message'));
    }

    public function random()
    {
        $title='ランダムなメッセージ';
        $messages = [
            'おはよう',
            'こんにちは',
            'こんばんは',
            'おやすみ'
        ];

        $message = $messages[array_rand($messages)];
        return view('greeting', compact('title','message'));
    }
}
