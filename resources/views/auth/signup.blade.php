@extends('layouts.common')

@section('title','新規登録')

@include('layouts.header_nomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">新規登録</h3>
            <form class="signup-form" action="" method="post">

                <label class="form-label">
                    <input type="text" name="email" placeholder="Email" class="form-input">
                    <p class="form-error-text">メールアドレスの形式が違います。</p>
                </label>

                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input">
                </label>

                <label class="form-label">
                    <input type="password" name="password-re" placeholder="パスワード再入力" class="form-input">
                </label>

                <input type="submit" value="登録" class="form-submit">
            </form>
        </div>
    </div>
@endsection

@include('layouts.footer')
