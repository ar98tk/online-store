<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewProduct extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name_ar'       => 'required|unique:products',
            'product_name_en'       => 'required|unique:products',
            'price'                 => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'product_name_ar.required'     => 'اسم المنتج بالعربية مطلوب.',
            'product_name_en.required'     => 'اسم المنتج بالأنجليزية مطلوب.',
            'product_name_ar.unique'       => 'اسم المنتج باللغة العربية مستحدم من قبل ، برجاء استخدام اسم اخر.',
            'product_name_en.unique'       => 'اسم المنتج باللغة الأنجليزية مستحدم من قبل ، برجاء استخدام اسم اخر.',
            'price.required'               => 'يجب ادخال سعر للمنتج.',
            'price.numeric'                => 'سعر المنتج يجب أن يكون رقماَ.',
        ];
    }
}
