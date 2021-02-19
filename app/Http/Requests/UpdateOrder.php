<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrder extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_name'         => 'required',
            'customer_mobile'       => 'required|numeric',
            'customer_address'      => 'required',
            'item_1'                => 'required',
            'item_1_category'       => 'required',
            'item_1_amount'         => 'required|numeric',
            'item_1_price'          => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'customer_name.required'       => 'اسم العميل بالعربية مطلوب.',
            'customer_mobile.required'     => 'رقم العميل مطلوب.',
            'customer_mobile.numeric'      => 'رقم العميل يجب ان يكون مكون من أرقام فقط ولا يحتوي علي أي حروف.',
            'customer_address.required'    => 'عنوان العميل مطلوب.',
            'item_1.required'              => 'لا يمكن أن يكون حقل المنتج الأول فارغا.',
            'item_1_category.required'     => 'لا يمكن أن يكون حقل قسم المنتج الأول فارغا.',
            'item_1_amount.required'       => 'لا يمكن أن يكون حقل كمية المنتج الأول فارغا.',
            'item_1_price.required'        => 'لا يمكن أن يكون حقل سعر المنتج الأول فارغا.',
            'item_1_amount.numeric'        => 'كمية المنتج يجب أن تكون رقما.',
            'item_1_price.numeric'         => 'سعر المنتج يجب أن يكون رقماَ.',
        ];
    }
}
