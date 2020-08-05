<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pages404Controller extends Controller
{
    public function index()
{
    return view('backend.auth.pages404');
}
}
