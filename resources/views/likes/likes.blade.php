@extends('layouts.common')

@section('title','いいね')

@include('layouts.header')

@section('content')
    <div class="main search-main">

        <div class="search-warp">
            <div class="c-top-warp">
                <h3 class="c-top-warp-title">いいね</h3>
            </div>

{{--            <h4 class="search-result-text">総いいね数:1111件</h4>--}}
            <div class="search-content">

                @foreach($likes as $data)
                <div class="post-card-search">
                        <a href="artwork?id={{$data->artpost->id}}">
                            <p class="post-card-cover"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->artpost->image}}" alt="最新のイラストの画像"></p>
                        </a>
                        <div class="post-card-info">
                            <div class="post-card-info-inner">
                                <a href=""><p class="post-card-icon"><img src="http://localhost:8888/create-file/pixpix/public/storage/images/{{$data->artpost->user->image}}" alt="ユーザのアイコン"></p></a>
                                <div class="post-card-info-inner-text">
                                    <h2 class="post-card-title"><a href="">{{$data->artpost->title}}</a></h2>
                                    <p class="post-card-name"><a href="">{{$data->artpost->user->name}}</a></p>
                                    <p class="post-card-count">閲覧数: {{$data->artpost->view_count}}</p>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>

            <nav class="pagination">
{{--                {{$likes->appends(['sort'=>$sort])->links()}}--}}
                                        {{$likes->links('pagination::bootstrap-4')}}

{{--                <ul>--}}
{{--                    <li><a href="" class="pagination-active">1</a></li>--}}
{{--                    <li><a href="">2</a></li>--}}
{{--                    <li><a href="">3</a></li>--}}
{{--                    <li><a href="">4</a></li>--}}
{{--                    <li><a href="">5</a></li>--}}
{{--                </ul>--}}
            </nav>
        </div>
    </div>
@endsection

@include('layouts.footer')
