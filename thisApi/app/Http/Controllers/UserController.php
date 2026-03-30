<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("User", compact('users'));
    }
    public function create(Request $request){
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),   
        ]);
        return redirect('/user');
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('userShow', compact('user'));
    }
    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('userEdit', compact('user')); // $user is defined here
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        return redirect('/user');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user');
    }
}