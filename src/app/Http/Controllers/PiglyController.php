<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiglyController extends Controller
{
    public function register() {
        return view("register");
    }
}
