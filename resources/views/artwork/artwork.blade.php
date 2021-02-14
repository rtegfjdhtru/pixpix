@extends('layouts.common')

@section('title','画像を表示しているタイトル')

@include('layouts.header')

@section('content')
    <section class="artwork-content">
        <div class="artwork-content-left">
            <p class="artwork-img"><a href=""><img src="dist/img/img6.jpg" alt="投稿画像"></a></p>
            <div class="artwork-info">
                <div class="artwork-info-main">
                    <h3 class="artwork-title">カメレオン</h3>
                    <i class="far fa-star fa-3x star-icon js-star"></i>
                </div>
                <div class="artwork-info-content">
                    <div class="artwork-text-content">
                        <p class="artwork-evaluation">閲覧数:10000</p>
                        <p class="artwork-data">2020/1/1</p>
                    </div>
                    <div class="artwork-good">
                        <i class="far fa-thumbs-up fa-2x good-icon"></i>
                        <p>1000</p>
                    </div>
                </div>

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

            </div>

            <div class="comment-content">
                <h4 class="comment-title">コメント</h4>
                <form action="" method="post" class="form-comment">
                    <input type="text" name="comment" class="form-comment-input">
                    <input type="submit" value="送信">
                </form>
            </div>

            <div class="comment-content-post">
                <p class="comment-icon"><img src="dist/img/img4.jpg" alt="コメントのアイコン"></p>
                <div class="comment-post-area">
                    <h4 class="comment-name">デスピサロ</h4>
                    <p>テストコメントテストコメントテストコメントテストコメントテストコメントテストコメント</p>
                </div>
            </div>

            <div class="comment-content-post">
                <p class="comment-icon"><img src="dist/img/img4.jpg" alt="コメントのアイコン"></p>
                <div class="comment-post-area">
                    <h4 class="comment-name">デスピサロ</h4>
                    <p>テストコメントテストコメントテストコメントテストコメントテストコメントテストコメント</p>
                </div>
            </div>

            <div class="comment-content-post">
                <p class="comment-icon"><img src="dist/img/img4.jpg" alt="コメントのアイコン"></p>
                <div class="comment-post-area">
                    <h4 class="comment-name">デスピサロ</h4>
                    <p>テストコメントテストコメントテストコメントテストコメントテストコメントテストコメント</p>
                </div>
            </div>

            <div class="comment-content-post">
                <p class="comment-icon"><img src="dist/img/img4.jpg" alt="コメントのアイコン"></p>
                <div class="comment-post-area">
                    <h4 class="comment-name">デスピサロ</h4>
                    <p>テストコメントテストコメントテストコメントテストコメントテストコメントテストコメント</p>
                </div>
            </div>

        </div>
        <div class="artwork-content-right">
            <div class="recommended-area">


                <div href="" class="recommended-post">
                    <a href="artwork.html"> <p class="recommended-img"><img src="dist/img/img4.jpg" alt="おすすめの画像"></p></a>
                    <div class="recommended-textarea">
                        <a href="artwork.html"> <h4 class="recommended-title">イラストタイトル</h4></a>
                        <a href="user.html"> <p class="recommended-name">グラハム</p></a>
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
