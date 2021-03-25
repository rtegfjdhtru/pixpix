@extends('layouts.common')


@section('title','メインページ')

@include('layouts.header')

@section('content')

    <div class="main">

        <section class="main-left">
{{--            @foreach($userData as $item)--}}

            <div class="main-left-field">
                <div class="main-left-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$user['image']}}" alt="自分の画像" class="main-left-img"></div>
                <div class="main-left-backcolor">
                    <h2 class="main-left-name">{{($user['name'])}}</h2>
                    <div class="main-left-info">
                        <a href="profile" class="main-left-link">プロフィール</a>
                        <a href="mycontrol" class="main-left-link">イラスト管理</a>
                        <a href="history" class="main-left-link">履歴</a>
                    </div>
                </div>
            </div>
{{--            @endforeach--}}
        </section>


        <section class="main-center">
            <div class="main-center-title">新着のイラスト</div>

            <div class="main-center-postarea-body">
                <div class="main-center-postarea">

                    @foreach($items as $item)
                        <div class="post-card">
                            <a href="artwork?id={{$item->id}}">
                                <p class="post-card-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{($item->image)}}" alt="最新のイラストの画像"></p>
                            </a>
                            <div class="post-card-info">
                                <div class="post-card-info-inner">
                                    <a href="user.html"><p class="post-card-icon"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$item->user->image}}" alt="ユーザのアイコン"></p></a>
                                    <div class="post-card-info-inner-text">
                                        <h2 class="post-card-title"><a href="artwork.html">{{$item->title}}</a></h2>
                                        <p class="post-card-name"><a href="user.html">{{$item->user->name}}</a></p>
                                        <p class="post-card-count">閲覧数:{{$item->view_count}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <h3 class="main-center-title">急上昇中のキーワード</h3>
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
                    @foreach($rank as $data)
                    <a href="artwork?id={{$data->id}}"> <p class="rank-card-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->image}}" alt="急上昇イラスト"></p></a>
                    <div class="">
                        <h2 class="rank-card-title"><a href="artwork.html">{{$data->title}}</a></h2>
                        <a href="user.html" class="rank-card-user">ささくれ(ユーザー名)</a>
                    </div>
                    @endforeach

                </div>
{{--                <div class="rank-card">--}}
{{--                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>--}}
{{--                    <div class="">--}}
{{--                        <h2 class="rank-card-title"><a href="">願望</a></h2>--}}
{{--                        <a href="" class="rank-card-user">ユーザー名</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="rank-card">--}}
{{--                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>--}}
{{--                    <div class="">--}}
{{--                        <h2 class="rank-card-title"><a href="">願望</a></h2>--}}
{{--                        <a href="" class="rank-card-user">ユーザー名</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="rank-card">--}}
{{--                    <a href=""> <p class="rank-card-cover"><img src="dist/img/img9.jpg" alt="急上昇イラスト"></p></a>--}}
{{--                    <div class="">--}}
{{--                        <h2 class="rank-card-title"><a href="">願望</a></h2>--}}
{{--                        <a href="" class="rank-card-user">ユーザー名</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    </div>

@endsection

@include('layouts.footer')

