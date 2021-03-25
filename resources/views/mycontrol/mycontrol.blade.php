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
            <p class="user-page-icon"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$user_data['image']}}" alt="ユーザーページのアイコン"></p>
            <div class="user-text-wrap">
                <h2 class="user-page-name">{{$user_data['name']}}</h2>
                <p class="user-self-text">{{$user_data['selfText']}}</p>
            </div>
        </div>

        <div class="user-art-warp">

            <nav class="pagination user-top-pagination">
                <ul>
                    {{$my_artwork->links('pagination::bootstrap-4')}}
                </ul>
            </nav>

            　　　　　　　<!--モーダル-->
            <div id="ex1" class="modal">
                <p class="model-text">投稿した画像を削除してもよろしいでしょうか？</p>
                    <form action="" method="post" class="model-wrap">
                        {{csrf_field()}}
                    <input type="submit" rel="modal:close" class="model-btn-del" value="削除する">
                    <a href="#" rel="modal:close" class="model-btn-back">閉じる</a>
                    </form>
            </div>

            <div class="search-content">
                @foreach($my_artwork as $data)
                <div class="post-card-search">
                    <a href="artwork?id={{$data->id}}">
                        <p class="post-card-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->image}}" alt="最新のイラストの画像"></p>
                    </a>
                    <div class="post-card-info">
                        <div class="post-card-info-inner">
                            <a href=""><p class="post-card-icon"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->user->image}}" alt="ユーザのアイコン"></p></a>
                            <div class="post-card-info-inner-text">
                                <h2 class="post-card-title"><a href="">{{$data->title}}</a></h2>
                                <p class="post-card-name"><a href="">{{$data->user->name}}</a></p>
                                <p class="post-card-count">閲覧数:{{$data->view_count}}</p>
{{--                                <a href="#ex1" rel="modal:open"><i class="far fa-trash-alt del-icon"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <nav class="pagination">
                <ul>
                    {{$my_artwork->links('pagination::bootstrap-4')}}
                </ul>
            </nav>

        </div>
    </div>


    </div>

    </div>


@endsection

@include('layouts.footer')
