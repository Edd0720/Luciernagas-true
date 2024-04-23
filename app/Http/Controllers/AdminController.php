<?php

namespace App\Http\Controllers;

use App\Models\Salones;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use App\Http\Requests\SalonesPostRequest;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function admin()
{
    $clientes = User::all();
    $photos = File::allFiles(public_path('salones'));

    return view('plantillas.admin.admin', [
        'clientela' => $clientes,
        'photos' => $photos
    ]);
}

    function añadir() {
        return view('plantillas.admin.añadirsucursal', ['titulado' => 'añadir']);
    }


    function deleteUser($id) {

        $cliente = User::find($id);
        $cliente->delete();

        return redirect('/admin');
    }

    function editUser($id) {
        $cliente = User::find($id);

        return view('plantillas.admin.editusuario', ['cliente' => $cliente, 'titulado' => "editar"]);
    }

    function guardarSalon(SalonesPostRequest $request) {
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('salones'), $imageName);
            $photoPath = 'salones/'.$imageName;
        } else {
            $photoPath = null;
    
        $query = new Salones(); 
        $query->tittle = $request->tittle; 
        $query->description = $request->description; 
        $query->price = $request->price; 
        $query->capacity = $request->capacity; 
        $query->photo = $photoPath;
        $query->save();
    
        return redirect('/admin'); 
        }
    }   
}
