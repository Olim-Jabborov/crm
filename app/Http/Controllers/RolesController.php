<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create(Request $request){
        // $role = new Role();
        // $role->name = 'Client';
        // $role->save();

        // Role::insert(['name'=>'Admin']);

//        return response()->json([$request->only('name')]);
        Role::create($request->only('name'));
        return response()->json(true);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function index(){

        // return Role::first();
        return Role::all();
        // return Role::get();
        // return Role::find(2);

        // return Role::where('created_at', '!=', null)->get();
        // return Role::whereNotNull('created_at')->get();
        // return Role::whereNull('created_at')->orWhere('id', '>', 1)->get();
        // return Role::whereNull('created_at')->orWhere('id', '>', 1)->find(1);

        // dd(Role::whereNull('created_at')->orWhere('id', '>', 1)->get());

        // return Role::orderByDesc('name')->get();
        // return Role::orderBy('name')->get();

        // $role3 = Role::find(3);
        // $role3->name = 'manager';
        // $role3->save();

        // $role = Role::find(3)->update([
        //     'name' => 'admin',
        // ]);

        // Role::find(3)->delete();

        // return response()->json(['status' => 'true']);
    }

    public function show_role($id){
        $role = Role::find($id);
        return response()->json(['data'=>$role]);
    }

    public function users(Role $role)
    {
        return $role->user()->get();
    }
}
