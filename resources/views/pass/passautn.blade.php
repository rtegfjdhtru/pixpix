@extends('layouts.common')

@section('title','認証コード入力画面')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">認証コード</h3>
            <form class="signup-form" action="" method="post">

                <label class="form-label">
                    <input type="text" name="auth_code" placeholder="Emailに送られた認証コードを入力してください" class="form-input">
                    <p class="form-error-text">認証コード違います。</p>
                </label>


                <input type="submit" value="送信" class="form-submit">
            </form>
        </div>
    </div>

@endsection

@include('layouts.footer')
