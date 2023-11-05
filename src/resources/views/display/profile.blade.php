<html>
    <head>
        <title>プロフィール検索</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    </head>

    <body>
        <div class="profile-section">
            <div class="problock">
                <p class="proItem">名前</p>
                <p class="proContent">{{$item->name}}</p>
            </div>

            <div class="problock">
                <p class="proItem">年齢</p>
                <p class="proContent">{{$item->age}}</p>
            </div>

            <div class="problock">
                <p class="proItem">性別</p>
                <p class="proContent">{{$item->gender}}</p>
            </div>

            <div class="problock">
                <p class="proItem">プロテイン</p>
                <p class="proContent">{{$item->protein}}</p>
            </div>

            <div class="problock">
                <p class="proItem">好きな部位</p>
                <p class="proContent">{{$item->mustle}}</p>
            </div>


            <div class="problock">
                <p class="proItem">自己紹介</p>
                <p class="proContent">{{$item->PR}}</p>
            </div>

        </div>
        <a href="/base">トップページに戻る⇒</a>
    </body>
</html>