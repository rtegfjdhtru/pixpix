@section('header')
    <header class="header">
        <div class="header-inner">
            <h1 class="header-title"><a href="index.html">ぴくぴく</a></h1>

            <!--スマホのみ-->
            <div class="menu-trigger js-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <form action="" method="get" class="header-form">
                <input type="text" name="search" placeholder="検索" class="header-input">
                <input type="submit" class="header-submit" value="検索">
            </form>
        </div>

        <nav class="header__nav">

            <ul class="js-ul">
                <li class=""><a href="" class="index.html">ホーム</a></li>
                <li class=""><a href="likes.html" class="">いいね</a></li>
                <li class=""><a href="artpost.html" class="">投稿</a></li>
                <li class=""><a href="profile.html" class="">プロフィール</a></li>
                <li class=""><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
　　　　　　　　　　　{{--ログアウト処理--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </header>
@endsection
