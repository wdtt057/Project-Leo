<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="\css\app.css">-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="\js\app.js"></script>
    <script defer src="\js\home.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
</head>
<body>
	<div id="app" class="has-background-lighter">
  <navbardash :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></navbardash>
    @yield('content')
	</div>
</body>
</html>
