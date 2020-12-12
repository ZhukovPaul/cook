<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackFormRequest extends FormRequest
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
            "name"      =>  "required|min:5",
            "email"     =>  "required|email",
            "sendCheck" =>  "required"
        ];
    }
    public function messages()
    {
        return [
            "name.required" =>"Поле Имя не заполнено ",
            "email.required" =>"Поле Email не заполнено ",
            "sendCheck.required" =>"Вы не подтвердили согласие на обработку персональных данных"
        ];
    }
}
