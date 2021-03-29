@extends('layouts.common')

@section('title','検索結果')

@include('layouts.header')

@section('content')
    <div class="main search-main">

        <div class="search-warp">
            <div class="c-top-warp">
                <h3 class="c-top-warp-title">検索結果</h3>
            </div>

            {{--            <h4 class="search-result-text">総いいね数:1111件</h4>--}}
            <div class="search-content">
{{--@php print_r($searchData); @endphp--}}

                @foreach($searchData as $data)
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
                                    <p class="post-card-count">閲覧数: {{$data->view_count}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav class="pagination">
                {{$searchData->appends(Request::only('search'))->links('pagination::bootstrap-4')}}
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
