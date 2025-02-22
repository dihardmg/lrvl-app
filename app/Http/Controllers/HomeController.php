<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function sayHello()
    {
        return response("hello world laravel 11");
    }
}
