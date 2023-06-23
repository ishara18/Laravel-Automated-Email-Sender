<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function formview()
    {
        return view('formfill');
    }
}
