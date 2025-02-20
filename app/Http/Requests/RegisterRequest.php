<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Nama tidak boleh kosong!',
            'role.required' => 'Role tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Password tidak boleh kosong!',
            'password.min' => 'Password minimal 8 karakter!',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong!',
            'password_confirmation.same' => 'Konfirmasi password tidak sesuai!',
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => 'Registrasi gagal!',
            'errors' => $validator->errors(),
        ]));
    }

    public function getData() {
        $data = $this->validated();
        $data['password'] = bcrypt($data['password']);
        unset($data['password_confirmation']);

        return $data;
    }
}
