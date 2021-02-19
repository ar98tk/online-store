<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreNewCustomer extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                  => 'required',
            'mobile'                => 'required|numeric|unique:customers',
            //'mobile'                => ['required','numeric', Rule::unique('customers')->ignore($this->customer)],
            'address'               => 'nullable',
            'notes'                 => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required'                => 'اسم العميل مطلوب.',
            'mobile.required'              => 'رقم الهاتف مطلوب.',
            'mobile.unique'                => 'رقم الهاتف مستخدم من قبل برجاء ادخال رقم أخر.',
            'mobile.numeric'               => 'رقم الهاتف المحمول لا يمكن أن يحتوي علي أي حروف. مثلا [0123456789]',
        ];
    }
}
