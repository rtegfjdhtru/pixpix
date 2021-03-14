<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>--}}
{{--<script src="https://kit.fontawesome.com/655a26a7cf.js" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="dist/js/footerFixed.js"></script>
<script src="dist/js/app.js"></script>


</body>
</html>
