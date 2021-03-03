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
                    <input type="text" name="name" placeholder="ユーザー名" class="form-input" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <p class="form-error-text">{{$errors->first('name')}}</p>
                    @endif
                </label>

                <label class="form-label">
                    <input type="text" name="email" placeholder="Email" class="form-input" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <p class="form-error-text">{{$errors->first('email')}}</p>
                    @endif
                </label>

                <label class="form-label">
                    <input type="password" name="password" placeholder="パスワード入力" class="form-input">
                    @if ($errors->has('password'))
                        <p class="form-error-text">{{$errors->first('password')}}</p>
                    @endif
                </label>

                <label class="form-label">
                    <input type="password" name="password_confirmation" placeholder="パスワード再入力" class="form-input" autocomplete="new-password"te>
                </label>

                <input type="submit" value="登録" class="form-submit">
                <div class="form-link-content">
                    <a href="{{route('login')}}" class="form-link-text">ログイン</a>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
