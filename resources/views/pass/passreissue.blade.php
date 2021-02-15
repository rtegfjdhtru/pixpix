@extends('layouts.common')

@section('title','パスワード再発行')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">パスワード再発行</h3>
            <form class="signup-form" action="" method="post">

                <label class="form-label">
                    <input type="text" name="email" placeholder="登録したEmailを入力してください" class="form-input">
                    <p class="form-error-text">メールアドレスの形式が違います。</p>
                </label>


                <input type="submit" value="送信" class="form-submit">
            </form>
        </div>
    </div>

@endsection

@include('layouts.footer')
