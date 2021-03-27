@extends('layouts.common')

@section('title','ログイン')

@include('layouts.headernomenu')

@section('content')
    <div class="signup-filed">
        <div class="signup-block">
            <h3 class="signup-title">ログイン</h3>
            <form class="signup-form" action="{{ route('login') }}" method="post">
                {{csrf_field()}}
                <label class="form-label">
                    <input type="text" name="email" placeholder="Email" class="form-input">
                    @error('email')
                    <p class="form-error-text">
                        {{ $message }}</p>
                    @enderror
                </label>

                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input">
{{--                    @if ($errors->has('password'))--}}
{{--                        <p class="form-error-text">{{$errors->first('password')}}</p>--}}
{{--                    @endif--}}
                    @error('password')
                    <p class="form-error-text">
                        {{ $message }}</p>
                    @enderror
                </label>

                <label class="form-label form-label-checkbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>ログインしたままにする
                </label>

                <input type="submit" value="送信" class="form-submit">
                <div class="form-link-content">
                    <a href="passreissue" class="form-link-text">パスワードを忘れてしまった。</a>
                    <a href="{{url('register')}}" class="form-link-text">新規登録</a>
                </div>
            </form>

        </div>
    </div>
@endsection

@include('layouts.footer')





{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
