<?php

namespace App\Http\Controllers;
use App\Http\Requests\validacionesControll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    function inicio() {
        return view('home', ['titulo' => 'Luciernagas']);
    }

    function login(){
        return view('login');
    }

    function registro() {
        return view('registro');
    }

    function publicidad() {
        return view('publicidad');
    }

    public function store(validacionesControll $request) {

        $query = new User; 
        $query->name=$request->name; 
        $query->lastname=$request->lastname; 
        $query->email=$request->email; 
        $query->phone=$request->phone;
        $query->id_rol= 1;
        $query->password=Hash::make($request->password); 
        $query->save();

        Auth::login($query);

        return redirect('login'); 
    }
}
