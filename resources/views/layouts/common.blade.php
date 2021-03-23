<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/655a26a7cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>

@yield('header')

{{--ヘッダーのメニュがない--}}
@yield('headernomenu')

@yield('content')


<!--フラッシュメッセージ　パスワードを変更しました。-->
<div class="passchange_message js-header-message">
    <p>パスワードを変更しました</p>
</div>


@yield('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/655a26a7cf.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="dist/js/footerFixed.js"></script>
<script src="dist/js/app.js"></script>

<script>
    //いいね機能
    $(function () {
        $('.js-star').on('click', function () {
            let $this = $(this);
            let likeId = $this.data('likes');
            $.ajax({
                headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
                url: 'artwork/likes' + location.search,
                method: 'POST',
                data: {
                    'likeId': likeId,
                }
            })
                //通信成功した時の処理
                .done(function () {
                    console.log('せいこう');
                })
                .fail(function () {
                    console.log('しっぱい');
                });
        });



        // var goodBtn = $('.js-good-btn');
        // var goodcount = $('.js-good-count').val();
        // goodBtn.on('click', function () {
        //     goodcount++;
        //     $('.js-good-count').text(goodcount);
        // });


        var goodBtn = $('.js-good-btn');
        var goodcount = $('.js-good-count').text();
            goodBtn.on('click', function () {

                $.ajax({
                    headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
                    url: 'artwork/good' + location.search,
                    method: 'POST',
                    data: {
                        'goodcount': goodcount,
                    }
                })
                    //通信成功した時の処理
                    .done(function () {
                        console.log(goodcount);

                        goodcount++;
                        $('.js-good-count').text(goodcount);
                    })
                    .fail(function () {
                        console.log('goodcount:しっぱい');
                    });
            });

    });


</script>

</body>
</html>
