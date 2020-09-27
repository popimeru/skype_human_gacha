<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Skype人間ガチャ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <div class="container">
        {{-- <div class="row">
            <!-- タイトルロゴの配置（中央に）-->
            <a class="d-block mx-auto"  href="/"><img src="{{asset("assets/images/human_gacha_skype3.png")}}"></a>
            <form action="/search" method="GET">
                <input type="text" name="query">
                <input type="submit" value="ガチャ機を検索">
            </form>
        </div> --}}
        <header>
            <!-- タイトルロゴの配置（中央に）-->
            <a class="logo" href="/"><img src="{{asset("assets/images/human_gacha_skype3.png")}}"></a>
            <form class="search-box" action="/search" method="GET">
                <input type="search" name="query" value="{{ Request::get('query') }}" placeholder="ガチャ機を検索…">
                <button type="submit">検索</button>
            </form>
        </header>
        @yield('content')
    </div>
</body>
</html>