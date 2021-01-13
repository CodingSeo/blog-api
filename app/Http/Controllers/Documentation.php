<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Documentation extends Controller
{
    public function index()
    {
        echo('test');
    }

    public function document(Request $request)
    {
        var_dump('test');
    }
}
