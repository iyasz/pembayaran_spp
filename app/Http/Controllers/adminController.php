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
        $imageContent = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageContent = $request->username.'-'.date('Ymd').random_int(100,999).'.'.$extension;
            $request->file('photo')->storeAs('admin-profil', $imageContent);
        }
         
        // dd($request->photo);
        // return $request->photo;
        $request['img_profil'] = $imageContent;

        admin::create($request->except('_token', 'addAdmin', 'photo'));
        return redirect('/admin')->with('success', 'Data Berhasil Disimpan!');
    }

    function updateview($id){
        $admin = admin::find($id);
        return view('admin.updateadmin', ['admin' => $admin]);
    }

    function update($id, createAdminRequest $request){
        $admin = admin::find($id);
        // $imageContent = '';

        // if($request->file('photo')){
        //     $extension = $request->file('photo')->getClientOriginalExtension();
        //     $imageContent = $request->username.'-'.date('Ymd').random_int(100,999).'.'.$extension;
        //     $request->file('photo')->storeAs('admin-profil', $imageContent);
        // }
         
        // $request['img_profil'] = $imageContent;

        // $rules = admin::$rules;
        $admin->update($request->except('_token', 'addAdmin', 'img_profil'));
        return redirect('/admin')->with('success', 'Data Berhasil Diubah!');
    }

    function destroy($id){
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/admin')->with('success', 'Data Berhasil Dihapus!');
    }

}
