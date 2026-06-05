<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    
        $users = User::all();

        return view('user', ['users' => $users]);
    }
    public function userTable()
    {$users = User::all();

        return view('user', compact('users'));

    }

    public function saveUser(Request $request)
    {
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;

         $user->save();

        return redirect('/users');
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
    
        if ($user) {
            $user->delete();
        }
    
        return redirect('/users');
    }
    public function renderupdate($user_id){
        $users = User::where('id',$user_id)->first();
        return view('update',compact('users'));

    }
    
}
