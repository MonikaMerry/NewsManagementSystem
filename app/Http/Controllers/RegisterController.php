<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function  userTable()
    {
        $data = User::get();
        return view('admin.user', compact('data'));

        // return view('admin.user');

    }

    // delete user

    public function deleteUser($id)
    {
        $delete_user = User::find($id);
        $delete_user->delete();

        return back()->with('danger', 'Deleted User Successfully');
    }

    //change role

    public function adminToUser($id)
    {
        $admin_user = User::find($id);
        $admin_user->is_admin = 0;
        $admin_user->save();
        return redirect('user')->with('success', 'Changed to User');
    }
    public function userToAdmin($id)
    {
        $user_admin = User::find($id);
        $user_admin->is_admin = 1;
        $user_admin->save();
        return redirect('user')->with('success', 'Changed to Admin');
    }
}
