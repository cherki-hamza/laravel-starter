<?php

namespace App\Http\Controllers\backend;

use App\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('back-end.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

}
