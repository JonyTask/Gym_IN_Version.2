<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'age'=>['required','numeric'],
            'gender'=>['required'],
            'preMustle'=>['required'],
            'PR_TEXT'=>['required'],
        ];
    }

    public function messages(){
        return [
            'age.required'=>['年齢を入力してください'],
            'age.numeric'=>['年齢を数字で入力してください'],
            'gender.required'=>['性別を選択してください'],
            'preMustle.required'=>['好きな筋肉を入力してください'],
            'PR_TEXT'=>['自己紹介文を入力してください'],
        ];
    }
}
