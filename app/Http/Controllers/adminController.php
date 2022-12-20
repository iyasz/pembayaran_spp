<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        return view('admin.createadmin', ['admin' => 12]);  
    }

    function view(){
        $admin = admin::all();
        return view('admin.admin', ['admin' => $admin]);
    }

    function detail(){
        $admin = admin::all();
        return view('admin.detailadmin', ['admin' => $admin]);
    }

    
}
