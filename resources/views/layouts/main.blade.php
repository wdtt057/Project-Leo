<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="description" content="Project L.E.O (Learning Envirnment Online), our free course made to teach kids how to create their own websites. Web design is not only a great creative outlet, but also a valuable life skill that can be used in future careers. Furthermore, learning to code is a great introduction to learning how to problem solve and think logically! Unfortunately, coding is typically not taught in most schools and valuable time to practice is lost. The sooner you start your journey in the wonderful world of programming, the better! Thus Project L.E.O is here as an open window into your bright future.">
      <title>Project LEO</title>
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="/plugin/codemirror/lib/codemirror.css">
      <link rel="stylesheet" href="/plugin/codemirror/theme/shadowfox.css">
      <link rel="stylesheet" href="/plugin/codemirror/addon/hint/show-hint.css">
      <!--<link rel="stylesheet" href="\css\app.css">-->
  </head>
  <body>
    <div id="app" class="has-background-lighter">
    <navbardash :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></navbardash>
      @yield('content')
    </div>
  </body>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
  <script defer src="\js\app.js"></script>
  <script defer src="\js\home.js"></script>
  <script src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
</html>
