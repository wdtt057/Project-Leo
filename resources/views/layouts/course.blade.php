<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <!--<link rel="stylesheet" href="\css\app.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="/plugin/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/plugin/codemirror/theme/shadowfox.css">
    <link rel="stylesheet" href="/plugin/codemirror/addon/hint/show-hint.css">
    <script src="/plugin/codemirror/lib/codemirror.js"></script>
    <script src="/plugin/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="/plugin/codemirror/mode/css/css.js"></script>
    <script src="/plugin/codemirror/mode/javascript/javascript.js"></script>
    <script src="/plugin/codemirror/addon/hint/show-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/html-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/css-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/javascript-hint.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="\js\app.js"></script>
    <script defer src="\js\custom.js"></script>
    <script src="\plugin\confetti\confetti.js"></script>
</head>
<body>
    <div id="app" class="has-background-white-ter">
    <navbardash :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></navbardash>
        <div class="container is-fluid">
                @yield('content')
        </div>
	</div>
</body>
</html>
