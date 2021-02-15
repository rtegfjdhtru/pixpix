@extends('layouts.common')

@section('title','ログイン')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">ログイン</h3>
            <form class="signup-form" action="" method="post">

                <label class="form-label">
                    <input type="text" name="email" placeholder="Email" class="form-input">
                    <p class="form-error-text">メールアドレスの形式が違います。</p>
                </label>

                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input">
                    <p class="form-error-text">メールアドレスの形式が違います。</p>
                </label>

                <label class="form-label form-label-checkbox">
                    <input type="checkbox">ログインしたままにする
                </label>

                <input type="submit" value="送信" class="form-submit">
                <div class="form-link-content">
                    <a href="passreissue.html" class="form-link-text">パスワードを忘れてしまった。</a>
                    <a href="signup.html" class="form-link-text">新規登録</a>
                </div>
            </form>

        </div>
    </div>
@endsection

@include('layouts.footer')
