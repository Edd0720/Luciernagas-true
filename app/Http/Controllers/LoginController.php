<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function validateLogin(Request $request) {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];


        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {

            $user = User::where('email',$request->email)->first();

            if ($user['id_rol'] == 1) {
            return redirect('profile');

            } else {
                $users = User::all();

                return redirect('/admin')->with('clientela', 'users'); 
            }

        } else {
            return redirect('login');
        }
    }
}
