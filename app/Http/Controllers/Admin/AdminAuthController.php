<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function adminLogin(Request $request)
    {
        $adminCredionals = $request->validate([
            'username' => "required",
            'password' => "required",
        ]);

        if (Auth::attempt(['username' =>$adminCredionals['username'], 'password' => $adminCredionals['password'], 'role_type' => 1])) {
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    }
    public function adminLogout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
