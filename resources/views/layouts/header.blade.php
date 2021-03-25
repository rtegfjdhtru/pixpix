@section('header')
    <header class="header">
        <div class="header-inner">
            <h1 class="header-title"><a href="index">ぴくぴく</a></h1>

            <!--スマホのみ-->
            <div class="menu-trigger js-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <form action="{{url('search')}}" method="get" class="header-form">
                <input type="text" name="search" placeholder="検索" class="header-input">
                <input type="submit" class="header-submit" value="検索">
            </form>
        </div>

        <nav class="header__nav">

            <ul class="js-ul">
                <li class=""><a href="{{url('index')}}" class="">ホーム</a></li>
                <li class=""><a href="{{url('likes')}}" class="">いいね</a></li>
                <li class=""><a href="{{url('artpost')}}" class="">投稿</a></li>
                <li class=""><a href="{{url('profile')}}" class="">プロフィール</a></li>
                <li class=""><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
　　　　　　　　　　　{{--ログアウト処理--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </header>
@endsection
