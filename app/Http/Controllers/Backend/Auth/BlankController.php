<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class BlankController extends Controller
{
    public function index(){
      Return view('backend.auth.blank');
    }
}
