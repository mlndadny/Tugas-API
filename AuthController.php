<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ceklogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/home");
        } else {
            return redirect("/");
        }
    }

    public function ceklogout()
    {
        Auth::logout();
        return redirect("/");
    }

    public function updateuser(Request $request)
    {
        $request->validate([
            'password_lama' => 'required|string',
            'password_baru' => 'required|string|min:6|confirmed',
        ]);

        
        $user = Auth::user();

        if (Hash::check($request->password_lama, $user->password)) {
            $user->password = Hash::make($request->password_baru);
            $user->save();
            return redirect()->back()->with('success', 'Password berhasil diperbarui.');
        } else {
            return redirect()->back()->withErrors(['password_lama' => 'Password lama salah.']);
        }
    }
}