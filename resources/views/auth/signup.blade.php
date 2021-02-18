@extends('layouts.common')

@section('title','新規登録')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">新規登録</h3>
            <form class="signup-form" action="" method="post">
                {{csrf_field()}}
                <label class="form-label">
                    <input type="text" name="email" placeholder="Email" class="form-input" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <p class="form-error-text">{{$errors->first('email')}}</p>
                    @endif
                </label>

                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input" value="{{old('password')}}">
                    @if ($errors->has('password'))
                        <p class="form-error-text">{{$errors->first('password')}}</p>
                    @endif
                </label>

                <label class="form-label">
                    <input type="password" name="passwordRe" placeholder="パスワード再入力" class="form-input" value="{{old('passwordRe')}}">
                    @if ($errors->has('passwordRe'))
                        <p class="form-error-text">{{$errors->first('passwordRe')}}</p>
                    @endif
                </label>

                <input type="submit" value="登録" class="form-submit">

                {{--              test  --}}


            </form>
        </div>
    </div>
@endsection

@include('layouts.footer')
