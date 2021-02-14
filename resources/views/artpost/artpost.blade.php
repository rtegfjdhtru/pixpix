@extends('layouts.common')

@section('title','投稿画面')

@include('layouts.header')


@section('content')
    <div class="main">
        <form action="" method="post" enctype="multipart/form-data" class="art-post-form">

            <p class="u-art-post-text">投稿画像の選択</p>
            <div class="art-post-img-warp">
                <input type="file" name="img" class="art-post-file">
                <div class="art-post-file-btn">ファイルを選択</div>
                <p>拡張子はJPEG,PNGのみ。30MB以下で投稿してください。</p>
            </div>


            <ul class="art-post-ul">
                <li class="art-post-list-text">タイトル</li>
                <li class="art-post-list-input"><input type="text" name="title" class="art-post-input"></li>
            </ul>

            <ul class="art-post-ul">
                <li class="art-post-list-text">説明</li>
                <li class="art-post-list-input"><textarea name="title" class="art-post-input art-post-input-textarea"></textarea></li>
            </ul>

            <ul class="art-post-ul">
                <li class="art-post-list-text">タグ</li>
                <li class="art-post-list-input"><input type="text" name="tag" class="art-post-input"></li>
            </ul>


            <input type="submit" value="投稿" class="art-post-btn">

        </form>
    </div>

@endsection

@include('layouts.footer')
