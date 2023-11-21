<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required',
            'password'=> 'required',
            'rol' => 'required',
        ];
    }

    public function getCredentials(){
        $email = $this->get('email');
        $password = $this->get('password');
        $rol = $this->get('rol');

        if($rol=='m'){
        return $this->only('email','password','rol');
        }
    }
}
