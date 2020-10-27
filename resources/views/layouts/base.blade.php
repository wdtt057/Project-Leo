<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="\css\pageload.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="\js\app.js"></script>
    <script src="\js\jquery.min.js"></script>
  </head>
  <body>
    <div id="app">
      <!-- FOR DARKMODE class="has-background-grey-dark -->
        <navbar></navbar>
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
  <div class="preloader">
    <div class="loading-cube"></div>
  </div>
  </body>
</html>

<script type="text/javascript">
    $(window).on('load', function(){ //remove setTimeout function before web launch
        setTimeout(function (){ //delete this line
            $('.preloader').addClass('complete');
        }, 2000); //delete this line
    });
</script>