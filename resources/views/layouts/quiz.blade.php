<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO - Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="/css/lessonpage.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="/js/app.js"></script>
    <script defer src="/js/quiz/quiz.js"></script>
    <script src="/plugin/confetti/confetti.js"></script>
  </head>
  <body class="has-background-light">
    <div id="app">
      <!-- FOR DARKMODE class="has-background-grey-dark -->
      <navbardash :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></navbardash>
        <div class="container">
          @yield('content')
        </div>
    </div>
  </body>
</html>
