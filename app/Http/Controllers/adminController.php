<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        $admin = admin::all();
        return view('admin.admin', ['admin' => $admin]);  
    }

    function create(){
        $admin = admin::all();
        return view('admin.createadmin', ['admin' => $admin]);
    }

    function detail(){
        $admin = admin::all();
        return view('admin.detailadmin', ['admin' => $admin]);
    }

    function store(Request $request){
        admin::create($request->except('_token', 'addAdmin'));
        return redirect('/admin');
    }

}
