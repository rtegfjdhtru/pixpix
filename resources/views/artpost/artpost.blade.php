@extends('layouts.common')

@section('title','投稿画面')

@include('layouts.header')


@section('content')
    <div class="main">
        <form action="" method="post" enctype="multipart/form-data" class="art-post-form">
            {{csrf_field()}}
            <p class="u-art-post-text">投稿画像の選択</p>
            <div class="art-post-img-warp">
                <input type="file" name="img" class="art-post-file">
                <div class="art-post-file-btn">ファイルを選択</div>
                <p>拡張子はJPEG,PNGのみ。30MB以下で投稿してください。</p>
                @if($errors->has('img'))
                    <p class="form-error-text">{{$errors->first('img')}}</p>
                    @endif
            </div>


            <ul class="art-post-ul">
                <li class="art-post-list-text">タイトル</li>
                <li class="art-post-list-input"><input type="text" name="title" class="art-post-input"></li>
                @if($errors->has('title'))
                    <p class="form-error-text">{{$errors->first('title')}}</p>
                @endif
            </ul>

            <ul class="art-post-ul">
                <li class="art-post-list-text">説明</li>
                <li class="art-post-list-input"><textarea name="title" class="art-post-input art-post-input-textarea"></textarea></li>
                @if($errors->has('my_comment'))
                    <p class="form-error-text">{{$errors->first('my_comment')}}</p>
                @endif
            </ul>

            <ul class="art-post-ul">
                <li class="art-post-list-text">タグ</li>
                <li class="art-post-list-input"><input type="text" name="tag" class="art-post-input"></li>
                @if($errors->has('tag'))
                    <p class="form-error-text">{{$errors->first('tag')}}</p>
                @endif
            </ul>


            <input type="submit" value="投稿" class="art-post-btn">

        </form>
    </div>

@endsection

@include('layouts.footer')
