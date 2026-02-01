<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterTargetWeightRequest extends FormRequest
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
            'current_weight' => [
            'required',
            'numeric',
            'regex:/^\d{1,3}(\.\d{1})?$/',
            ],

            'target_weight' => [
                'required',
                'numeric',
                'regex:/^\d{1,3}(\.\d{1})?$/',
            ],
        ];
    }

    public function messages() {
        return [
            'current_weight.required' => '体重を入力して下さい',
            'current_weight.numeric' => '数字で入力して下さい',
            'current_weight.regex' => '4桁までの数字で入力してください。小数点は1桁で入力してください。',

            'target_weight.required' => '体重を入力して下さい',
            'target_weight.numeric' => '数字で入力して下さい',
            'target_weight.regex' => '4桁までの数字で入力してください。小数点は1桁で入力してください。',

        ];
    }
}
