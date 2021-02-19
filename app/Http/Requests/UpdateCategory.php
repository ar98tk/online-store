<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_ar'       => 'required|unique|max:255',
            'name_en'       => 'required|unique|max:30',
        ];
    }
    public function messages()
    {
        return [
            'name_ar.required'                  => 'اسم القسم بالعربية مطلوب.',
            'name_en.required'                  => 'اسم القسم بالأنجليزية مطلوب.',
            'name_ar.unique'                    => 'اسم القسم باللغة العربية مستحدم من قبل ، برجاء استخدام اسم اخر.',
            'name_en.unique'                    => 'اسم القسم باللغة الأنجليزية مستحدم من قبل ، برجاء استخدام اسم اخر.',
        ];
    }
}
