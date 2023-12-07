<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <h1 class="login-title">ログイン</h1>
    <div class="login-form-section">
        <form class="login-form" action="login" method="post">
            @csrf
            <div class="email-section">
                <label class="email-label">メールアドレス</label>
                <input name="email" class="email-input" type="email">
            </div>
            <div class="password-section">
                <label class="password-label">パスワード</label>
                <input name="password" class="password-input" type="password">
            </div>
            <div class="submit-section">
                <input type="submit" class="login-input" value="ログイン">
            </div>
        </form>
    </div>
    <div class="attention-section">
        <p class="attention-to-register">
            会員登録をしていない方<br>
            <span class="intro">↓</span><br>
            <a href="/register" class="link-register">会員登録をする</a>
        </p>
    </div>
</body>
</html>