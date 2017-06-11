<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>打开胶囊 - 时间胶囊</title>

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
            <a class="nav-item is-tab is-active">首页</a>
            <a class="nav-item is-tab">添加</a>
        </div>
        <div class="nav-right is-hidden-mobile">
            <a class="nav-item is-tab">胶囊日记</a>
        </div>
    </div>
</nav>
<div class="section is-flex" style="flex: 1;">
    <div class="container" style="margin: auto; flex: 1; max-width: 760px">
        <div class="field has-addons" style="justify-content: center;">
            <p class="control" style="flex: 1; max-width: 280px">
                <input class="input is-primary" type="text" placeholder="KEY">
            </p>
            <p class="control">
                <a class="button is-primary">
                    打开胶囊
                </a>
            </p>
        </div>
        <div style="padding-top: 20px;">
            <h5 class="title is-4">
                这颗胶囊未到提取时间，不能打开。
                打开时间在 2017-09-11 15:15:51，距离现在 7947979 秒。
            </h5>
            <div class="">
                张胶囊 给你留的提示信息：
                222
            </div>
        </div>
        <div style="padding-top: 20px;">
            <h5 class="title is-4">时间管理员 在 2009-09-22 19:56:16 对你说：</h5>
            <div>
                <pre class="notification" style="white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word; font-size: 1rem; line-height: 1.8rem; padding: 1.2rem;">1、什么是“时间胶囊”。
“时间胶囊”是一个给未来的留言板，你可以为自己，朋友，爱人，家人，或者任何人留下你现在想对他们说的话，并且设置一个未来能够打开“时间胶囊”的时间，这样他们就能在未来的某天通过网站给你的密码来这里打开“时间胶囊”,读到你的留言。

“时间胶囊”
可以是一个预言
可以是一篇日记
可以是一句牢骚
可能只是一句“我爱你”
请发挥你的想象力使用它吧。

2、你已经有了一个“密码（KEY）”了么？
如果你已经得到朋友给你的KEY,请点击主页上“OPEN 提取”，输入你得到的KEY,然后在某个时间打开朋友留给你的时间胶囊。

3、你想留下一个“时间胶囊”？
如果你想留下一个“时间胶囊”，请点击主页上的“PUT 添加”，并且按照提示填写你的信息，之后你就能获得一个“密码 KEY”了，将这个“密码 KEY”和我们的网址发给你的朋友，朋友就能在未来你限定的时间之后提取胶囊了。

4、你想删除一个“时间胶囊”？
对不起，任何添加的“时间胶囊”都是不可撤销的。

5、你担心隐私安全？
请放心，我们能确保您的信息保密，任何隐私不会受到威胁。
                </pre>
            </div>
        </div>
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
