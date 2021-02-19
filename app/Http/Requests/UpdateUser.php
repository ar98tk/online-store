<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'       => 'required|max:30',
            'email'      => ['required','email', Rule::unique('users')->ignore($this->user)],
            'password'   => 'nullable|confirmed|min:8',
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
