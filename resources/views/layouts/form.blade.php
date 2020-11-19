<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href="css\styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="/js/app.js"></script>
    <script defer src="/js/form-validation.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <div id="app">
    <!-- FOR DARKMODE class="has-background-grey-dark -->
      <navbar></navbar>
      <section class="section is-small"></section>
      <div class="container">
        @yield('content')
      </div>
    </div>
    <section class="section is-medium"></section>
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        Copyright &copy; 2020 - All Rights reserved - Project LEO
      </p>
    </div>
  </footer>
  </body>
</html>
