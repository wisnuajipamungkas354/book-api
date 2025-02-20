<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class BookRequest extends FormRequest
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
            'judul' => 'required|min:3',
            'penulis' => 'required|min:3',
            'tahun_terbit' => 'required|numeric|digits:4',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul buku tidak boleh kosong',
            'judul.min' => 'Judul buku minimal 3 karakter',
            'penulis.required' => 'Penulis buku tidak boleh kosong',
            'penulis.min' => 'Penulis buku minimal 3 karakter',
            'tahun_terbit.required' => 'Tahun terbit buku tidak boleh kosong',
            'tahun_terbit.numeric' => 'Tahun terbit buku harus angka',
            'tahun_terbit.digits' => 'Tahun terbit buku minimal 4 digit angka',
            'deskripsi.required' => 'Deskripsi buku tidak boleh kosong',
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => 'Data tidak valid',
            'errors' => $validator->errors(),
        ]));
    }
}
 