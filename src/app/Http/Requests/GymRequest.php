<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GymRequest extends FormRequest
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
            'prefecture'=>'required',
            'city'=>'required',
        ];
    }

    public function messages(){
        return [
            'prefecture.required'=>'都道府県を入力してください',
            'city.required'=>'市町村を入力してください',
        ];
    }
}
