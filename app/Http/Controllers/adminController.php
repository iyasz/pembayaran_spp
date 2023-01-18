<?php

namespace App\Http\Controllers;

use App\Http\Requests\createAdminRequest;
use App\Models\admin;
use Carbon\Carbon;
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

    function store(createAdminRequest $request){

        // $request["created_at"] = Carbon::now()->format("Y-m-d H:i:s");

        admin::create($request->except('_token', 'addAdmin'));
        return redirect('/admin')->with('createSuccess', 'Data');
    }

    function updateview($id){
        $admin = admin::find($id);
        return view('admin.updateadmin', ['admin' => $admin]);
    }

    function update($id, createAdminRequest $request){
        $admin = admin::find($id);
        // $rules = admin::$rules;
        $admin->update($request->except('_token', 'addAdmin'));
        return redirect('/admin')->with('updateSuccess', 'data');
    }

    function destroy($id){
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('deleteSuccess', 'data');
    }

}
