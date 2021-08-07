<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'products'=>'required|distinct',
            'price'=>'required|distinct',
            'income'=>'required|distinct',
            'expense'=>'required',
            'about_products'=>'required|distinct',
            'workers'=>'required',
            'comments'=>'required',
            'quality'=>'required|distinct',
        ];
    }
    public function messages()
    {
        return [
            'products.required'=>'Введите products',
            'price.required'=>'Введите price',
            'income.required'=>'Введите income',
            'expense.required'=>'Введите expense',
            'about_products.required'=>'Введите about_products',
            'workers.required'=>'Виберите workers',
            'comments.required'=>'Введите comments',
            'quality.required'=>'Виберите quality',
            'products.distinct'=>'Введите другой введенный products',
            'price.distinct'=>'Введите другой введенный price',
            'income.distinct'=>'Введите другую введенный income',
            'expense.distinct'=>'Введите другую введенный expense',
            'about_products.distinct'=>'Введите другой введенный about_products',
            'workers.distinct'=>'Введите другой введенный workers',
            'comments.distinct'=>'Введите другую введенный comments',
            'quality.distinct'=>'Введите другую введенный quality',
        ];
    }
}
