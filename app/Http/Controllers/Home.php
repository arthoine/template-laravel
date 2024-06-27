<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function view()
    {
        return view('pages.home');
    }
}
