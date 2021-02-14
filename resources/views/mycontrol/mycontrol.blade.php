@extends('layouts.common')

@section('title','マイページ')

@include('layouts.header')

@section('content')
    <div class="main">
    <div class="user-content">

        <div class="c-top-warp">
            <h3 class="c-top-warp-title">イラスト管理</h3>
        </div>

        <div class="user-info">
            <p class="user-page-icon"><img src="dist/img/img7.jpg" alt="ユーザーページのアイコン"></p>
            <div class="user-text-wrap">
                <h2 class="user-page-name">あくまだいかん</h2>
                <p class="user-self-text">自己紹介分自己紹介分自己紹介分自己紹介分自己紹介分自己紹介分</p>
            </div>
        </div>

        <div class="user-art-warp">

            <nav class="pagination user-top-pagination">
                <ul>
                    <li><a href="" class="pagination-active">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
            </nav>

            　　　　　　　<!--モーダル-->
            <div id="ex1" class="modal">
                <p class="model-text">投稿した画像を削除してもよろしいでしょうか？</p>
                <div class="model-wrap">
                    <a href="#" rel="modal:close" class="model-btn-del">削除する</a>
                    <a href="#" rel="modal:close" class="model-btn-back">閉じる</a>
                </div>
            </div>

            <div class="search-content">
                <div class="post-card-search">
                    <a href="artwork.html">
                        <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">願望</a></h2>
                                <p class="post-card-name"><a href="">ささくれ(ユーザー名)</a></p>
                                <p class="post-card-count">閲覧数:11111</p>
                                <a href="#ex1" rel="modal:open"><i class="far fa-trash-alt del-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-card-search">
                    <a href="">
                        <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">願望</a></h2>
                                <p class="post-card-name"><a href="">ささくれ(ユーザー名)</a></p>
                                <p class="post-card-count">閲覧数:11111</p>
                                <a href="#ex1" rel="modal:open"><i class="far fa-trash-alt del-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-card-search">
                    <a href="">
                        <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">願望</a></h2>
                                <p class="post-card-name"><a href="">ささくれ(ユーザー名)</a></p>
                                <p class="post-card-count">閲覧数:11111</p>
                                <a href="#ex1" rel="modal:open"><i class="far fa-trash-alt del-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-card-search">
                    <a href="">
                        <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">願望</a></h2>
                                <p class="post-card-name"><a href="">ささくれ(ユーザー名)</a></p>
                                <p class="post-card-count">閲覧数:11111</p>
                                <a href="#ex1" rel="modal:open"><i class="far fa-trash-alt del-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-card-search">
                    <a href="">
                        <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">願望</a></h2>
                                <p class="post-card-name"><a href="">ささくれ(ユーザー名)</a></p>
                                <p class="post-card-count">閲覧数:11111</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="pagination">
                <ul>
                    <li><a href="" class="pagination-active">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
            </nav>

        </div>
    </div>


    </div>

    </div>


@endsection

@include('layouts.footer')
