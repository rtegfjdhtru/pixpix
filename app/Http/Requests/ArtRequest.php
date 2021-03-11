<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        if ( $this->path() === 'artpost' ) {
            return true;

        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'image'        => 'required|mimes:jpg,png|max:31457280', //30MB
            'title'      => 'required',
            'my_comment' => '',
            'tag'        => 'required',
        ];
    }

    public function messages() {
        return [
            'image.required' => '画像が選択されていません。',
            'image.mimes' => '拡張子が違います。',
            'image.max' =>'容量が上限を超えています。30MB以内にしてください。',
            'title.required' => 'タイトルが空白です。',
            'tag.required' => 'タグが空白です。',
        ];
    }

}
