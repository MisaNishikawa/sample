<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// ばりでーしょんするための
class CreateTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // ユーザー認証のメソッッド
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
        // ルールを入れる?
        return [

            // 対象の入力欄(左側)　=>（アロウ）　条件（右側）
            //telは入力必須ってこと。
            'tel'=>['required','numeric'],
        ];
    }
}
