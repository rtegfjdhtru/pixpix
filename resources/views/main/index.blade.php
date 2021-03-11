@extends('layouts.common')


@section('title','メインページ')

@include('layouts.header')

@section('content')

    <div class="main">
        <section class="main-left">
            <div class="main-left-field">
                <div class="main-left-cover"><img src="dist/img/icon_01.jpeg" alt="自分の画像" class="main-left-img"></div>
                <div class="main-left-backcolor">
                    <h2 class="main-left-name">あくまだいかん</h2>
                    <div class="main-left-info">
                        <a href="profile.html" class="main-left-link">プロフィール</a>
                        <a href="mycontrol.html" class="main-left-link">イラスト管理</a>
                        <a href="history.html" class="main-left-link">履歴</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="main-center">
            <div class="main-center-title">新着のイラスト</div>

            <div class="main-center-postarea-body">
                <div class="main-center-postarea">

                    @foreach($items as $item)
                        <div class="post-card">
                            <a href="artwork.html">
                                <p class="post-card-cover"><img src="{{url('storage/app/public/uploads/'.$item->img)}}" alt="最新のイラストの画像"></p>
                            </a>
                            <div class="post-card-info">
                                <div class="post-card-info-inner">
                                    <a href="user.html"><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                    <div class="post-card-info-inner-text">
                                        <h2 class="post-card-title"><a href="artwork.html">{{$item->title}}</a></h2>
                                        <p class="post-card-name"><a href="user.html">ささくれ(ユーザー名)</a></p>
                                        <p class="post-card-count">閲覧数:{{$item->view_count}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="post-card">
                        <a href="artwork.html">
                            <p class="post-card-cover"><img src="dist/img/img7.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href="user.html"><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="artwork.html">願望</a></h2>
                                    <p class="post-card-name"><a href="user.html">ささくれ(ユーザー名)</a></p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img8.jpg" alt="最新のイラストの画像"></p>
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

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
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

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-card">
                        <a href="">
                            <p class="post-card-cover"><img src="dist/img/img9.jpg" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="dist/img/img4.jpg" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">願望</a></h2>
                                    <p class="post-card-name">ささくれ(ユーザー名)</p>
                                    <p class="post-card-count">閲覧数:11111</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <h3 class="main-center-title">急上昇中のタグ</h3>
            <div class="main-center-tagarea">
                <a href="search.html?search=モルカー">モルカー</a>
                <a href="">お茶</a>
                <a href="">呪術廻戦</a>
                <a href="">鬼滅の刀</a>
                <a href="">モルカー</a>
                <a href="">お茶</a>
                <a href="">呪術戦</a>
                <a href="">鬼滅の刀</a>
                <a href="">モルカー</a>
                <a href="">お茶</a>
                <a href="">呪術戦</a>
                <a href="">鬼滅の刀</a>
                <a href="">モルカー</a>
                <a href="">お茶</a>
                <a href="">呪術戦</a>
                <a href="">鬼滅の刀</a>
                <a href="">モルカー</a>
                <a href="">お茶</a>
                <a href="">呪術戦</a>
                <a href="">鬼滅の刀</a>

            </div>
        </section>

        <section class="main-right">
            <h3 class="main-center-title">急上昇中のイラスト</h3>
            <div class="main-right-inner">
                <div class="rank-card">
                    <a href="artwork.html"> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>
                    <div class="">
                        <h2 class="rank-card-title"><a href="artwork.html">願望</a></h2>
                        <a href="user.html" class="rank-card-user">ささくれ(ユーザー名)</a>
                    </div>
                </div>
                <div class="rank-card">
                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>
                    <div class="">
                        <h2 class="rank-card-title"><a href="">願望</a></h2>
                        <a href="" class="rank-card-user">ユーザー名</a>
                    </div>
                </div>
                <div class="rank-card">
                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>
                    <div class="">
                        <h2 class="rank-card-title"><a href="">願望</a></h2>
                        <a href="" class="rank-card-user">ユーザー名</a>
                    </div>
                </div>
                <div class="rank-card">
                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>
                    <div class="">
                        <h2 class="rank-card-title"><a href="">願望</a></h2>
                        <a href="" class="rank-card-user">ユーザー名</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@include('layouts.footer')

