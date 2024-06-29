<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class AdminUserRequest extends FormRequest
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
            'full_name' => 'required|max:100',
            'nick_name' => 'required|max:60',
            'pharmacist_id_number'=> 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('store_admin'),
            'number' =>'required|unique:users,phone,'.$this->route('store_admin'),
            'status' =>'required|in:1,0',
            'stores'=>'required|array',
            'stores.*' =>'exists:stores,id',
            'splcode' => 'required'
        ];
    }
}
