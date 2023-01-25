<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
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
    public function rules()
    {

        return [
            'imie' => 'required|alpha',
            'nazwisko' => 'required|alpha',
            'płeć' => 'required|in:female,male',
            'telefon' => 'required|numeric|digits:9',
            'rola' => 'required|in:1,2',
            'email' => 'required|string|email|max:255|unique:users',
            'hasło' => 'required|min:6',
        ];
    }
}
