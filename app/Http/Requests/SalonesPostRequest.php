<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalonesPostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes():array{
        return [
            'tittle' => 'tittle',
            'description' => 'description',
            'price' => 'price',
            'capacity' => 'capacity',
            'photo' =>  'photo'
        ];
        }
}
