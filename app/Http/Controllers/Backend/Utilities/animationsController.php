<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class animationsController extends Controller
{
    public function index()
    {
        return view('backend.pages.utilities.animations');
    }
}
