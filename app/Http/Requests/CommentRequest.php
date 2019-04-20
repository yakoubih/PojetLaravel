<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment_name' => 'bail|required|between:1,20|alpha',
            'comment_email' => 'bail|required|email',
            'comment_content' => 'bail|required|max:250'
        ];
    }
}
