<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use App\Models\Test;

class TestController extends Controller
{
    public function test()
    {
        return view('testPage');
    }
    public function test2() {
        $alltest = Test::all();
        return response($alltest);
        }
}
