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
        return view('admin.createadmin');
    }

    function detail($id){
        $admin = admin::find($id);
        return view('admin.detailadmin', ['admin' => $admin]);
    }

    function store(Request $request){
        admin::create($request->except('_token', 'addAdmin'));
        return redirect('/admin')->with('createSuccess', 'Data');
    }

    function updateview($id){
        $admin = admin::find($id);
        return view('admin.updateadmin', ['admin' => $admin]);
    }

    function update($id, Request $request){
        $admin = admin::find($id);
        $admin->update($request->except('_token', 'addAdmin'));
        return redirect('/admin')->with('updateSuccess', 'data');
    }

    function destroy($id){
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('deleteSuccess', 'data');
    }

}
