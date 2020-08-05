<?php

namespace App\Http\Controllers\Backend\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        return view('backend.pages.Components.cards');
    }
}
