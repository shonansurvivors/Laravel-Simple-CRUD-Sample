<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name' => 'required|max:30',
            'age' => '',
            'sex' => 'required|integer',
            'memo' => 'max:100'
        ];
    }
    /**
     * 項目名
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => '名前',
            'age' => '年齢',
            'sex' => '性別',
            'memo' => '備考'
        ];
    }
}
