<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCapsuleRequest extends FormRequest
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
            'name' => 'required|max:20',
            'skype_id' => 'required|max:30',
            'comment' => 'required|max:300'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は20文字までです',
            'skype_id.required' => 'SkypeIDを入力してください',
            'skype_id.max' => '最大文字数を超えています',
            'comment.required' => 'コメントを入力してください',
            'comment.max' => '自己紹介文は300文字までです'
        ];
    }
}
