<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
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
                <span class="icon is-medium">
                  <i class="fa fa-toggle-off" style="color: #ff0033;"></i>
                </span>
                <h1 style="font-size: 1.5rem; color: #000; margin: 0 1rem 0 0.5rem;">时间胶囊</h1>
                {{--<img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">--}}
            </a>
            <a class="nav-item is-tab is-hidden-mobile is-active">添加</a>
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
        {{--<h1 class="title">添加胶囊</h1>--}}
        <form style="max-width: 580px">
            <div class="field">
                <p class="control">
                    <input class="input" style="max-width: 280px" type="text" placeholder="你的名字">
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <input class="input"  style="max-width: 280px" type="text" placeholder="你的邮箱">
                </p>
            </div>
            <div class="field">
                <label class="label">打开时间</label>
                <p class="control">
                    <input class="input" style="max-width: 280px" type="datetime-local" placeholder="打开时间">
                </p>
                {{--<p class="help">打开时间之前，胶囊内容是看不到的。</p>--}}
            </div>
            <div class="field">
                <p class="control">
                    <textarea class="textarea" style="min-height: 160px" placeholder="打开之后能看到的内容"></textarea>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <textarea class="textarea" style="min-height: 80px" placeholder="未到时间打开的提示信息"></textarea>
                </p>
            </div>
            <div class="field is-inline-block-tablet" style="text-align: center">
                <button class="button is-primary is-medium is-fullwidth">添加胶囊</button>
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
