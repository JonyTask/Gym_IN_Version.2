<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>
<body>
    <h1 class="register-title">会員登録</h1>
    <div class="register-form-section">
        <form class="register-form" action="login" method="post">
            @csrf
            <div class="name-section">
                <label class="name-label">お名前</label>
                <input  name="name" class="name-input" type="text">
            </div>
            <div class="email-section">
                <label class="email-label">メールアドレス</label>
                <input name="email" class="email-input" type="email">
            </div>
            <div class="password-section">
                <label class="password-label">パスワード</label>
                <input name="password" class="password-input" type="password">
            </div>
            <div class="confirm-section">
                <label class="confirm-label">パスワード確認用</label>
                <input name="password_confirmation" class="confirm-input" type="password">
            </div>
            <div class="submit-section">
                <input type="submit" class="login-input" value="会員登録">
            </div>
        </form>
    </div>
    <div class="attention-section">
        <p class="attention-to-login">
            会員登録済みの方<br>
            <span class="intro">↓</span><br>
            <a href="" class="link-login">ログインする</a>
        </p>
    </div>
</body>
</html>