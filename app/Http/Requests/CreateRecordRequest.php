<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'uid' => 'required',
                'kid' => 'required',
                'lend_date' => 'required|date',
                'lend_time' => 'required|dateearlier:lend_date,back_date,back_time',
                'back_date' => 'required|date|after_or_equal:lend_date',
                'back_time' => 'required'
             ];
    }
    public function messages()
    {
        return [
            "uid.required" => "使用者名稱 為必填",
            "kid.required" => "鑰匙編號 為必填",
            "lend_date.required" => "借用日期 為必填",
            "lend_time.required" => "借用時間 為必填",
            "back_date.required" => "歸還日期 為必填",
            "back_time.required" => "歸還時間 為必填",
            "back_date.after_or_equal" => "歸還日期 必須大於或等於借用日期",
            "lend_time.dateearlier"=>"歸還日期時間 必須晚於借用日期時間"
        ];
    }
 }