<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{
    public function edit()
    {
        if (session ('success_message')) {
            alert()->success('Success', session('success_message'))->autoClose(6000);;
        }
        return view('password.edit');
    }
    public function update()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $currentPassword = auth()->user()->password;
            $old_password = request('old_password');

            if (Hash::check($old_password, $currentPassword)) {
                auth()->user()->update([
                    'password' => Hash::make(request('password')),
                ]);

                return back()->with('success', 'Password telah berhasil diubah');

            } else {
                return back()->withErrors(['old_password' => 'Make sure you fill your current password']);
            }

    }
}
