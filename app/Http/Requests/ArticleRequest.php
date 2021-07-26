<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:70',
            'description' => 'required|min:100|max:700',
            'publishdate' => 'required|date_format:y-m-d',
            'created_at' => 'required|date_format:y-m-d',
            'updated_at' => 'required|date_format:y-m-d',

        ];
    }
}
