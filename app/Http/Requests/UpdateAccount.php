<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccount extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                  => 'required',
            'money_amount'          => 'required|numeric',
            'type'                  => 'required',
            'notes'                 => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required'                => 'وصف المعاملة مطلوب.',
            'money_amount.required'        => 'قيمة المعاملة مطلوبة.',
            'money_amount.numeric'         => 'قيمة المعاملة يجب ان تكون رقم.',
            'type.required'                => 'يجب اختيار نوع للمعاملة.',
        ];
    }
}
