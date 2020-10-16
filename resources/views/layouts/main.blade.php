<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="\css\app.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="\js\app.js"></script>
</head>
<body>
	<div id="app">
	<nav class="navbar is-dark">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/home">
					<i class="fas fa-home"></i>&nbsp;Home
        </a>
        <span class="navbar-burger burger" :class="{'is-active':isActive}" @click="burgerToggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
    <div id="navMenu" class="navbar-menu" :class="{'is-active':isActive}">
      <div class="navbar-start">
          <!-- <a href="#" class="navbar-item">Pricing</a> -->
      </div>
        <div class="navbar-end">
					<a href="/progress" class="navbar-item">Progress&nbsp;<i class="far fa-chart-bar"></i></a>
					<div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">{{ Auth::user()->name }}</a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="#"><i class="fas fa-user"></i>&nbsp;Profile</a>
              <a class="navbar-item" href="#"><i class="fas fa-cog"></i>&nbsp;Settings</a>
							<a href="#" class="navbar-item"><i class="far fa-question-circle"></i>&nbsp;Help</a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="{{ route('logout') }}" style="color:red; font-weight: bold;"
							onclick="event.preventDefault();
								document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
							{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
			<main class="py-4">
					@yield('content')
			</main>
	</div>
</body>
</html>
