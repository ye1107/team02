<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKeyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'key' => 'required',
                'room' => 'required'

             ];
    }
    public function messages()
    {
        return [
            "key.required" => " 鑰匙編號 為必填",
            "room.required" => "教室名稱 為必填",
        ];
    }
}
