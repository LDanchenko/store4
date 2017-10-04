<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function change(){
        return view('admin.change');
    }
}