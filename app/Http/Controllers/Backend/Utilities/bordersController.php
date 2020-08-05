<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bordersController extends Controller
{
    public function index()
    {
        return view('backend.pages.utilities.borders');
    }
}
