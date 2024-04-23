<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class validacionesControll extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {      
       return true;
   }
   
   public function rules()
   {
       return [
           "name" => "required",
           "lastname" => "required",
           "email" => "required",
           "password" => "required|min:8|max:20",
           "recontraseña" => "required|same:password",
           "phone" => "required|min:10|max:10"
       ];
   }
   
   public function messages():array{
       return[
           'name.required' => 'Por favor ingrese su nombre, este campo no puede quedar vacío',
           'lastname' => 'No se olvide de colocar sus apellidos',
           'email.required' => 'Ingrese su correo por favor',
           'password.required' => 'Necesita ingresar una contraseña',
           'password.min' => 'La contraseña debe ser por lo menos entre 8 y 20 caracteres de longitud',
           'password.max' => 'La contraseña debe ser por lo menos entre 8 y 20 caracteres de longitud',
           'recontraseña.required' => 'Este campo tambien es importante',
           'phone.required' => 'Ingrese su numero telefonico',
           'phone.min' => 'Los telefonos celulares deben ser de una longitud de 10 digitos',
           'phone.max' => 'Los telefonos celulares deben ser de una longitud de 10 digitos'
       ];
   }
   
   public function attributes():array{
    return [
        'email' => 'email',
        'password' => 'password',
    ];
    }
}