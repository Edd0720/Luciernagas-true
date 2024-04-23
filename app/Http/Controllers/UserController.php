<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function profile(){
        return view('plantillas.user.profile', ['titulo' => 'perfil']);
    }

    // FUNCIONES PARA LA SECCION DE ICONOS

    function reservar() {
        return view('plantillas.user.reservations', ['titulo' => 'reservations']);
    }
    
    function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('inicio');
    }

    function store_salon() {

    }

}