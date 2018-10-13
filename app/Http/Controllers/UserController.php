<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $allRoles = Role::all();
        return view('admin.role.user', compact(['users','allRoles']));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
    
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $roles=$request->roles;
        DB::table('role_user')->where('user_id', $id)->delete();
        foreach($roles as $role){
            $user->attachRole($role);
        }
        
        $users = User::all();
        $allRoles = Role::all();
        return redirect()->route('user.index')->withMessage('função criada');
    }


    public function destroy($id)
    {

    }
}
