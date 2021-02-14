@extends('layouts.common')

@section('title','プロフィール変更画面')

@include('layouts.header')

@section('content')
    <div class="main">

        <form action="" method="post" class="form-profile" enctype="multipart/form-data">
            <div class="c-top-warp">
                <h3 class="c-top-warp-title">プロフィール変更ページ</h3>
            </div>
            <label class="form-profile-label">名前
                <input type="text" name="name" class="form-profile-input">
            </label>
            <label class="form-profile-label">自己紹介
                <textarea name="profile" class="form-profile-input"></textarea>
            </label>
            <p>アイコン変更</p>
            <label class="form-profile-label form-profile-label-upload js-profile-label-upload">
                <input type="file" name="img" class="form-profile-img-upload">
                <p class="preview-back-cover"></p>
                <i class="fas fa-camera preview-back-cover-icon"></i>
                <p class="form-profile-preview-cover"><img src="dist/img/icon_01.jpeg" alt="" class="form-profile-image-box"></p>

            </label>


            <input type="submit" value="変更" class="profile-submit">
        </form>
    </div>
@endsection

@include('layouts.footer')
