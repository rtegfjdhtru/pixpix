@extends('layouts.common')

@section('title',$artwork['title'])
@include('layouts.header')

@section('content')
    <section class="artwork-content">
        <div class="artwork-content-left">
            <p class="artwork-img"><a href=""><img
                        src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$artwork['image']}}"
                        alt="投稿画像"></a></p>
            <div class="artwork-info">
                <div class="artwork-info-main">
                    <h3 class="artwork-title">{{$artwork['title']}}</h3>
                    <i class="fa-star fa-3x star-icon js-star
                            @if ($already_liked)fas star-icon-active
                            @else far
                            @endif" data-likes="{{$artwork['id']}}"></i>
                </div>
                <div class="artwork-info-content">
                    <div class="artwork-text-content">
                        <p class="artwork-evaluation">閲覧数:{{$artwork['view_count']}}</p>
                        <p class="artwork-data">{{$artwork['created_at']}}</p>
                    </div>
                    <div class="artwork-good" id="js-artwork-good">
                        <i class="far fa-thumbs-up fa-2x good-icon js-good-btn"></i>
                        <p class="js-good-count">{{$artwork['good_count']}}</p>
                    </div>
                </div>
                @if($artwork['user_id'] === $user_data['id'])
                    <form method="post" action="artwork/del?id={{$artwork['id']}}">
                        {{csrf_field()}}
                    <input type="submit" value="削除" name="">
                    </form>
                @endif
                <div class="artwork-tag">
                    <!--タグは10個まで -->
                    <a href="">動物</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                    <a href="">カメレオン</a>
                </div>
                <p>{{$artwork->my_comment}}</p>
            </div>
            <div class="comment-content">
                <h4 class="comment-title">コメント</h4>
                <form action="" method="post" class="form-comment">
                    {{csrf_field()}}
                    <input type="text" name="text" class="form-comment-input">
                    <input type="submit" value="送信" name="comment_btn">
                </form>
            </div>

            @foreach($comment as $data)
                <div class="comment-content-post">
                    <p class="comment-icon"><img
                            src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->user->image}}"
                            alt="コメントのアイコン"></p>
                    <div class="comment-post-area">
                        <h4 class="comment-name">{{$data->user->name}}</h4>
                        <p>{{$data->text}}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="artwork-content-right">
            <div class="recommended-area">


                <div href="" class="recommended-post">
                    <a href="artwork.html"><p class="recommended-img"><img src="dist/img/img4.jpg" alt="おすすめの画像"></p>
                    </a>
                    <div class="recommended-textarea">
                        <a href="artwork.html"><h4 class="recommended-title">イラストタイトル</h4></a>
                        <a href="user.html"><p class="recommended-name">グラハム</p></a>
                        <p class="recommended-info">閲覧数:1111</p>
                    </div>
                </div>

                <a href="" class="recommended-post">
                    <p class="recommended-img"><img src="dist/img/img4.jpg" alt="おすすめの画像"></p>
                    <div class="recommended-textarea">
                        <h4 class="recommended-title">イラストタイトル</h4>
                        <p class="recommended-name">グラハム</p>
                        <p class="recommended-info">閲覧数:1111</p>
                    </div>
                </a>

            </div>
        </div>

    </section>
@endsection

@include('layouts.footer')
