@extends('layouts.app')

@section('mainArea')
    <div class="flex" v-if="show == '1'">
        <div class="section-circle" onclick="ComeIn_search()">
            <p>通っているジムを検索する</p>
        </div>

        <div id="GymSearch">
            <span onclick="GoOut_search()">閉じる</span>
            <div id="searchForm">
                <form method="get" action="base/search">
                    @csrf
                    <div id="prefectureArea">
                        <label>都道府県</label>
                        <input type="text" name="prefecture" id="prefectureText">
                    </div>
                    <div id="cityArea">
                        <label>市区町村</label>
                        <input type="text" name="city" id="cityText">
                    </div>
                    <input type="submit" value="検索" name="search" class="submit_" id="submit_search">
                </form>
            </div>
            <p id="errorArea"></p>
        </div>

        <div class="section-circle" onclick="ComeIn_pro()">
            <p>プロフィール編集</p>
        </div>

        <div id="proEdit">
            <h1>プロフィール</h1>
            <span onclick="GoOut_pro()">閉じる</span>
            <div class="profile-section">
                <div class="problock">
                    <p class="proItem">名前</p>
                    <p class="proContent">：{{$UserName}}</p>
                </div>

                <div class="problock">
                    <p class="proItem">年齢</p>
                    <p class="proContent">：{{$UserAge}}歳</p>
                </div>

                <div class="problock">
                    <p class="proItem">性別</p>
                    <p class="proContent">：{{$UserGender}}</p>
                </div>

                <div class="problock">
                    <p class="proItem">プロテイン</p>
                    <p class="proContent">：{{$UserProtein}}</p>
                </div>

                <div class="problock">
                    <p class="proItem">好きな部位</p>
                    <p class="proContent">：{{$UserMustle}}</p>
                </div>

                <div class="problock">
                    <p class="proItem">自己紹介</p>
                    <p class="proContent">：{{$UserPR}}</p>
                </div>

                <div class="problock">
                    <p class="proItem">所属ジム</p>
                    <p class="proContent">：{{$UserGym}}</p>
                </div>
            </div>
            <div id="DisEdit" onclick="EditPage_Come()">編集する</div>
        </div>

        <div id="EditPage">
            <span onclick="GoOut_edit()">閉じる</span>
            <div id="EditForm">
                <form action="base/edit" method="post">
                    @csrf
                    <table>
                        <tr>
                            <th>年齢</th>
                            <td>
                                <input type="number" name="age"  value="{{$UserAge}}">
                            </td>
                        </tr>

                        <tr>
                            <th>性別</th>
                            <td>
                                <select name="gender">
                                    <option value="男性">男性</option>
                                    <option value="女性">女性</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>プロテイン</th>
                            <td>
                                <input type="text" name="protein" value="{{$UserProtein}}">
                            </td>
                        </tr>
                        <tr>
                            <th>好きな筋肉</th>
                            <td>
                                <input type="text" name="preMustle" value="{{$UserMustle}}">
                            </td>
                        </tr>
                        <tr>
                            <th>自己PR文</th>
                            <td>
                                <input type="text" name="PR_TEXT" value="{{$UserPR}}">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="編集" class="submit_">
                </form>
            </div>
        </div>

        <div class="section-circle motivation-switch" onclick="ComeIn(),motivation_up()">
            <p>モチベーション管理</p>
        </div>

        <div id="motivation-wrapper">
            <span onclick="GoOut()">閉じる</span>
            <p id="motivation-comment"></p>
        </div>
    </div>

    <div class="Group_chat" v-if="show == '2'">
        @if($UserGym != null)
            <div id="ChatArea">
                @foreach($lines as $line)
                    <div class="CommentArea" id="{{$line->id}}">
                        <span class="CommentMessage">{{$line->message}}</span>
                        <div class="right-box">
                            <span class="CommentName" value="{{$line->name}}">{{$line->name}}</span>
                            <span class="CommentTime">{{$line->created_at}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="TypeArea">
                <form action="/base/message" method="post">
                    @csrf
                    <textarea name="message"></textarea>
                    <input type="submit" name="add" value="📨">
                </form>
            </div>
        @endif
    </div>

    <div class="Training_record" v-if="show == '3'">
        <div class="container-calendar">
            <h4 id="monthAndYear"></h4>
            <div class="button-container-calendar">
                <button id="previous" onclick="previous()">←</button>
                <button id="next" onclick="next()">→</button>
            </div>
            <table class="table-calendar" id="calendar" data-lang="ja">
                <thead id="thead-month"></thead>
                <tbody id="calendar-body"></tbody>
            </table>

            <div class="footer-container-calendar">
                <label>日付指定：</label>
                <select id="month" onchange="jump()">
                    <option value=0>1月</option>
                    <option value=1>2月</option>
                    <option value=2>3月</option>
                    <option value=3>4月</option>
                    <option value=4>5月</option>
                    <option value=5>6月</option>
                    <option value=6>7月</option>
                    <option value=7>8月</option>
                    <option value=8>9月</option>
                    <option value=9>10月</option>
                    <option value=10>11月</option>
                    <option value=11>12月</option>
                </select>
                <select id="year" onchange="jump()"></select>
            </div>

            <div class="Training_Day" onclick="FadeIn()">
                ジムへ行った日！
            </div>
        </div>

        <div class="modal">
            <div class="day-selection">
                <span onclick="FadeOut()">×</span>
                <h2>あなたがジムへ行った日！</h2>
                <label>日付指定：</label>
                <select id="month-selection" onchange="jump2(),select_Date()">
                    <option value=0>1月</option>
                    <option value=1>2月</option>
                    <option value=2>3月</option>
                    <option value=3>4月</option>
                    <option value=4>5月</option>
                    <option value=5>6月</option>
                    <option value=6>7月</option>
                    <option value=7>8月</option>
                    <option value=8>9月</option>
                    <option value=9>10月</option>
                    <option value=10>11月</option>
                    <option value=11>12月</option>
                </select>
                <select id="date-selection">
                </select><br>

                <div class="Gym_mark" onclick="addClick()">
                    Nice Training
                </div><br>

                <div class="Gym_mark" onclick="deleteClick()">
                    取り消しボタン
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/javaScript/calendar.js') }}"></script>
    </div>

    <div id="UserInfo" v-if="show == '4'">
        <form action="base/profile" method="get">
            @csrf
            <p>プロフィールを知りたいユーザー名を入力してください</p>
            <input type="text" name="UserPro" id="UserPro" autocomplete="off">
            <input type="submit" class="submit_" value="検索">
        </form>
        </div>
    </div>
@endsection

