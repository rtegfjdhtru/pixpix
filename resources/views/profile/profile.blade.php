@extends('layouts.common')

@section('title','プロフィール変更画面')

@include('layouts.header')

@section('content')
    <div class="main">
        <form action="" method="post" class="form-profile" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="c-top-warp">
                <h3 class="c-top-warp-title">プロフィール変更ページ</h3>
            </div>
            <label class="form-profile-label">名前
                <input type="text" name="name" class="form-profile-input" value="{{$user['name']}}">
            </label>
            <label class="form-profile-label">自己紹介
                <textarea name="selfText" class="form-profile-input">{{$user['selfText']}}</textarea>
            </label>
            <p>アイコン変更</p>
            <label class="form-profile-label form-profile-label-upload js-profile-label-upload">
                <input type="file" name="image" class="form-profile-img-upload">
                <p class="preview-back-cover"></p>
                <i class="fas fa-camera preview-back-cover-icon"></i>
                <p class="form-profile-preview-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$user['image']}}" alt="プロフィール画像" class="form-profile-image-box"></p>

            </label>

            <input type="submit" value="変更" class="profile-submit">
        </form>


    </div>
@endsection

@include('layouts.footer')
