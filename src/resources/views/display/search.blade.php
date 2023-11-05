<html>
    <head>
        <title>Search_Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
    </head>

    <body>
        <h1>検索結果</h1>
        <div id="searchResult">
            <table>
                @if($items != null)
                    @foreach($items as $item)
                        <tr><td>{{$item->name}}</td></tr>
                    @endforeach
                @endif
            </table>
            <form action="/base/setGym" method="post">
                @csrf
                <select name="Chat_Gym">
                    @if($items != null)
                        @foreach($items as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    @endif
                </select>
                <input type="submit" value="選択">
            </form>

            <p>通っているジムを選択してください！<br>
                そのジムの掲示板を見ることができます！</p>
            <a href="/base">トップページに戻る⇒</a>
        </div>
    </body>
</html>