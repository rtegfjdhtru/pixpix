<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        if ( $this->path() === 'signup' ) {
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
            'email'       => 'required|email',
            'password'    => 'required|between:5,255',
            'passwordRe' => 'required',
        ];
    }


    public function messages() {
        return [
            'email.required'                 => '入力してください',
            'email.email'                    => 'メールアドレスの形式で入力してください',
//            'email.exists:SELECT * FROM user WHERE email = email' => 'すでに登録されているメールアドレスです',
            'password.required'              => '入力してください',
            'password.between'        => 'パスワードは6文字以上で入力してください',
            'passwordRe.required'           => '入力してください',
            'passwordRe.different.password' => '再入力パスワードが間違っています。',

        ];
    }
}
