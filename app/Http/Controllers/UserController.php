<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user()
    {
        $user = User::where('level', '!=', 'admin')->orderBy('name', 'ASC')->get();

        return view('user.user', compact('user'));
    }

    public function createUser(Request $request)
    {
        return view('user.create_user');
    }

    public function prosesCreateUser(Request $request)
    {
        if($request->password != $request->confirm_password){
            return back()->with('info', 'Password Tidak Sama');
        }else{
            User::create([
                'name' => $request->name,
                'level' => $request->level,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ]);
            return redirect('user')->with('toast_success', 'User Berhasil Ditambah!');
        }
    }

    public function editUser($id)
    {
        $editUp = User::findorfail($id);
        return view('user.edit_user', compact('editUp'));
    }

    public function prosesUpdateUser(Request $request, $id)
    {
        if($request->password != $request->confirm_password){
            return back()->with('info', 'Password Tidak Sama');
        }else{
            $editUp = User::findorfail($id);
            $editUp->update($request->all());
            return redirect('user')->with('toast_success', 'User Berhasil Diedit!');
        }
    }

    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return back()->with('info', 'Data Berhasil di Hapus!');
    }
}
