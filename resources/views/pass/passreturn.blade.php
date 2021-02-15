@extends('layouts.common')

@section('title','パスワード再発行| 入力')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">パスワードの再発行</h3>
            <form class="signup-form" action="" method="post">


                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input">
                </label>

                <label class="form-label">
                    <input type="password" name="password-re" placeholder="パスワード再入力" class="form-input">
                </label>

                <input type="submit" value="送信" class="form-submit">
            </form>
        </div>
    </div>
@endsection

@include('layouts.footer')
