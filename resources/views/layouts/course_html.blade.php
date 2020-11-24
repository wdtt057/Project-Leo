<!DOCTYPE html>
<html>
  <head>
    <!-- Congratulations you found me!! Project L.E.O is the best! -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO - Lesson</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="/plugin/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/plugin/codemirror/theme/shadowfox.css">
    <link rel="stylesheet" href="/plugin/codemirror/addon/hint/show-hint.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="/css/lessonpage.css">
    <link rel="stylesheet" href="/plugin/glider/css/glider.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="/plugin/codemirror/lib/codemirror.js"></script>
    <script src="/plugin/codemirror/mode/xml/xml.js"></script>
    <script src="/plugin/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="/plugin/codemirror/mode/css/css.js"></script>
    <script src="/plugin/codemirror/mode/javascript/javascript.js"></script>
    <script src="/plugin/codemirror/addon/hint/show-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/html-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/css-hint.js"></script>
    <script src="/plugin/codemirror/addon/hint/javascript-hint.js"></script>
    <script src="/plugin/confetti/confetti.js"></script>
    <script defer src="/js/app.js"></script>
    <script defer src="/js/quiz/quiz.js"></script>
    <script defer src="/js/video/video.js"></script>
    <script defer src="/js/slides/slides.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script defer src="/plugin/glider/js/glider.min.js"></script>
    <script defer src="/js/carousel.js"></script>
  </head>
  <body>
    <div id="app" class="lesson-bg">
      <!-- FOR DARKMODE class="has-background-grey-dark -->
      <navbardash :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></navbardash>
      <section class="section is-small">
        @yield('content')
      </section>
    </div>
    <script defer src="/js/lesson-page.js"></script>
    <script defer src="/js/html-editor.js"></script>
  </body>
</html>
