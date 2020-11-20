@extends('layouts.form')

@section('content')
<div class="columns">
  <div class="column is-three-fifths is-offset-one-fifth box has-background-light">
    <h1 class="title is-3">Login</h1>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="field">
        <p class="control has-icons-left">
          <input id="email" class="input form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong class="has-text-danger">{{ $message }}</strong>
            </span>
          @enderror
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
        </p>
      </div>
      <div class="field">
        <p class="control has-icons-left">
          <input id="password" class="input form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong class="has-text-danger">{{ $message }}</strong>
            </span>
          @enderror
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
          @endif
        </p>
      </div>
      <div class="field">
        <p class="control">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label for="remember">
            {{ __('Remember Me') }}
          </label>
        </p>
      <div class="field">
        <p class="control">
          <button type="submit" class="button is-success">
            {{ __('Login') }}
          </button>
          <br>
          <span>New User? <a href="/register">Sign up here</a></span>
        </p>
      </div>
    </form>
  </div>
</div>
@endsection
