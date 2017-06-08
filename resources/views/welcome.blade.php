<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<nav class="nav">
    <div class="container" style="max-width: 950px">
        <div class="nav-left">
            <a class="nav-item">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
            </a>
            <a class="nav-item is-tab is-hidden-mobile is-active">首页</a>
            <a class="nav-item is-tab is-hidden-mobile">添加</a>
            <a class="nav-item is-tab is-hidden-mobile">打开</a>
        </div>
        <span class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </span>
        <div class="nav-right nav-menu">
            <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
            <a class="nav-item is-tab is-hidden-tablet">Features</a>
            <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
            <a class="nav-item is-tab is-hidden-tablet">About</a>
            <a class="nav-item is-tab">胶囊日记</a>
        </div>
    </div>
</nav>
<div class="section">
    <div class="container" style="max-width: 860px">
        <h1 class="title">添加胶囊</h1>
        <form style="max-width: 580px">
            <div class="field">
                <p class="control">
                    <input class="input" style="max-width: 240px" type="text" placeholder="你的名字">
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <input class="input"  style="max-width: 240px" type="text" placeholder="你的邮箱">
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <input class="input" style="max-width: 240px" type="text" placeholder="打开时间">
                </p>
                <p class="help">打开时间之前，胶囊内容是看不到的。</p>
            </div>
            <div class="field">
                <p class="control">
                    <textarea class="textarea" placeholder="胶囊内容"></textarea>
                </p>
                <p class="help">胶囊内容不能超过5000字。</p>
            </div>
            <div class="field">
                <p class="control">
                    <textarea class="textarea" placeholder="未到期的提示信息"></textarea>
                </p>
                <p class="help">打开时间 之前尝试打开胶囊，会看到提示信息。</p>
            </div>
            <div class="field is-grouped">
                <p class="control">
                    <button class="button is-primary">添加胶囊</button>
                </p>
            </div>
        </form>

        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
