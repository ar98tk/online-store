<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewUser extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'       => 'required|max:30',
            'email'      => 'required|unique:users|email',
            'password'   => 'required|confirmed|min:8',
        ];
    }
    public function messages()
    {
        return [
            'name.required'                  => 'اسم المستخدم مطلوب.',
            'name.max'                       => 'اسم المستخدم لا يجب أن يزيد عن 30 حرف.',
            'email.required'                 => 'البريد الإلكتروني مطلوب.',
            'name.unique'                    => 'البريد الإلكتروني مستخدم من قبل ، برجاء استخدام بريد أخر.',
            'email.email'                    => 'البريد الإلكتروني غير صالح.',
            'password.required'              => 'كلمة المرور مطلوبة.',
            'password.min'                   => 'كلمة السر لا يجب ان تكون اقل من 8 أحرف.',
            'password.confirmed'             => 'تأكيد كلمة السر لا يتطابق مع كلمة المرور.',
        ];
    }
}
