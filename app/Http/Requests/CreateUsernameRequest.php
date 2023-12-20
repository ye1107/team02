<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsernameRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'number' => 'required',
                'name' => 'required',
                'poto' => 'required',
             ];
    }
    public function messages()
    {
        return [
            "number.required" => "教職員生編號 為必填",
            "name.required" => "教職員生姓名 為必填",
            "poto.required" => "人臉照片檔名路徑 為必填",
        ];
    }
}
